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

$data = [
    'topic' => $lesson['topic'],
    'level' => $lesson['level'],
    'vocab' => json_decode($lesson['vocab'], true),
    'warmup' => json_decode($lesson['warmup'], true),
    'questions' => json_decode($lesson['questions'], true),
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
    .slide { min-width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; padding: 90px 30px 110px; overflow-y: auto; }

    .content-box {
        background: rgba(0,0,0,0.4); backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px);
        padding: 34px; border-radius: 20px; box-shadow: 0 8px 40px rgba(0,0,0,0.5);
        border: 1px solid rgba(255,255,255,0.18); max-width: 820px; width: 100%;
    }
    table { width: 100%; border-collapse: collapse; background: rgba(255,255,255,0.08); border-radius: 12px; overflow: hidden; }
    th { background: rgba(91,95,239,0.75); padding: 13px; text-align: left; font-weight: 700; }
    td { padding: 12px 13px; border-bottom: 1px solid rgba(255,255,255,0.14); }
    tr:nth-child(even) td { background: rgba(255,255,255,0.04); }

    .slide-title { text-align: center; font-size: 1.9em; font-weight: 800; margin-bottom: 8px; }
    .level-tag { text-align: center; opacity: 0.7; margin-bottom: 20px; font-size: 0.85em; text-transform: uppercase; letter-spacing: 0.1em; }
    .lang-block { margin-bottom: 12px; }
    .lang-block .en { font-size: 1.3em; font-weight: 700; margin-bottom: 8px; }
    .lang-block .tr { font-size: 1.02em; opacity: 0.85; font-style: italic; line-height: 1.6; }
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

    .game-menu { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
    .game-menu button {
        background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.4); color: #fff;
        padding: 20px 30px; border-radius: 14px; cursor: pointer; font-size: 1.1em; font-weight: 700; font-family: inherit;
    }
    .game-menu button:hover { background: rgba(255,255,255,0.28); }
    .lang-toggle { display: flex; gap: 8px; justify-content: center; margin-bottom: 16px; }
    .lang-toggle button { background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.4); color: #fff; padding: 6px 16px; border-radius: 999px; cursor: pointer; font-size: 0.85em; font-family: inherit; }
    .lang-toggle button.active { background: #fff; color: #333; }

    .memory-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; max-width: 560px; margin: 0 auto; }
    .memory-card {
        aspect-ratio: 1; border-radius: 10px; border: 1px solid rgba(255,255,255,0.3);
        background: rgba(255,255,255,0.12); color: #fff; font-size: 0.85em; font-weight: 700; font-family: inherit;
        display: flex; align-items: center; justify-content: center; text-align: center; padding: 6px;
        cursor: pointer; transition: background 0.2s;
    }
    .memory-card:hover { background: rgba(255,255,255,0.22); }
    .memory-card.revealed { background: rgba(91,95,239,0.55); cursor: default; }
    .memory-card.matched { background: rgba(22,163,74,0.55); cursor: default; }
    .memory-status { text-align: center; margin-top: 14px; opacity: 0.85; }
    .memory-complete { text-align: center; }
    .memory-complete h3 { margin-bottom: 10px; }

    .quiz-question { font-size: 1.2em; font-weight: 700; margin-bottom: 6px; text-align: center; }
    .quiz-progress { text-align: center; opacity: 0.7; font-size: 0.85em; margin-bottom: 18px; }
    .quiz-options { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; max-width: 520px; margin: 0 auto; }
    .quiz-option {
        background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.3); color: #fff; font-family: inherit;
        padding: 14px; border-radius: 10px; cursor: pointer; font-size: 1em; text-align: center;
    }
    .quiz-option:hover:not(:disabled) { background: rgba(255,255,255,0.22); }
    .quiz-option.correct { background: rgba(22,163,74,0.7); border-color: #16a34a; }
    .quiz-option.incorrect { background: rgba(220,38,38,0.7); border-color: #dc2626; }
    .quiz-option:disabled { cursor: default; opacity: 0.85; }
    .quiz-score { text-align: center; margin-top: 16px; opacity: 0.85; }
    .quiz-complete { text-align: center; }
    .quiz-complete h3 { margin-bottom: 8px; font-size: 1.4em; }
    .quiz-next-btn, .memory-replay-btn {
        display: block; margin: 18px auto 0; background: #5b5fef; font-family: inherit;
        color: #fff; border: none; padding: 11px 26px; border-radius: 999px; cursor: pointer; font-weight: 700;
    }
</style>
</head>
<body>
<div class="bg-stage bg-<?= htmlspecialchars($data['background_key'], ENT_QUOTES, 'UTF-8') ?>"></div>

<div class="topbar">
    <div class="title-block">
        <div class="t"><?= htmlspecialchars($data['topic'], ENT_QUOTES, 'UTF-8') ?></div>
        <div class="l"><?= htmlspecialchars($data['level'], ENT_QUOTES, 'UTF-8') ?></div>
    </div>
</div>

<div class="slider-viewport">
    <div class="slider-track" id="sliderTrack"></div>
</div>

<button class="nav-arrow prev" id="prevBtn">‹</button>
<button class="nav-arrow next" id="nextBtn">›</button>
<div class="dots" id="dots"></div>

<script src="<?= av('assets/js/game-memory.js') ?>"></script>
<script src="<?= av('assets/js/game-quiz.js') ?>"></script>
<script>
const LESSON = <?= json_encode($data, JSON_UNESCAPED_UNICODE) ?>;

function esc(s) {
    const d = document.createElement('div');
    d.textContent = s || '';
    return d.innerHTML;
}

function buildSlide(innerHtml) {
    const slide = document.createElement('div');
    slide.className = 'slide';
    const box = document.createElement('div');
    box.className = 'content-box';
    box.innerHTML = innerHtml;
    slide.appendChild(box);
    return slide;
}

const track = document.getElementById('sliderTrack');
const slides = [];

// Slide 0: vocabulary
slides.push(buildSlide(`
    <div class="slide-title">📚 Vocabulary</div>
    <table><thead><tr><th>English</th><th>Русский</th><th>Қазақша</th></tr></thead>
    <tbody>${LESSON.vocab.map(w => `<tr><td>${esc(w.en)}</td><td>${esc(w.ru)}</td><td>${esc(w.kz)}</td></tr>`).join('')}</tbody></table>
`));

// Slide 1: warmup
slides.push(buildSlide(`
    <div class="slide-title">💬 Let's talk about it</div>
    <div class="lang-block"><div class="en">${esc(LESSON.warmup.en)}</div></div>
    <div class="lang-block"><div class="tr"><strong>RU:</strong> ${esc(LESSON.warmup.ru)}</div></div>
    <div class="lang-block"><div class="tr"><strong>KZ:</strong> ${esc(LESSON.warmup.kz)}</div></div>
`));

// Slide 2: game hub
const gameSlide = buildSlide(`
    <div class="slide-title">🎮 Let's Play!</div>
    <div class="game-menu">
        <button id="playMemory" type="button">🧠 Memory Match</button>
        <button id="playQuiz" type="button">⚡ Speed Quiz</button>
    </div>
    <div id="gameArea" style="margin-top:20px;"></div>
`);
slides.push(gameSlide);

// Slides 3+: one per question
LESSON.questions.forEach((q, i) => {
    slides.push(buildSlide(`
        <div class="question-num">Question ${i + 1} of ${LESSON.questions.length}</div>
        <div class="lang-block"><div class="en">${esc(q.en)}</div></div>
        <div class="lang-block"><div class="tr"><strong>RU:</strong> ${esc(q.ru)}</div></div>
        <div class="lang-block"><div class="tr"><strong>KZ:</strong> ${esc(q.kz)}</div></div>
    `));
});

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
function goTo(i) {
    if (i < 0 || i >= slides.length) return;
    current = i;
    track.style.transform = `translateX(-${current * 100}%)`;
    document.getElementById('prevBtn').disabled = current === 0;
    document.getElementById('nextBtn').disabled = current === slides.length - 1;
    document.querySelectorAll('.dot-btn').forEach((d, di) => d.classList.toggle('active', di === current));
}

document.getElementById('prevBtn').addEventListener('click', () => goTo(current - 1));
document.getElementById('nextBtn').addEventListener('click', () => goTo(current + 1));
document.addEventListener('keydown', e => {
    if (e.key === 'ArrowRight') goTo(current + 1);
    if (e.key === 'ArrowLeft') goTo(current - 1);
});

// Game hub wiring
gameSlide.querySelector('#playMemory').addEventListener('click', () => startGame('memory'));
gameSlide.querySelector('#playQuiz').addEventListener('click', () => startGame('quiz'));

function startGame(type) {
    const area = gameSlide.querySelector('#gameArea');
    area.innerHTML = `
        <div class="lang-toggle">
            <span style="opacity:0.75;align-self:center;margin-right:6px;">Practice against:</span>
            <button class="lang-btn active" data-lang="ru" type="button">Russian</button>
            <button class="lang-btn" data-lang="kz" type="button">Kazakh</button>
        </div>
        <div id="gameMount"></div>
    `;
    const mount = area.querySelector('#gameMount');
    let lang = 'ru';

    function launch() {
        mount.innerHTML = '';
        if (type === 'memory') {
            initMemoryGame(mount, LESSON.vocab, lang);
        } else {
            initQuizGame(mount, LESSON.vocab, lang);
        }
    }
    area.querySelectorAll('.lang-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            area.querySelectorAll('.lang-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            lang = btn.dataset.lang;
            launch();
        });
    });
    launch();
}

goTo(0);
</script>
</body>
</html>
