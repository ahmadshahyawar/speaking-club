<?php
declare(strict_types=1);
// Intentionally not login-gated: opened from present.php on a classroom
// projector, same trust model as present.php itself.
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/backgrounds.php';
require_once __DIR__ . '/includes/hangman.php';

$id = (int)($_GET['id'] ?? 0);
$type = ($_GET['type'] ?? '') === 'hangman' ? 'hangman' : 'match';

$stmt = db()->prepare('SELECT * FROM lessons WHERE id = ?');
$stmt->execute([$id]);
$lesson = $stmt->fetch();

if (!$lesson) {
    http_response_code(404);
    die('Lesson not found.');
}

$vocab = json_decode($lesson['vocab'], true) ?: [];

if (in_array($lesson['level'], ['beginner', 'elementary'], true) && $vocab) {
    $words = array_map(static fn($w) => mb_strtolower(trim($w['en'])), $vocab);
    $placeholders = implode(',', array_fill(0, count($words), '?'));
    $imgStmt = db()->prepare("SELECT word, image_path FROM vocab_images WHERE word IN ($placeholders)");
    $imgStmt->execute($words);
    $imageMap = [];
    foreach ($imgStmt->fetchAll() as $row) {
        $imageMap[$row['word']] = $row['image_path'];
    }
    foreach ($vocab as &$w) {
        $key = mb_strtolower(trim($w['en']));
        if (isset($imageMap[$key])) {
            $w['img'] = $imageMap[$key];
        }
    }
    unset($w);
}

$hangman = extract_hangman_words(
    (int)$lesson['id'],
    (string)$lesson['level'],
    array_column($vocab, 'en')
);

