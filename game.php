<?php
declare(strict_types=1);
// Intentionally not login-gated: opened from present.php on a classroom
// projector, same trust model as present.php itself.
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/backgrounds.php';
require_once __DIR__ . '/includes/hangman.php';
require_once __DIR__ . '/includes/whoami.php';

$id = (int)($_GET['id'] ?? 0);
$type = in_array($_GET['type'] ?? '', ['hangman', 'memory', 'whoami'], true) ? $_GET['type'] : 'match';

$stmt = db()->prepare('SELECT * FROM lessons WHERE id = ?');
$stmt->execute([$id]);
$lesson = $stmt->fetch();

if (!$lesson) {
    http_response_code(404);
    die('Lesson not found.');
}

// Attaches a real photo wherever one exists for the given word, regardless
// of lesson level - the vocab_images table is shared across all lessons, so
// e.g. a pre-intermediate lesson/game can still pick up a photo if it
// happens to use a word a beginner lesson already fetched an image for.
function attach_word_images(array $items, string $wordField): array {
    if (!$items) return $items;
    $words = array_map(static fn($item) => mb_strtolower(trim($item[$wordField])), $items);
    $placeholders = implode(',', array_fill(0, count($words), '?'));
    $stmt = db()->prepare("SELECT word, image_path FROM vocab_images WHERE word IN ($placeholders)");
    $stmt->execute($words);
    $imageMap = [];
    foreach ($stmt->fetchAll() as $row) {
        $imageMap[$row['word']] = $row['image_path'];
    }
    foreach ($items as &$item) {
        $key = mb_strtolower(trim($item[$wordField]));
        if (isset($imageMap[$key])) {
            $item['img'] = $imageMap[$key];
        }
    }
    unset($item);
    return $items;
}

$vocab = json_decode($lesson['vocab'], true) ?: [];
$vocab = attach_word_images($vocab, 'en');

$hangman = extract_hangman_words(
    (int)$lesson['id'],
    (string)$lesson['level'],
    array_column($vocab, 'en')
);
$hangman = attach_word_images($hangman, 'word');

$whoami = extract_whoami_words((int)$lesson['id'], (string)$lesson['level']);
$whoami = attach_word_images($whoami, 'word');

// Memory Match needs at least enough photographed words to fill a game
// board; otherwise pairing English words with their RU/KZ translation makes
// more sense than forcing photos onto abstract vocabulary that has none.
$withImg = array_filter($vocab, static fn($w) => !empty($w['img']));
$memoryUseImages = count($withImg) >= min(8, count($vocab));

$data = [
    'id' => (int)$lesson['id'],
    'topic' => $lesson['topic'],
    'level' => $lesson['level'],
    'vocab' => $vocab,
    'hangman' => $hangman,
    'whoami' => $whoami,
    'type' => $type,
    'memoryUseImages' => $memoryUseImages,
];

