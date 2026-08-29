<?php
declare(strict_types=1);
// Intentionally not login-gated: teachers open this on a classroom
// projector/TV that may not be signed in. The lesson id acts as an
// unlisted link, same trust model as the original static display page.
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/backgrounds.php';

$id = (int)($_GET['id'] ?? 0);
$stmt = db()->prepare('SELECT * FROM lessons WHERE id = ?');
$stmt->execute([$id]);
$lesson = $stmt->fetch();

if (!$lesson) {
    http_response_code(404);
    die('Lesson not found.');
}

$isPictureLevel = in_array($lesson['level'], ['beginner', 'elementary'], true);
$vocab = json_decode($lesson['vocab'], true);
$warmup = json_decode($lesson['warmup'], true);
$questions = json_decode($lesson['questions'], true);

if ($isPictureLevel && $vocab) {
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

$data = [
    'id' => (int)$lesson['id'],
    'topic' => $lesson['topic'],
    'level' => $lesson['level'],
    'vocab' => $vocab,
    'warmup' => $warmup,
    'questions' => $questions,
    'background_key' => $lesson['background_key'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($data['topic'], ENT_QUOTES, 'UTF-8') ?> - Speaking Club</title>
<link rel="stylesheet" href="<?= av('assets/css/backgrounds.css') ?>">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap');
    * { margin: 0; padding: 0; box-sizing: border-box; }
    html, body { height: 100%; overflow: hidden; font-family: 'Inter', 'Segoe UI', Arial, sans-serif; color: #fff; }

    .topbar {
        position: fixed; top: 0; left: 0; right: 0; z-index: 5;
        display: flex; justify-content: space-between; align-items: center;
        padding: 18px 26px; pointer-events: none;
    }
    .topbar .title-block { background: rgba(0,0,0,0.35); backdrop-filter: blur(10px); padding: 8px 16px; border-radius: 999px; }
    .topbar .title-block .t { font-weight: 700; }
    .topbar .title-block .l { font-size: 0.75em; opacity: 0.7; text-transform: uppercase; letter-spacing: 0.06em; }

    .slider-viewport { position: relative; z-index: 2; width: 100%; height: 100vh; overflow: hidden; }
    .slider-track { display: flex; height: 100%; transition: transform 0.5s cubic-bezier(0.65, 0, 0.35, 1); }
    .slide { min-width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; padding: 100px 30px 90px; overflow-y: auto; }

    .content-box {
        background: rgba(0,0,0,0.4); backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px);
        padding: 24px; border-radius: 20px; box-shadow: 0 8px 40px rgba(0,0,0,0.5);
        border: 1px solid rgba(255,255,255,0.18); max-width: 820px; width: 100%;
    }
    table { width: 100%; border-collapse: collapse; background: rgba(255,255,255,0.08); border-radius: 12px; overflow: hidden; }
    th { background: rgba(91,95,239,0.75); padding: 13px; text-align: left; font-weight: 700; }
    td { padding: 12px 13px; border-bottom: 1px solid rgba(255,255,255,0.14); }
    tr:nth-child(even) td { background: rgba(255,255,255,0.04); }
    .content-box.wide { max-width: 1100px; }
    /* Flexbox (not grid) so a short last row grows to fill the width instead
       of leaving empty cells - grid keeps the same column tracks on every
       row even when a later row has fewer items than the row above it. */
    .vocab-grid { display: flex; flex-wrap: wrap; gap: 12px; }
    .vocab-card {
        background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.16); border-radius: 14px;
        padding: 9px; text-align: center; flex: 1 1 130px; max-width: 200px;
    }
    .vocab-photo {
        width: 100%; aspect-ratio: 1; object-fit: cover; border-radius: 10px;
        margin-bottom: 6px; box-shadow: 0 6px 18px rgba(0,0,0,0.45); display: block;
    }
    .vocab-photo-empty { background: rgba(255,255,255,0.08); }
    .vocab-en { font-weight: 700; font-size: 1.08em; margin-bottom: 4px; }
    .vocab-tr { font-size: 1em; opacity: 0.92; line-height: 1.4; }

    .slide-title { text-align: center; font-size: 1.7em; font-weight: 800; margin-bottom: 8px; }
    .slide-title-row { display: flex; align-items: center; justify-content: center; gap: 14px; margin-bottom: 8px; flex-wrap: wrap; }
    .slide-title-row .slide-title { margin-bottom: 0; }
    .tts-controls { display: flex; gap: 8px; flex-wrap: wrap; }
    .tts-controls button {
        border: none; padding: 8px 16px; border-radius: 999px; font-weight: 700; cursor: pointer;
        font-family: inherit; font-size: 0.75em; white-space: nowrap; color: #fff;
    }
    .tts-controls .btn-play { background: #5b5fef; }
    .tts-controls .btn-play:hover { background: #4b4fdf; }
    .tts-controls .btn-stop { background: #ef4444; }
    .tts-controls .btn-stop:hover { background: #dc2626; }
    .tts-controls .btn-restart { background: rgba(255,255,255,0.18); }
    .tts-controls .btn-restart:hover { background: rgba(255,255,255,0.3); }
    body.read-aloud-off .tts-controls { display: none; }
    .vocab-card.tts-active { outline: 3px solid #fbbf24; outline-offset: 2px; transform: scale(1.04); transition: transform 0.2s, outline-color 0.2s; }
    tr.tts-active td { background: rgba(251,191,36,0.25) !important; }
    .level-tag { text-align: center; opacity: 0.7; margin-bottom: 20px; font-size: 0.85em; text-transform: uppercase; letter-spacing: 0.1em; }
    .lang-block { margin-bottom: 12px; }
    .lang-block .en { font-size: 1.15em; font-weight: 700; margin-bottom: 8px; }
    .lang-block .tr { font-size: 1.05em; opacity: 0.95; line-height: 1.6; }
    .question-num { opacity: 0.6; font-size: 0.85em; margin-bottom: 10px; text-align: center; }

    .nav-arrow {
        position: fixed; top: 50%; transform: translateY(-50%); z-index: 5;
        width: 52px; height: 52px; border-radius: 50%; border: 1px solid rgba(255,255,255,0.25);
        background: rgba(0,0,0,0.35); backdrop-filter: blur(10px); color: #fff; font-size: 1.3em;
        cursor: pointer; display: flex; align-items: center; justify-content: center;
    }
    .nav-arrow:hover { background: rgba(0,0,0,0.55); }
    .nav-arrow:disabled { opacity: 0.25; cursor: not-allowed; }
    .nav-arrow.prev { left: 20px; }
    .nav-arrow.next { right: 20px; }

    .dots { position: fixed; bottom: 26px; left: 0; right: 0; z-index: 5; display: flex; justify-content: center; gap: 8px; }
    .dot-btn { width: 9px; height: 9px; border-radius: 50%; background: rgba(255,255,255,0.35); border: none; cursor: pointer; padding: 0; transition: background 0.2s, transform 0.2s; }
    .dot-btn.active { background: #fff; transform: scale(1.3); }

    /* Text-to-speech toggle — always top-right, on every level. */
    .tts-toggle {
        position: fixed; top: 18px; right: 26px; z-index: 23; display: flex; align-items: center; gap: 8px;
        background: rgba(0,0,0,0.35); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);
        color: #fff; padding: 7px 14px 7px 12px; border-radius: 999px; font-size: 0.85em; font-weight: 700;
    }
    .tts-toggle .switch { position: relative; width: 36px; height: 20px; flex: 0 0 auto; }
    .tts-toggle .switch input { opacity: 0; width: 0; height: 0; }
    .tts-toggle .slider {
        position: absolute; inset: 0; background: rgba(255,255,255,0.3); border-radius: 999px; cursor: pointer; transition: background 0.2s;
    }
    .tts-toggle .slider::before {
        content: ''; position: absolute; width: 16px; height: 16px; left: 2px; top: 2px; background: #fff;
        border-radius: 50%; transition: transform 0.2s;
    }
    .tts-toggle input:checked + .slider { background: #5b5fef; }
    .tts-toggle input:checked + .slider::before { transform: translateX(16px); }

    .speak-btn {
        border: none; background: rgba(255,255,255,0.18); color: #fff; width: 26px; height: 26px; border-radius: 50%;
        cursor: pointer; font-size: 0.8em; display: inline-flex; align-items: center; justify-content: center;
        margin-left: 6px; vertical-align: middle; flex: 0 0 auto; font-family: inherit;
    }
    .speak-btn:hover { background: rgba(255,255,255,0.32); }
    body.read-aloud-off .speak-btn { display: none; }

    /* Top-right Games toggle - click to reveal the game list, click again
       (or anywhere outside) to hide it. */
    .game-menu { position: fixed; top: 64px; right: 26px; z-index: 22; }
    .game-menu-toggle {
        background: rgba(0,0,0,0.35); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);
        color: #fff; padding: 10px 18px; border-radius: 999px; cursor: pointer; font-weight: 700; font-size: 0.9em;
        font-family: inherit; transition: background 0.2s;
    }
    .game-menu-toggle:hover, .game-menu-toggle.open { background: rgba(0,0,0,0.55); }
    .game-menu-list {
        position: absolute; top: calc(100% + 8px); right: 0; display: flex; flex-direction: column; gap: 8px;
        opacity: 0; transform: translateY(-8px) scale(0.95); pointer-events: none; transition: opacity 0.2s ease, transform 0.2s ease;
    }
    .game-menu-list.open { opacity: 1; transform: translateY(0) scale(1); pointer-events: auto; }
    .game-menu-list a {
        background: rgba(0,0,0,0.55); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);
        color: #fff; padding: 9px 18px; border-radius: 999px; cursor: pointer; font-weight: 700; font-size: 0.85em;
        font-family: inherit; text-decoration: none; text-align: center; white-space: nowrap;
    }
    .game-menu-list a:hover { background: rgba(0,0,0,0.8); }

    /* Paired questions */
    .q-pair { display: flex; flex-direction: column; gap: 20px; }
    .q-block { text-align: left; }
    .q-index {
        display: inline-flex; align-items: center; justify-content: center; background: rgba(91,95,239,0.6);
        border-radius: 999px; width: 26px; height: 26px; font-weight: 700; font-size: 0.85em; margin-bottom: 8px;
    }
    .q-divider { height: 1px; background: rgba(255,255,255,0.15); }
</style>
</head>
<body>
<div class="bg-stage bg-level-<?= htmlspecialchars($data['level'], ENT_QUOTES, 'UTF-8') ?>"></div>

<div class="topbar">
    <div class="title-block">
        <div class="t"><?= htmlspecialchars($data['topic'], ENT_QUOTES, 'UTF-8') ?></div>
        <div class="l"><?= htmlspecialchars($data['level'], ENT_QUOTES, 'UTF-8') ?></div>
    </div>
</div>

<div class="tts-toggle" id="ttsToggle">
    <span>🔊 UK Voice</span>
    <label class="switch">
        <input type="checkbox" id="ttsCheckbox" checked>
        <span class="slider"></span>
    </label>
</div>

<div class="game-menu" id="gameMenu">
    <button type="button" class="game-menu-toggle" id="gameMenuToggle">🎮 Games</button>
    <div class="game-menu-list" id="gameMenuList">
        <a href="game.php?id=<?= $data['id'] ?>&type=match">🎯 Match</a>
        <a href="game.php?id=<?= $data['id'] ?>&type=memory">🧠 Memory</a>
        <a href="game.php?id=<?= $data['id'] ?>&type=hangman">🔠 Hangman</a>
    </div>
</div>

<div class="slider-viewport">
    <div class="slider-track" id="sliderTrack"></div>
</div>

<button class="nav-arrow prev" id="prevBtn">‹</button>
<button class="nav-arrow next" id="nextBtn">›</button>
<div class="dots" id="dots"></div>

<script>
const LESSON = <?= json_encode($data, JSON_UNESCAPED_UNICODE) ?>;

function esc(s) {
    const d = document.createElement('div');
    d.textContent = s || '';
    return d.innerHTML;
}

function buildSlide(innerHtml, extraClass) {
    const slide = document.createElement('div');
    slide.className = 'slide';
    const box = document.createElement('div');
    box.className = 'content-box' + (extraClass ? ' ' + extraClass : '');
    box.innerHTML = innerHtml;
    slide.appendChild(box);
    return slide;
}

// Text-to-speech: server-generated British English audio, played through a
// real <audio> element so it's part of the page's audio output and gets
// captured by Google Meet / Zoom tab-audio sharing (unlike speechSynthesis,
// which Chrome renders straight to the OS output device and screen-share
// tools can't pick up).
let ttsEnabled = localStorage.getItem('scReadAloud') !== 'off';
document.body.classList.toggle('read-aloud-off', !ttsEnabled);

const ttsAudio = new Audio();

function ttsUrl(text) {
    return 'api/tts.php?text=' + encodeURIComponent(text);
}

function speak(text) {
    if (!ttsEnabled || !text) return;
    stopSequence();
    clearVocabHighlight();
    ttsAudio.onended = null;
    ttsAudio.pause();
    ttsAudio.src = ttsUrl(text);
    ttsAudio.play().catch(() => {});
}

// Plays a list of words one by one, with a 2-second pause after each finishes.
// onStart(index) fires right before word `index` is spoken; onDone() fires when the
// sequence finishes or is stopped early.
let sequenceStopRequested = false;
let sequenceTimer = null;

function speakSequence(texts, onStart, onDone) {
    if (!ttsEnabled) return;
    stopSequence();
    sequenceStopRequested = false;
    const queue = texts.filter(Boolean);
    let i = 0;
    function next() {
        if (sequenceStopRequested || i >= queue.length) {
            if (onDone) onDone();
            return;
        }
        if (onStart) onStart(i);
        ttsAudio.src = ttsUrl(queue[i]);
        ttsAudio.onended = () => {
            i++;
            if (sequenceStopRequested) { if (onDone) onDone(); return; }
            sequenceTimer = setTimeout(next, 2000);
        };
        ttsAudio.play().catch(() => {
            i++;
            if (!sequenceStopRequested) sequenceTimer = setTimeout(next, 200);
        });
    }
    next();
}

function stopSequence() {
    sequenceStopRequested = true;
    if (sequenceTimer) { clearTimeout(sequenceTimer); sequenceTimer = null; }
    ttsAudio.onended = null;
    ttsAudio.pause();
}

function speakBtn(text) {
    return `<button type="button" class="speak-btn" data-speak="${esc(text)}" title="Listen">🔊</button>`;
}

function clearVocabHighlight() {
    document.querySelectorAll('.tts-active').forEach(el => el.classList.remove('tts-active'));
}

function playVocabSequence() {
    clearVocabHighlight();
    const cards = document.querySelectorAll('.vocab-card, .content-box table tbody tr');
    speakSequence(
        LESSON.vocab.map(w => w.en),
        i => {
            clearVocabHighlight();
            if (cards[i]) cards[i].classList.add('tts-active');
        },
        () => clearVocabHighlight()
    );
}

document.addEventListener('click', e => {
    const speakOne = e.target.closest('.speak-btn');
    if (speakOne) {
        e.stopPropagation();
        speak(speakOne.dataset.speak);
        return;
    }
    if (e.target.closest('#playAllVocab')) {
        e.stopPropagation();
        playVocabSequence();
        return;
    }
    if (e.target.closest('#stopAllVocab')) {
        e.stopPropagation();
        stopSequence();
        clearVocabHighlight();
        return;
    }
    if (e.target.closest('#restartAllVocab')) {
        e.stopPropagation();
        playVocabSequence();
    }
});

const ttsCheckbox = document.getElementById('ttsCheckbox');
ttsCheckbox.checked = ttsEnabled;
ttsCheckbox.addEventListener('change', () => {
    ttsEnabled = ttsCheckbox.checked;
    document.body.classList.toggle('read-aloud-off', !ttsEnabled);
    localStorage.setItem('scReadAloud', ttsEnabled ? 'on' : 'off');
    if (!ttsEnabled) stopSequence();
});

const gameMenuToggle = document.getElementById('gameMenuToggle');
const gameMenuList = document.getElementById('gameMenuList');
gameMenuToggle.addEventListener('click', e => {
    e.stopPropagation();
    gameMenuToggle.classList.toggle('open');
    gameMenuList.classList.toggle('open');
});
document.addEventListener('click', e => {
    if (!e.target.closest('#gameMenu')) {
        gameMenuToggle.classList.remove('open');
        gameMenuList.classList.remove('open');
    }
});

const track = document.getElementById('sliderTrack');
const slides = [];

// Slide 0: vocabulary
const hasImages = LESSON.vocab.some(w => w.img);
if (hasImages) {
    slides.push(buildSlide(`
        <div class="slide-title-row">
            <div class="slide-title">📚 Vocabulary</div>
            <div class="tts-controls">
                <button type="button" class="btn-play" id="playAllVocab">▶ Read All</button>
                <button type="button" class="btn-stop" id="stopAllVocab">⏹ Stop</button>
                <button type="button" class="btn-restart" id="restartAllVocab">🔁 Restart</button>
            </div>
        </div>
        <div class="vocab-grid">${LESSON.vocab.map(w => `
            <div class="vocab-card">
                ${w.img ? `<img class="vocab-photo" src="${esc(w.img)}" alt="${esc(w.en)}">` : '<div class="vocab-photo vocab-photo-empty"></div>'}
                <div class="vocab-en">${esc(w.en)}${speakBtn(w.en)}</div>
                <div class="vocab-tr">${esc(w.ru)}</div>
                <div class="vocab-tr">${esc(w.kz)}</div>
            </div>
        `).join('')}</div>
    `, 'wide'));
} else {
    slides.push(buildSlide(`
        <div class="slide-title-row">
            <div class="slide-title">📚 Vocabulary</div>
            <div class="tts-controls">
                <button type="button" class="btn-play" id="playAllVocab">▶ Read All</button>
                <button type="button" class="btn-stop" id="stopAllVocab">⏹ Stop</button>
                <button type="button" class="btn-restart" id="restartAllVocab">🔁 Restart</button>
            </div>
        </div>
        <table><thead><tr><th>English</th><th>Русский</th><th>Қазақша</th></tr></thead>
        <tbody>${LESSON.vocab.map(w => `<tr><td>${esc(w.en)}${speakBtn(w.en)}</td><td>${esc(w.ru)}</td><td>${esc(w.kz)}</td></tr>`).join('')}</tbody></table>
    `));
}

// Slide 1: warmup
slides.push(buildSlide(`
    <div class="slide-title">💬 Let's talk about it</div>
    <div class="lang-block"><div class="en">${esc(LESSON.warmup.en)}${speakBtn(LESSON.warmup.en)}</div></div>
    <div class="lang-block"><div class="tr"><strong>RU:</strong> ${esc(LESSON.warmup.ru)}</div></div>
    <div class="lang-block"><div class="tr"><strong>KZ:</strong> ${esc(LESSON.warmup.kz)}</div></div>
`));

// Questions paired two-per-slide, on every level. Games live in the persistent top-right buttons.
for (let i = 0; i < LESSON.questions.length; i += 2) {
    const q1 = LESSON.questions[i];
    const q2 = LESSON.questions[i + 1];
    slides.push(buildSlide(`
        <div class="question-num">Questions ${i + 1}${q2 ? '–' + (i + 2) : ''} of ${LESSON.questions.length}</div>
        <div class="q-pair">
            <div class="q-block">
                <div class="q-index">${i + 1}</div>
                <div class="lang-block"><div class="en">${esc(q1.en)}${speakBtn(q1.en)}</div></div>
                <div class="lang-block"><div class="tr"><strong>RU:</strong> ${esc(q1.ru)}</div></div>
                <div class="lang-block"><div class="tr"><strong>KZ:</strong> ${esc(q1.kz)}</div></div>
            </div>
            ${q2 ? `
            <div class="q-divider"></div>
            <div class="q-block">
                <div class="q-index">${i + 2}</div>
                <div class="lang-block"><div class="en">${esc(q2.en)}${speakBtn(q2.en)}</div></div>
                <div class="lang-block"><div class="tr"><strong>RU:</strong> ${esc(q2.ru)}</div></div>
                <div class="lang-block"><div class="tr"><strong>KZ:</strong> ${esc(q2.kz)}</div></div>
            </div>` : ''}
        </div>
    `));
}

slides.forEach(s => track.appendChild(s));

const dotsContainer = document.getElementById('dots');
slides.forEach((_, i) => {
    const dot = document.createElement('button');
    dot.className = 'dot-btn';
    dot.type = 'button';
    dot.addEventListener('click', () => goTo(i));
    dotsContainer.appendChild(dot);
});

let current = 0;
const SLIDE_KEY = 'scSlide_' + LESSON.id;
function goTo(i) {
    if (i < 0 || i >= slides.length) return;
    current = i;
    track.style.transform = `translateX(-${current * 100}%)`;
    document.getElementById('prevBtn').disabled = current === 0;
    document.getElementById('nextBtn').disabled = current === slides.length - 1;
    document.querySelectorAll('.dot-btn').forEach((d, di) => d.classList.toggle('active', di === current));
    try { sessionStorage.setItem(SLIDE_KEY, current); } catch (e) {}
}

document.getElementById('prevBtn').addEventListener('click', () => goTo(current - 1));
document.getElementById('nextBtn').addEventListener('click', () => goTo(current + 1));
document.addEventListener('keydown', e => {
    if (e.key === 'ArrowRight') goTo(current + 1);
    if (e.key === 'ArrowLeft') goTo(current - 1);
});

// Opening a game (Match/Memory/Hangman) navigates away from this page in the
// same tab, so clicking "Back to Lesson" reloads present.php from scratch -
// resume on whichever slide the teacher was on instead of always slide 1.
let savedSlide = 0;
try {
    const raw = sessionStorage.getItem(SLIDE_KEY);
    if (raw !== null) savedSlide = Math.max(0, Math.min(slides.length - 1, parseInt(raw, 10) || 0));
} catch (e) {}
goTo(savedSlide);
</script>
</body>
</html>