$data = [
    'id' => (int)$lesson['id'],
    'topic' => $lesson['topic'],
    'level' => $lesson['level'],
    'vocab' => $vocab,
    'hangman' => $hangman,
    'type' => $type,
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars(($type === 'hangman' ? 'Hangman' : 'Match'), ENT_QUOTES, 'UTF-8') ?> — <?= htmlspecialchars($data['topic'], ENT_QUOTES, 'UTF-8') ?></title>
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

    .game-wrap { position: relative; z-index: 2; max-width: 780px; width: 100%; }
    .restart-btn {
        display: block; margin: 20px auto 0; background: #5b5fef; font-family: inherit;
        color: #fff; border: none; padding: 11px 26px; border-radius: 999px; cursor: pointer; font-weight: 700;
    }

    /* Match game */
    .match-prompt { margin-bottom: 18px; text-align: center; }
    .match-photo { width: 150px; height: 150px; object-fit: cover; border-radius: 16px; margin: 0 auto 14px; display: block; box-shadow: 0 6px 20px rgba(0,0,0,0.5); }
    .match-tr { font-size: 1.3em; font-weight: 700; line-height: 1.5; }
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
    /* Each new body part sketches itself in (stroke draws on), then lands with a
       springy little bounce - much more alive than a flat fade/scale-in. */
    @keyframes hgLine { to { stroke-dashoffset: 0; } }
    @keyframes hgSettle { from { transform: scale(1.3); } to { transform: scale(1); } }
    @keyframes hgSwing { 0%, 100% { transform: rotate(-2.5deg); } 50% { transform: rotate(2.5deg); } }
    .hg-part { transform-box: fill-box; transform-origin: center; animation: hgSettle .35s cubic-bezier(.34,1.56,.64,1) both; animation-delay: calc(var(--d, 0s) + .4s); }
    .hg-part path, .hg-part circle, .hg-part line { stroke-dasharray: 1; stroke-dashoffset: 1; animation: hgLine .4s ease-out both; animation-delay: var(--d, 0s); }
    .hg-swing { animation: hgSwing 2.4s ease-in-out infinite; transform-origin: 165px 48px; }
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
    .letter-btn.correct { background: #4ade80; color: #fff; }
    .letter-btn.wrong { background: #f87171; color: #fff; animation: keyShake 0.4s; }
    .hangman-word-tiles { display: flex; gap: 6px; flex-wrap: wrap; justify-content: center; margin-top: 10px; }
    .hg-tile {
        width: 34px; height: 42px; border-radius: 8px; background: #fbbf24; display: flex; align-items: center;
        justify-content: center; font-weight: 800; font-size: 1.15em; color: #1c2130; box-shadow: 0 3px 8px rgba(0,0,0,0.22);
    }
    .hangman-status { opacity: 0.65; margin-top: 10px; font-size: 0.82em; }
    .hangman-clue-box { margin-top: 12px; font-size: 0.95em; text-align: center; max-width: 400px; line-height: 1.45; }
    .hangman-hint-btn {
        margin-top: 10px; background: #5b5fef; color: #fff; border: none; padding: 7px 18px; border-radius: 999px;
        font-weight: 700; cursor: pointer; font-family: inherit; font-size: 0.85em;
    }
    .hangman-hint-box { margin-top: 10px; background: rgba(91,95,239,0.1); border-radius: 12px; padding: 10px 14px; font-size: 0.85em; text-align: left; max-width: 400px; line-height: 1.5; }
    .hangman-result { text-align: center; color: #1c2130; }
    .hangman-result h3 { font-size: 1.4em; margin-bottom: 6px; }
    @media (max-width: 640px) {
        .hangman-layout { flex-direction: column; align-items: center; }
        .hangman-alphabet { width: 100%; max-width: 280px; }
    }
</style>
</head>
<body>
<div class="bg-stage bg-level-<?= htmlspecialchars($data['level'], ENT_QUOTES, 'UTF-8') ?>"></div>

<div class="topbar">
    <a class="back-link" href="present.php?id=<?= $data['id'] ?>">‹ Back to Lesson</a>
    <div class="title-block">
        <div class="t"><?= htmlspecialchars(($type === 'hangman' ? '🔠 Hangman' : '🎯 Match'), ENT_QUOTES, 'UTF-8') ?></div>
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

function hangmanPart(inner, order) {
    return `<g class="hg-part" style="--d:${(order * 0.18).toFixed(2)}s">${inner}</g>`;
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
    if (wrong >= 1) figure += hangmanPart(`<circle cx="165" cy="68" r="20" ${s}/>`, 0);
    if (wrong >= 2) figure += hangmanPart(`<line x1="165" y1="88" x2="165" y2="155" ${s}/>`, 1);
    if (wrong >= 3) figure += hangmanPart(`<line x1="165" y1="105" x2="132" y2="132" ${s}/>`, 2);
    if (wrong >= 4) figure += hangmanPart(`<line x1="165" y1="105" x2="198" y2="132" ${s}/>`, 3);
    if (wrong >= 5) figure += hangmanPart(`<line x1="165" y1="155" x2="136" y2="205" ${s}/><line x1="165" y1="155" x2="194" y2="205" ${s}/>`, 4);
    if (figure) {
        const swing = wrong >= HANGMAN_MAX_WRONG ? ' hg-swing' : '';
        svg += `<g class="${swing.trim()}" style="transform-origin:165px 48px;">${figure}</g>`;
    }
    svg += `</svg>`;
    return svg;
}

function startHangmanGame(container, words, topic) {
    if (!words || !words.length) {
        container.innerHTML = `<div class="hangman-panel"><p>No hangman words available for this lesson.</p></div>`;
        return;
    }
    let idx = 0;
    let solved = 0;

    function keyBtn(l, guessed, letters) {
        let cls = 'letter-btn';
        if (guessed.has(l)) cls += letters.includes(l) ? ' correct' : ' wrong';
        return `<button type="button" class="${cls}" data-l="${l}" ${guessed.has(l) ? 'disabled' : ''}>${l}</button>`;
    }

    function renderWord() {
        if (idx >= words.length) { renderComplete(); return; }
        const { word, clue } = words[idx];
        const letters = word.toUpperCase().split('');
        const guessed = new Set();
        let wrong = 0;
        let hintShown = false;

        function draw() {
            const tiles = letters.map(l => `<div class="hg-tile ${guessed.has(l) ? 'filled' : ''}">${guessed.has(l) ? l : ''}</div>`).join('');
            container.innerHTML = `
                <div class="hangman-panel">
                    <div class="hangman-topline">
                        <div class="hangman-pill">${esc(topic)}</div>
                        <div class="hangman-pill">Word ${idx + 1} of ${words.length}</div>
                    </div>
                    <div class="hangman-layout">
                        <div class="hangman-left">
                            ${hangmanSvg(wrong)}
                            <div class="hangman-word-tiles">${tiles}</div>
                            <div class="hangman-status">Wrong guesses: ${wrong} / ${HANGMAN_MAX_WRONG}</div>
                            <div class="hangman-clue-box">${esc(clue.en)}</div>
                            <button type="button" class="hangman-hint-btn" id="hgHint">💡 Hint (RU / KZ)</button>
                            <div class="hangman-hint-box" id="hgHintBox" hidden>
                                <div><strong>RU:</strong> ${esc(clue.ru)}</div>
                                <div><strong>KZ:</strong> ${esc(clue.kz)}</div>
                            </div>
                        </div>
                        <div class="hangman-alphabet">${HANGMAN_ALPHABET.map(l => keyBtn(l, guessed, letters)).join('')}</div>
                    </div>
                </div>
            `;
            const hintBox = container.querySelector('#hgHintBox');
            if (hintShown) hintBox.hidden = false;
            container.querySelector('#hgHint').addEventListener('click', () => {
                hintShown = true;
                hintBox.hidden = false;
            });
            container.querySelectorAll('.letter-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    const l = btn.dataset.l;
                    guessed.add(l);
                    if (!letters.includes(l)) wrong++;
                    if (wrong >= HANGMAN_MAX_WRONG) { finishWord(false, wrong); return; }
                    if (letters.every(l2 => guessed.has(l2))) { finishWord(true, wrong); return; }
                    draw();
                });
            });
        }

        function finishWord(won, wrongCount) {
            solved += won ? 1 : 0;
            speak(word);
            container.innerHTML = `
                <div class="hangman-panel">
                    ${hangmanSvg(wrongCount)}
                    <div class="hangman-result">
                        <h3>${won ? '🎉 Correct!' : '💀 He got hanged!'}</h3>
                        <p>The word was <strong>${esc(word.toUpperCase())}</strong></p>
                        <button type="button" class="restart-btn" id="hgNext">${idx + 1 < words.length ? 'Next word' : 'See results'}</button>
                    </div>
                </div>
            `;
            container.querySelector('#hgNext').addEventListener('click', () => { idx++; renderWord(); });
        }

        draw();
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
} else {
    startMatchGame(mount, LESSON.vocab);
}
</script>
</body>
</html>