$typeLabels = ['hangman' => '🔠 Hangman', 'memory' => '🧠 Memory Match', 'match' => '🎯 Match', 'whoami' => '❓ Who Am I?'];
$typeLabel = $typeLabels[$type];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($typeLabel, ENT_QUOTES, 'UTF-8') ?> — <?= htmlspecialchars($data['topic'], ENT_QUOTES, 'UTF-8') ?></title>
<link rel="stylesheet" href="<?= av('assets/css/backgrounds.css') ?>">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap');
    * { margin: 0; padding: 0; box-sizing: border-box; }
    html, body { min-height: 100%; font-family: 'Inter', 'Segoe UI', Arial, sans-serif; color: #fff; }
    body { display: flex; align-items: flex-start; justify-content: center; padding: 90px 24px 40px; overflow-y: auto; }

    .topbar {
        position: fixed; top: 0; left: 0; right: 0; z-index: 5;
        display: flex; justify-content: space-between; align-items: center;
        padding: 18px 26px; pointer-events: none;
    }
    .topbar .title-block { background: rgba(0,0,0,0.35); backdrop-filter: blur(10px); padding: 8px 16px; border-radius: 999px; pointer-events: auto; }
    .topbar .title-block .t { font-weight: 700; }
    .topbar .title-block .l { font-size: 0.75em; opacity: 0.7; text-transform: uppercase; letter-spacing: 0.06em; }
    .back-link {
        background: rgba(0,0,0,0.35); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);
        color: #fff; padding: 8px 16px; border-radius: 999px; text-decoration: none; font-weight: 700; font-size: 0.85em;
        pointer-events: auto;
    }
    .back-link:hover { background: rgba(0,0,0,0.55); }

    .tts-toggle {
        position: fixed; top: 64px; right: 26px; z-index: 6; display: flex; align-items: center; gap: 8px;
        background: rgba(0,0,0,0.35); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);
        color: #fff; padding: 7px 14px 7px 12px; border-radius: 999px; font-size: 0.85em; font-weight: 700;
    }
    .tts-toggle .switch { position: relative; width: 36px; height: 20px; flex: 0 0 auto; }
    .tts-toggle .switch input { opacity: 0; width: 0; height: 0; }
    .tts-toggle .slider { position: absolute; inset: 0; background: rgba(255,255,255,0.3); border-radius: 999px; cursor: pointer; transition: background 0.2s; }
    .tts-toggle .slider::before { content: ''; position: absolute; width: 16px; height: 16px; left: 2px; top: 2px; background: #fff; border-radius: 50%; transition: transform 0.2s; }
    .tts-toggle input:checked + .slider { background: #5b5fef; }
    .tts-toggle input:checked + .slider::before { transform: translateX(16px); }
    body.read-aloud-off .speak-btn { display: none; }
    .speak-btn {
        border: none; background: rgba(255,255,255,0.18); color: #fff; width: 26px; height: 26px; border-radius: 50%;
        cursor: pointer; font-size: 0.8em; display: inline-flex; align-items: center; justify-content: center;
        margin-left: 6px; vertical-align: middle; flex: 0 0 auto; font-family: inherit;
    }
    .speak-btn:hover { background: rgba(255,255,255,0.32); }

    .game-wrap { position: relative; z-index: 2; max-width: 940px; width: 100%; }
    .restart-btn {
        display: block; margin: 20px auto 0; background: #5b5fef; font-family: inherit;
        color: #fff; border: none; padding: 11px 26px; border-radius: 999px; cursor: pointer; font-weight: 700;
    }

    /* Match game */
    .match-prompt { margin-bottom: 18px; text-align: center; }
    .match-photo { width: 150px; height: 150px; object-fit: cover; border-radius: 16px; margin: 0 auto 14px; display: block; box-shadow: 0 6px 20px rgba(0,0,0,0.5); }
    .match-tr { font-size: 1.3em; font-weight: 600; line-height: 1.5; }
    .match-feedback { min-height: 1.4em; font-weight: 700; margin-bottom: 14px; text-align: center; }
    .match-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; }
    .match-opt {
        border: none; border-radius: 12px; padding: 16px 10px; color: #fff; font-weight: 700; font-size: 1.05em;
        cursor: pointer; font-family: inherit; box-shadow: 0 4px 12px rgba(0,0,0,0.35);
    }
    .match-opt:disabled { opacity: 0.4; cursor: default; }
    .match-status { margin-top: 18px; opacity: 0.75; font-size: 0.9em; text-align: center; }
    .match-complete { text-align: center; }
    .match-complete h3 { font-size: 1.4em; margin-bottom: 8px; }

    /* Hangman game */
    @keyframes keyShake { 0%, 100% { transform: translateX(0); } 25% { transform: translateX(-5px); } 75% { transform: translateX(5px); } }
    @keyframes keyPop { 0% { transform: scale(1); } 50% { transform: scale(1.2); } 100% { transform: scale(1); } }
    /* The newest body part sketches itself in (stroke draws on) then lands
       with a springy bounce; parts already on screen stay put instead of
       replaying every time a new wrong guess redraws the figure. */
    @keyframes hgLine { to { stroke-dashoffset: 0; } }
    @keyframes hgSettle { from { transform: scale(1.3); } to { transform: scale(1); } }
    @keyframes hgSwing { 0%, 100% { transform: rotate(-2.5deg); } 50% { transform: rotate(2.5deg); } }
    .hg-part { transform-box: fill-box; transform-origin: center; animation: hgSettle .35s cubic-bezier(.34,1.56,.64,1) both; animation-delay: .4s; }
    .hg-part path, .hg-part circle, .hg-part line { stroke-dasharray: 1; stroke-dashoffset: 1; animation: hgLine .4s ease-out both; }
    .hg-swing { animation: hgSwing 2.4s ease-in-out infinite; transform-origin: 165px 48px; }
    @keyframes hgHeartBreak { 0% { transform: scale(1) rotate(0); } 40% { transform: scale(1.35) rotate(-10deg); } 100% { transform: scale(1) rotate(0); opacity: 0.5; } }
    .hangman-hearts { display: flex; gap: 5px; margin-top: 10px; font-size: 1.25em; }
    .hg-heart.broken { animation: hgHeartBreak .4s ease; }
    @keyframes hgTileIn { from { transform: scale(0.5) rotate(-8deg); opacity: 0; } 60% { transform: scale(1.15) rotate(3deg); } to { transform: scale(1) rotate(0); opacity: 1; } }
    .hg-tile.filled { animation: hgTileIn .3s ease-out; }
    @keyframes hgConfettiBurst {
        0% { transform: translate(-50%, -50%) translate(0, 0) rotate(0) scale(0.6); opacity: 1; }
        100% { transform: translate(-50%, -50%) translate(var(--tx), var(--ty)) rotate(var(--r)) scale(1); opacity: 0; }
    }
    .hg-confetti-wrap { position: relative; }
    .hg-confetti { position: absolute; left: 50%; top: 30%; font-size: 1.5em; pointer-events: none; animation: hgConfettiBurst .9s ease-out both; }
    @keyframes hgLoseShake {
        0%, 100% { transform: translateX(0) rotate(0); }
        20% { transform: translateX(-10px) rotate(-1deg); }
        40% { transform: translateX(10px) rotate(1deg); }
        60% { transform: translateX(-6px) rotate(-0.5deg); }
        80% { transform: translateX(6px) rotate(0.5deg); }
    }
    .hangman-panel.hg-lose { animation: hgLoseShake .5s ease; }
    @keyframes hgResultPop { from { transform: scale(0.7); opacity: 0; } to { transform: scale(1); opacity: 1; } }
    .hangman-result h3 { animation: hgResultPop .35s cubic-bezier(.34,1.56,.64,1) both; }
    .hangman-panel {
        background: linear-gradient(160deg, #eef1f8, #d7deeb); border-radius: 24px; padding: 20px 24px;
        color: #1c2130; max-width: 780px; width: 100%; margin: 0 auto; box-shadow: 0 24px 60px rgba(0,0,0,0.55);
    }
    .hangman-topline { display: flex; justify-content: center; gap: 8px; margin-bottom: 14px; flex-wrap: wrap; }
    .hangman-pill { background: #fff; border-radius: 999px; padding: 6px 16px; font-weight: 800; font-size: 0.85em; box-shadow: 0 3px 10px rgba(0,0,0,0.15); }
    .hangman-layout { display: flex; align-items: flex-start; justify-content: center; gap: 20px; }
    .hangman-left { display: flex; flex-direction: column; align-items: center; flex: 1 1 auto; min-width: 0; }
    .hangman-alphabet { display: grid; grid-template-columns: repeat(6, 1fr); gap: 6px; flex: 0 0 auto; width: 236px; align-content: start; }
    .letter-btn {
        width: 36px; height: 36px; border-radius: 50%; border: none; background: #fff; color: #232838;
        box-shadow: 0 3px 8px rgba(0,0,0,0.18); font-weight: 800; font-size: 0.95em; cursor: pointer;
        font-family: inherit; transition: transform 0.15s;
    }
    .letter-btn:hover:not(:disabled) { transform: scale(1.08); }
    .letter-btn:disabled { opacity: 0.35; cursor: default; }
    .letter-btn.correct { background: #4ade80; color: #fff; animation: keyPop .3s ease; }
    .letter-btn.wrong { background: #f87171; color: #fff; animation: keyShake 0.4s; }
    .hangman-word-tiles { display: flex; gap: 6px; flex-wrap: wrap; justify-content: center; margin-top: 10px; }
    .hg-tile {
        width: 34px; height: 42px; border-radius: 8px; background: #fbbf24; display: flex; align-items: center;
        justify-content: center; font-weight: 800; font-size: 1.15em; color: #1c2130; box-shadow: 0 3px 8px rgba(0,0,0,0.22);
    }
    .hangman-clue-box { margin-top: 12px; font-size: 0.95em; text-align: center; max-width: 400px; line-height: 1.45; }
    .hangman-hint-btn {
        margin-top: 10px; background: #5b5fef; color: #fff; border: none; padding: 7px 18px; border-radius: 999px;
        font-weight: 700; cursor: pointer; font-family: inherit; font-size: 0.85em;
    }
    .hangman-hint-box { margin-top: 10px; background: rgba(91,95,239,0.1); border-radius: 12px; padding: 10px 14px; font-size: 0.85em; text-align: left; max-width: 400px; line-height: 1.5; }
    .hangman-result { text-align: center; color: #1c2130; }
    .hangman-result h3 { font-size: 1.4em; margin-bottom: 6px; }
    .hangman-result-img { width: 140px; height: 140px; object-fit: cover; border-radius: 16px; margin: 10px auto; display: block; box-shadow: 0 6px 20px rgba(0,0,0,0.35); }
    @media (max-width: 640px) {
        .hangman-layout { flex-direction: column; align-items: center; }
        .hangman-alphabet { width: 100%; max-width: 280px; }
    }

    /* Memory Match game */
    @keyframes memCardIn { from { opacity: 0; transform: scale(0.6) translateY(14px); } to { opacity: 1; transform: scale(1) translateY(0); } }
    @keyframes memMatchPulse { 0% { transform: rotateY(180deg) scale(1); } 40% { transform: rotateY(180deg) scale(1.08); } 100% { transform: rotateY(180deg) scale(1); } }
    @keyframes memWrongShake { 0%, 100% { transform: rotateY(180deg) translateX(0) rotate(0); } 25% { transform: rotateY(180deg) translateX(-6px) rotate(-2deg); } 75% { transform: rotateY(180deg) translateX(6px) rotate(2deg); } }
    @keyframes memSparkle { 0% { opacity: 0; transform: scale(0.4) rotate(0deg); } 50% { opacity: 1; } 100% { opacity: 0; transform: scale(1.3) rotate(25deg); } }
    .memory-panel {
        background: linear-gradient(160deg, #eef1f8, #d7deeb); border-radius: 24px; padding: 22px 24px;
        color: #1c2130; max-width: 920px; width: 100%; margin: 0 auto; box-shadow: 0 24px 60px rgba(0,0,0,0.55);
    }
    .memory-stats { display: flex; justify-content: center; gap: 10px; margin-bottom: 16px; flex-wrap: wrap; }
    .memory-stat { background: #fff; border-radius: 999px; padding: 7px 16px; font-weight: 800; font-size: 0.85em; box-shadow: 0 3px 10px rgba(0,0,0,0.15); }
    .memory-peek-btn { border: none; cursor: pointer; font-family: inherit; background: #5b5fef; color: #fff; transition: background 0.15s; }
    .memory-peek-btn:hover:not(:disabled) { background: #4b4fdf; }
    .memory-peek-btn:disabled { opacity: 0.5; cursor: default; }
    /* Wide and short (8 columns x 2 rows for 16 cards) instead of tall and
       narrow, so the whole board fits on screen without scrolling. */
    .memory-grid { display: grid; grid-template-columns: repeat(8, 1fr); gap: 10px; perspective: 1000px; }
    .mem-card { position: relative; aspect-ratio: 1; border: none; background: none; padding: 0; cursor: pointer; font-family: inherit; animation: memCardIn 0.4s ease both; animation-delay: calc(var(--i, 0) * 0.04s); }
    .mem-card:disabled { cursor: default; }
    .mem-card-inner {
        position: relative; width: 100%; height: 100%; border-radius: 14px; transition: transform 0.5s cubic-bezier(.4,.2,.2,1);
        transform-style: preserve-3d; box-shadow: 0 4px 12px rgba(0,0,0,0.25);
    }
    .mem-card.is-flipped .mem-card-inner, .mem-card.is-matched .mem-card-inner { transform: rotateY(180deg); }
    .mem-card.is-wrong .mem-card-inner { animation: memWrongShake 0.4s ease; }
    .mem-card.is-matched .mem-card-inner { animation: memMatchPulse 0.4s ease; box-shadow: 0 0 0 3px #4ade80, 0 4px 16px rgba(74,222,128,0.5); }
    .mem-card-back, .mem-card-front {
        position: absolute; inset: 0; border-radius: 14px; backface-visibility: hidden;
        display: flex; align-items: center; justify-content: center; overflow: hidden;
    }
    /* Back color shows the card TYPE (picture / word / translation) before
       it's flipped, so players know what kind of card they're picking - but
       not its specific content, which is still the actual memory challenge. */
    .mem-card-back-word { background: linear-gradient(145deg, #5b5fef, #7c3aed); }
    .mem-card-back-img { background: linear-gradient(145deg, #f59e0b, #d97706); }
    .mem-card-back-tr { background: linear-gradient(145deg, #10b981, #059669); }
    .mem-card-num { font-size: 1.5em; font-weight: 900; color: #fff; text-shadow: 0 2px 6px rgba(0,0,0,0.35); }
    .mem-card-front { transform: rotateY(180deg); padding: 4px; background: #fff; }
    .mem-card-front img { width: 100%; height: 100%; object-fit: cover; border-radius: 10px; }
    .mem-word { font-weight: 800; font-size: 0.95em; text-align: center; color: #1c2130; padding: 4px; }
    .mem-tr { text-align: center; font-size: 0.85em; line-height: 1.35; color: #1c2130; padding: 4px; }
    .mem-tr div:first-child { font-weight: 700; margin-bottom: 3px; }
    .mem-sparkle { position: absolute; inset: -10px; pointer-events: none; display: flex; align-items: center; justify-content: center; font-size: 1.4em; animation: memSparkle 0.6s ease; }
    .memory-result { text-align: center; color: #1c2130; }
    .memory-result h3 { font-size: 1.4em; margin-bottom: 6px; }
    @media (max-width: 900px) {
        .memory-grid { grid-template-columns: repeat(4, 1fr); }
    }
    @media (max-width: 520px) {
        .memory-grid { grid-template-columns: repeat(3, 1fr); }
    }

    /* Who Am I? game */
    @keyframes whoamiBob { 0%, 100% { transform: translateY(0) rotate(-3deg); } 50% { transform: translateY(-7px) rotate(3deg); } }
    @keyframes whoamiHintIn { from { opacity: 0; transform: translateY(-8px); } to { opacity: 1; transform: translateY(0); } }
    .whoami-header { text-align: center; margin-bottom: 12px; }
    .whoami-question {
        font-size: 1.6em; font-weight: 900; letter-spacing: 0.02em; margin-bottom: 8px;
        background: linear-gradient(135deg, #7c3aed, #5b5fef); -webkit-background-clip: text; background-clip: text; color: transparent;
    }
    .whoami-avatar { font-size: 3.6em; text-align: center; margin-bottom: 4px; animation: whoamiBob 2.4s ease-in-out infinite; }
    .whoami-hints { display: flex; flex-direction: column; gap: 8px; margin-top: 14px; width: 100%; max-width: 420px; }
    .whoami-hint-btn {
        background: #5b5fef; color: #fff; border: none; padding: 9px 16px; border-radius: 999px; font-weight: 700;
        cursor: pointer; font-family: inherit; font-size: 0.85em; width: 100%; transition: background 0.15s, transform 0.15s;
    }
    .whoami-hint-btn:hover:not(:disabled) { background: #4b4fdf; transform: scale(1.02); }
    .whoami-hint-btn:disabled { opacity: 0.35; cursor: default; }
    .whoami-hint-card {
        background: rgba(91,95,239,0.12); border-radius: 12px; padding: 10px 14px; font-size: 0.9em;
        line-height: 1.4; text-align: left; animation: whoamiHintIn 0.35s ease both;
    }
    .whoami-hint-num { font-weight: 800; color: #5b5fef; margin-right: 4px; }
    .whoami-giveup-btn {
        margin-top: 14px; background: none; border: 1px solid rgba(28,33,48,0.3); color: #1c2130;
        padding: 6px 14px; border-radius: 999px; font-size: 0.75em; cursor: pointer; font-family: inherit; opacity: 0.7;
    }
    .whoami-giveup-btn:hover { opacity: 1; }
</style>
</head>
<body>
<div class="bg-stage bg-level-<?= htmlspecialchars($data['level'], ENT_QUOTES, 'UTF-8') ?>"></div>

<div class="topbar">
    <a class="back-link" href="present.php?id=<?= $data['id'] ?>">‹ Back to Lesson</a>
    <div class="title-block">
        <div class="t"><?= htmlspecialchars($typeLabel, ENT_QUOTES, 'UTF-8') ?></div>
        <div class="l"><?= htmlspecialchars($data['topic'], ENT_QUOTES, 'UTF-8') ?></div>
    </div>
</div>

<div class="tts-toggle" id="ttsToggle">
    <span>🔊 UK Voice</span>
    <label class="switch">
        <input type="checkbox" id="ttsCheckbox" checked>
        <span class="slider"></span>
    </label>
</div>

<div class="game-wrap" id="gameMount"></div>

<script>
const LESSON = <?= json_encode($data, JSON_UNESCAPED_UNICODE) ?>;

function esc(s) {
    const d = document.createElement('div');
    d.textContent = s || '';
    return d.innerHTML;
}

// Text-to-speech: server-generated British English audio, played through a
// real <audio> element so it's part of the page's audio output and gets
// captured by Google Meet / Zoom tab-audio sharing (unlike speechSynthesis,
// which Chrome renders straight to the OS output device and screen-share
// tools can't pick up).
let ttsEnabled = localStorage.getItem('scReadAloud') !== 'off';
document.body.classList.toggle('read-aloud-off', !ttsEnabled);

const ttsAudio = new Audio();

function speak(text) {
    if (!ttsEnabled || !text) return;
    ttsAudio.pause();
    ttsAudio.src = 'api/tts.php?text=' + encodeURIComponent(text);
    ttsAudio.play().catch(() => {});
}

const ttsCheckbox = document.getElementById('ttsCheckbox');
ttsCheckbox.checked = ttsEnabled;
ttsCheckbox.addEventListener('change', () => {
    ttsEnabled = ttsCheckbox.checked;
    document.body.classList.toggle('read-aloud-off', !ttsEnabled);
    localStorage.setItem('scReadAloud', ttsEnabled ? 'on' : 'off');
    if (!ttsEnabled) ttsAudio.pause();
});

const MATCH_COLORS = ['#dc2626', '#ea580c', '#2563eb', '#0891b2', '#16a34a', '#7c3aed', '#db2777', '#059669', '#ca8a04', '#4338ca'];

function shuffleArray(arr) {
    const a = arr.slice();
    for (let i = a.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [a[i], a[j]] = [a[j], a[i]];
    }
    return a;
}

function startMatchGame(container, vocabList) {
    let queue = shuffleArray(vocabList);
    let score = 0;
    const totalWords = vocabList.length;

    function renderRound() {
        if (!queue.length) { renderComplete(); return; }
        const target = queue[0];
        const pool = shuffleArray(vocabList.filter(w => w.en !== target.en)).slice(0, 5);
        const options = shuffleArray([target, ...pool]);
        container.innerHTML = `
            <div class="match-prompt">
                ${target.img ? `<img class="match-photo" src="${esc(target.img)}" alt="">` : ''}
                <div class="match-tr">${esc(target.ru)}</div>
                <div class="match-tr">${esc(target.kz)}</div>
            </div>
            <div class="match-feedback" id="matchFeedback"></div>
            <div class="match-grid">${options.map((o, i) => `<button type="button" class="match-opt" data-en="${esc(o.en)}" style="background:${MATCH_COLORS[i % MATCH_COLORS.length]}">${esc(o.en)}</button>`).join('')}</div>
            <div class="match-status">${score} correct so far</div>
        `;
        const feedback = container.querySelector('#matchFeedback');
        container.querySelectorAll('.match-opt').forEach(btn => {
            btn.addEventListener('click', () => {
                container.querySelectorAll('.match-opt').forEach(b => b.disabled = true);
                speak(target.en);
                if (btn.dataset.en === target.en) {
                    feedback.textContent = '✅ Correct!';
                    score++;
                    queue.shift();
                } else {
                    feedback.textContent = '❌ Wrong — we will show it again later.';
                    queue.push(queue.shift());
                }
                setTimeout(renderRound, 800);
            });
        });
    }

    function renderComplete() {
        container.innerHTML = `
            <div class="match-complete">
                <h3>🎉 All words matched!</h3>
                <p>${score} correct answers out of ${totalWords} words.</p>
                <button type="button" class="restart-btn" id="matchRestart">Play again</button>
            </div>
        `;
        container.querySelector('#matchRestart').addEventListener('click', () => startMatchGame(container, vocabList));
    }

    renderRound();
}

const HANGMAN_MAX_WRONG = 5;
const HANGMAN_ALPHABET = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('');

// Only the part that just got added plays the sketch-in animation - parts
// already on screen render as plain static markup instead of replaying
// their entrance every time a new wrong guess redraws the whole SVG.
function hangmanPart(inner, animate) {
    return animate ? `<g class="hg-part">${inner}</g>` : `<g>${inner}</g>`;
}

function hangmanSvg(wrong) {
    let svg = `<svg viewBox="0 0 240 260" width="170" height="184" style="display:block;margin:0 auto;">
        <g stroke="#2c3142" stroke-width="10" stroke-linecap="round" fill="none">
            <line x1="20" y1="240" x2="112" y2="240"/>
            <line x1="56" y1="240" x2="56" y2="18"/>
            <line x1="56" y1="18" x2="165" y2="18"/>
            <line x1="165" y1="18" x2="165" y2="48"/>
        </g>`;
    const s = 'stroke="#ff6b4a" stroke-width="9" stroke-linecap="round" fill="none" pathLength="1"';
    let figure = '';
    if (wrong >= 1) figure += hangmanPart(`<circle cx="165" cy="68" r="20" ${s}/>`, wrong === 1);
    if (wrong >= 2) figure += hangmanPart(`<line x1="165" y1="88" x2="165" y2="155" ${s}/>`, wrong === 2);
    if (wrong >= 3) figure += hangmanPart(`<line x1="165" y1="105" x2="132" y2="132" ${s}/>`, wrong === 3);
    if (wrong >= 4) figure += hangmanPart(`<line x1="165" y1="105" x2="198" y2="132" ${s}/>`, wrong === 4);
    if (wrong >= 5) figure += hangmanPart(`<line x1="165" y1="155" x2="136" y2="205" ${s}/><line x1="165" y1="155" x2="194" y2="205" ${s}/>`, wrong === 5);
    if (figure) {
        const swing = wrong >= HANGMAN_MAX_WRONG ? ' hg-swing' : '';
        svg += `<g class="${swing.trim()}" style="transform-origin:165px 48px;">${figure}</g>`;
    }
    svg += `</svg>`;
    return svg;
}

function hangmanConfetti() {
    const emojis = ['🎉', '✨', '⭐', '🎊', '💫'];
    let html = '';
    for (let i = 0; i < 10; i++) {
        const angle = (i / 10) * 360 + (Math.random() * 20 - 10);
        const dist = 60 + Math.random() * 50;
        const tx = Math.round(Math.cos(angle * Math.PI / 180) * dist);
        const ty = Math.round(Math.sin(angle * Math.PI / 180) * dist);
        const rot = Math.round(Math.random() * 360);
        const delay = (Math.random() * 0.15).toFixed(2);
        html += `<span class="hg-confetti" style="--tx:${tx}px;--ty:${ty}px;--r:${rot}deg;animation-delay:${delay}s">${emojis[i % emojis.length]}</span>`;
    }
    return html;
}

function startHangmanGame(container, words, topic) {
    if (!words || !words.length) {
        container.innerHTML = `<div class="hangman-panel"><p>No hangman words available for this lesson.</p></div>`;
        return;
    }
    let idx = 0;
    let solved = 0;

    function keyBtn(l) {
        return `<button type="button" class="letter-btn" data-l="${l}">${l}</button>`;
    }

    function heartsHtml() {
        let h = '';
        for (let i = 0; i < HANGMAN_MAX_WRONG; i++) h += `<span class="hg-heart" data-i="${i}">❤️</span>`;
        return h;
    }

    function renderWord() {
        if (idx >= words.length) { renderComplete(); return; }
        const { word, clue, img } = words[idx];
        const letters = word.toUpperCase().split('');
        const guessed = new Set();
        let wrong = 0;

        // Built once per word - each guess afterward only touches the one
        // tile/letter-button/heart/SVG that actually changed, instead of
        // rebuilding the whole panel (which used to flash on every click).
        const tiles = letters.map((l, i) => `<div class="hg-tile" data-i="${i}"></div>`).join('');
        container.innerHTML = `
            <div class="hangman-panel">
                <div class="hangman-topline">
                    <div class="hangman-pill">${esc(topic)}</div>
                    <div class="hangman-pill">Word ${idx + 1} of ${words.length}</div>
                </div>
                <div class="hangman-layout">
                    <div class="hangman-left">
                        <div id="hgSvgWrap">${hangmanSvg(0)}</div>
                        <div class="hangman-hearts" id="hgHearts">${heartsHtml()}</div>
                        <div class="hangman-word-tiles">${tiles}</div>
                        <div class="hangman-clue-box">${esc(clue.en)}</div>
                        <button type="button" class="hangman-hint-btn" id="hgHint">💡 Hint (RU / KZ)</button>
                        <div class="hangman-hint-box" id="hgHintBox" hidden>
                            <div><strong>RU:</strong> ${esc(clue.ru)}</div>
                            <div><strong>KZ:</strong> ${esc(clue.kz)}</div>
                        </div>
                    </div>
                    <div class="hangman-alphabet" id="hgAlpha">${HANGMAN_ALPHABET.map(keyBtn).join('')}</div>
                </div>
            </div>
        `;
        const svgWrap = container.querySelector('#hgSvgWrap');
        const alphaEl = container.querySelector('#hgAlpha');
        const hintBox = container.querySelector('#hgHintBox');
        container.querySelector('#hgHint').addEventListener('click', () => {
            hintBox.hidden = false;
        });
        alphaEl.addEventListener('click', e => {
            const btn = e.target.closest('.letter-btn');
            if (btn && !btn.disabled) onLetterClick(btn.dataset.l);
        });

        function onLetterClick(l) {
            guessed.add(l);
            const btn = alphaEl.querySelector(`.letter-btn[data-l="${l}"]`);
            const isCorrect = letters.includes(l);
            btn.disabled = true;
            btn.classList.add(isCorrect ? 'correct' : 'wrong');
            if (isCorrect) {
                letters.forEach((ltr, i) => {
                    if (ltr === l) {
                        const tile = container.querySelector(`.hg-tile[data-i="${i}"]`);
                        tile.textContent = l;
                        tile.classList.add('filled');
                    }
                });
            } else {
                wrong++;
                svgWrap.innerHTML = hangmanSvg(wrong);
                const heart = container.querySelector(`.hg-heart[data-i="${wrong - 1}"]`);
                if (heart) { heart.textContent = '💔'; heart.classList.add('broken'); }
            }
            if (wrong >= HANGMAN_MAX_WRONG) { finishWord(false, wrong); return; }
            if (letters.every(l2 => guessed.has(l2))) { finishWord(true, wrong); return; }
        }

        function finishWord(won, wrongCount) {
            solved += won ? 1 : 0;
            speak(word);
            container.innerHTML = `
                <div class="hangman-panel${won ? '' : ' hg-lose'}">
                    ${hangmanSvg(wrongCount)}
                    <div class="hangman-result hg-confetti-wrap">
                        <h3>${won ? '🎉 Correct!' : '💀 He got hanged!'}</h3>
                        ${won ? hangmanConfetti() : ''}
                        ${img ? `<img class="hangman-result-img" src="${esc(img)}" alt="">` : ''}
                        <p>The word was <strong>${esc(word.toUpperCase())}</strong></p>
                        <button type="button" class="restart-btn" id="hgNext">${idx + 1 < words.length ? 'Next word' : 'See results'}</button>
                    </div>
                </div>
            `;
            container.querySelector('#hgNext').addEventListener('click', () => { idx++; renderWord(); });
        }
    }

    function renderComplete() {
        container.innerHTML = `
            <div class="hangman-panel">
                <div class="hangman-result">
                    <h3>🏁 Finished!</h3>
                    <p>${solved} of ${words.length} words solved.</p>
                    <button type="button" class="restart-btn" id="hgRestart">Play again</button>
                </div>
            </div>
        `;
        container.querySelector('#hgRestart').addEventListener('click', () => { idx = 0; solved = 0; renderWord(); });
    }

    renderWord();
}

function formatTime(sec) {
    const m = Math.floor(sec / 60);
    const s = sec % 60;
    return `${m}:${s.toString().padStart(2, '0')}`;
}

function startMemoryGame(container, vocabList, useImages) {
    const PAIR_COUNT = Math.min(8, vocabList.length);
    let cards = [];
    let flipped = [];
    let lock = false;
    let moves = 0;
    let matched = 0;
    let startTime = 0;
    let timerHandle = null;
    let gridEl = null;

    function buildCards() {
        const words = shuffleArray(vocabList).slice(0, PAIR_COUNT);
        const list = [];
        words.forEach((w, i) => {
            list.push({ matchId: i, kind: 'word', en: w.en, text: w.en });
            if (useImages && w.img) {
                list.push({ matchId: i, kind: 'img', en: w.en, img: w.img });
            } else {
                list.push({ matchId: i, kind: 'tr', en: w.en, text: w.ru, text2: w.kz });
            }
        });
        return shuffleArray(list).map((c, i) => ({ ...c, pos: i, isFlipped: false, isMatched: false, isWrong: false }));
    }

    function cardFace(c) {
        if (c.kind === 'img') return `<img src="${esc(c.img)}" alt="">`;
        if (c.kind === 'tr') return `<div class="mem-tr"><div>${esc(c.text)}</div><div>${esc(c.text2)}</div></div>`;
        return `<div class="mem-word">${esc(c.text)}</div>`;
    }

    function cardHtml(c) {
        return `
            <button type="button" class="mem-card" data-pos="${c.pos}" style="--i:${c.pos}">
                <div class="mem-card-inner">
                    <div class="mem-card-back mem-card-back-${c.kind}"><span class="mem-card-num">${c.pos + 1}</span></div>
                    <div class="mem-card-front">${cardFace(c)}</div>
                </div>
            </button>
        `;
    }

    // Updates only the one card button that changed, instead of rebuilding
    // the whole 16-card grid on every click - a full innerHTML rebuild would
    // replay every card's entrance animation and cause a distracting
    // full-board flash on each guess.
    function updateCardEl(pos) {
        const card = cards[pos];
        const btn = gridEl.querySelector(`.mem-card[data-pos="${pos}"]`);
        if (!card || !btn) return;
        const cls = ['mem-card'];
        if (card.isFlipped || card.isMatched) cls.push('is-flipped');
        if (card.isMatched) cls.push('is-matched');
        if (card.isWrong) cls.push('is-wrong');
        btn.className = cls.join(' ');
        btn.disabled = card.isMatched;
        let sparkle = btn.querySelector('.mem-sparkle');
        if (card.isMatched && !sparkle) {
            sparkle = document.createElement('div');
            sparkle.className = 'mem-sparkle';
            sparkle.textContent = '✨';
            btn.appendChild(sparkle);
        } else if (!card.isMatched && sparkle) {
            sparkle.remove();
        }
    }

    function updateStats() {
        const m = container.querySelector('#memMoves');
        const k = container.querySelector('#memMatched');
        if (m) m.textContent = moves;
        if (k) k.textContent = matched;
    }

    function tick() {
        const el = container.querySelector('#memTimer');
        if (el) el.textContent = formatTime(Math.floor((Date.now() - startTime) / 1000));
    }

    function onCardClick(pos) {
        if (lock) return;
        const card = cards[pos];
        if (!card || card.isFlipped || card.isMatched) return;
        card.isFlipped = true;
        flipped.push(card);
        updateCardEl(pos);
        if (flipped.length === 2) {
            lock = true;
            moves++;
            updateStats();
            const [a, b] = flipped;
            if (a.matchId === b.matchId) {
                a.isMatched = true; b.isMatched = true;
                matched++;
                speak(a.en);
                updateCardEl(a.pos);
                updateCardEl(b.pos);
                updateStats();
                flipped = [];
                lock = false;
                if (matched === PAIR_COUNT) setTimeout(finish, 500);
            } else {
                a.isWrong = true; b.isWrong = true;
                updateCardEl(a.pos);
                updateCardEl(b.pos);
                setTimeout(() => {
                    a.isFlipped = false; b.isFlipped = false;
                    a.isWrong = false; b.isWrong = false;
                    flipped = [];
                    lock = false;
                    updateCardEl(a.pos);
                    updateCardEl(b.pos);
                }, 900);
            }
        }
    }

    function finish() {
        clearInterval(timerHandle);
        const elapsed = Math.floor((Date.now() - startTime) / 1000);
        const perfect = moves === PAIR_COUNT;
        container.innerHTML = `
            <div class="memory-panel">
                <div class="memory-result">
                    <h3>${perfect ? '🌟 Perfect memory!' : '🎉 Well done!'}</h3>
                    <p>${matched} pairs matched in ${moves} moves and ${formatTime(elapsed)}.</p>
                    <button type="button" class="restart-btn" id="memRestart">Play again</button>
                </div>
            </div>
        `;
        container.querySelector('#memRestart').addEventListener('click', start);
    }

    function start() {
        cards = buildCards();
        flipped = [];
        lock = false;
        moves = 0;
        matched = 0;
        startTime = Date.now();
        clearInterval(timerHandle);
        container.innerHTML = `
            <div class="memory-panel">
                <div class="memory-stats">
                    <button type="button" class="memory-stat memory-peek-btn" id="memPeek">👀 Peek</button>
                    <div class="memory-stat">⏱ <span id="memTimer">0:00</span></div>
                    <div class="memory-stat">🔄 <span id="memMoves">0</span> moves</div>
                    <div class="memory-stat">✅ <span id="memMatched">0</span>/${PAIR_COUNT}</div>
                </div>
                <div class="memory-grid" id="memGrid">${cards.map(cardHtml).join('')}</div>
            </div>
        `;
        gridEl = container.querySelector('#memGrid');
        gridEl.addEventListener('click', e => {
            const btn = e.target.closest('.mem-card');
            if (btn) onCardClick(parseInt(btn.dataset.pos, 10));
        });
        container.querySelector('#memPeek').addEventListener('click', peek);
        timerHandle = setInterval(tick, 1000);
    }

    // Flips every unmatched card face-up for a couple of seconds so students
    // can study the board before playing, then flips them back down.
    function peek() {
        if (lock) return;
        lock = true;
        const peekBtn = container.querySelector('#memPeek');
        if (peekBtn) peekBtn.disabled = true;
        const toReveal = cards.filter(c => !c.isMatched);
        toReveal.forEach(c => { c.isFlipped = true; updateCardEl(c.pos); });
        setTimeout(() => {
            toReveal.forEach(c => { c.isFlipped = false; updateCardEl(c.pos); });
            lock = false;
            if (peekBtn) peekBtn.disabled = false;
        }, 2000);
    }

    start();
}

function startWhoAmIGame(container, words, topic) {
    if (!words || !words.length) {
        container.innerHTML = `<div class="hangman-panel"><p>No riddles available for this lesson.</p></div>`;
        return;
    }
    let idx = 0;
    let solved = 0;

    function keyBtn(l) {
        return `<button type="button" class="letter-btn" data-l="${l}">${l}</button>`;
    }

    function renderWord() {
        if (idx >= words.length) { renderComplete(); return; }
        const { word, hints, img } = words[idx];
        const letters = word.toUpperCase().split('');
        const guessed = new Set();
        let wrong = 0;
        let revealedHints = 0;

        const tiles = letters.map((l, i) => `<div class="hg-tile" data-i="${i}"></div>`).join('');
        const hintBtns = hints.map((h, i) => `
            <div class="whoami-hint" data-i="${i}">
                <button type="button" class="whoami-hint-btn" data-i="${i}" ${i === 0 ? '' : 'disabled'}>🔍 Reveal Hint ${i + 1}</button>
            </div>
        `).join('');
        container.innerHTML = `
            <div class="hangman-panel">
                <div class="whoami-header">
                    <div class="whoami-question">❓ WHO AM I? ❓</div>
                    <div class="hangman-pill">${esc(topic)}</div>
                    <div class="hangman-pill">Riddle ${idx + 1} of ${words.length}</div>
                </div>
                <div class="hangman-layout">
                    <div class="hangman-left">
                        <div class="whoami-avatar">🕵️</div>
                        <div class="hangman-word-tiles">${tiles}</div>
                        <div class="whoami-hints" id="whHints">${hintBtns}</div>
                        <button type="button" class="whoami-giveup-btn" id="whGiveup">🏳️ Reveal the answer</button>
                    </div>
                    <div class="hangman-alphabet" id="whAlpha">${HANGMAN_ALPHABET.map(keyBtn).join('')}</div>
                </div>
            </div>
        `;
        const alphaEl = container.querySelector('#whAlpha');
        const hintsEl = container.querySelector('#whHints');

        hintsEl.addEventListener('click', e => {
            const btn = e.target.closest('.whoami-hint-btn');
            if (!btn || btn.disabled) return;
            const i = parseInt(btn.dataset.i, 10);
            const wrap = hintsEl.querySelector(`.whoami-hint[data-i="${i}"]`);
            wrap.innerHTML = `<div class="whoami-hint-card"><span class="whoami-hint-num">Hint ${i + 1}</span>${esc(hints[i].en)}</div>`;
            revealedHints = i + 1;
            const next = hintsEl.querySelector(`.whoami-hint-btn[data-i="${i + 1}"]`);
            if (next) next.disabled = false;
        });

        container.querySelector('#whGiveup').addEventListener('click', () => finishWord(false, wrong));

        alphaEl.addEventListener('click', e => {
            const btn = e.target.closest('.letter-btn');
            if (btn && !btn.disabled) onLetterClick(btn.dataset.l);
        });

        function onLetterClick(l) {
            guessed.add(l);
            const btn = alphaEl.querySelector(`.letter-btn[data-l="${l}"]`);
            const isCorrect = letters.includes(l);
            btn.disabled = true;
            btn.classList.add(isCorrect ? 'correct' : 'wrong');
            if (isCorrect) {
                letters.forEach((ltr, i) => {
                    if (ltr === l) {
                        const tile = container.querySelector(`.hg-tile[data-i="${i}"]`);
                        tile.textContent = l;
                        tile.classList.add('filled');
                    }
                });
            } else {
                wrong++;
            }
            if (letters.every(l2 => guessed.has(l2))) finishWord(true, wrong);
        }

        function finishWord(won, wrongCount) {
            solved += won ? 1 : 0;
            speak(word);
            container.innerHTML = `
                <div class="hangman-panel">
                    <div class="hangman-result hg-confetti-wrap">
                        <h3>${won ? '🎉 You found them!' : '🔍 Here’s who it was'}</h3>
                        ${won ? hangmanConfetti() : ''}
                        ${img ? `<img class="hangman-result-img" src="${esc(img)}" alt="">` : ''}
                        <p>I am <strong>${esc(word.toUpperCase())}</strong></p>
                        <button type="button" class="restart-btn" id="whNext">${idx + 1 < words.length ? 'Next riddle' : 'See results'}</button>
                    </div>
                </div>
            `;
            container.querySelector('#whNext').addEventListener('click', () => { idx++; renderWord(); });
        }
    }

    function renderComplete() {
        container.innerHTML = `
            <div class="hangman-panel">
                <div class="hangman-result">
                    <h3>🏁 Finished!</h3>
                    <p>${solved} of ${words.length} riddles solved.</p>
                    <button type="button" class="restart-btn" id="whRestart">Play again</button>
                </div>
            </div>
        `;
        container.querySelector('#whRestart').addEventListener('click', () => { idx = 0; solved = 0; renderWord(); });
    }

    renderWord();
}

document.addEventListener('click', e => {
    const speakOne = e.target.closest('.speak-btn');
    if (speakOne) {
        e.stopPropagation();
        speak(speakOne.dataset.speak);
    }
});

const mount = document.getElementById('gameMount');
if (LESSON.type === 'hangman') {
    startHangmanGame(mount, LESSON.hangman, LESSON.topic);
} else if (LESSON.type === 'memory') {
    startMemoryGame(mount, LESSON.vocab, LESSON.memoryUseImages);
} else if (LESSON.type === 'whoami') {
    startWhoAmIGame(mount, LESSON.whoami, LESSON.topic);
} else {
    startMatchGame(mount, LESSON.vocab);
}
</script>
</body>
</html>
