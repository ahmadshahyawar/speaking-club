<?php
declare(strict_types=1);
// Intentionally not login-gated: teachers open this on a classroom
// projector/TV that may not be signed in. The lesson id acts as an
// unlisted link, same trust model as the original static display page.
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/backgrounds.php';
require_once __DIR__ . '/includes/hangman.php';

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
$hangman = [];

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

    $hangman = extract_hangman_words(
        (string)($warmup['en'] ?? ''),
        array_column($questions, 'en'),
        array_column($vocab, 'en'),
        (int)$lesson['id']
    );
}

$data = [
    'topic' => $lesson['topic'],
    'level' => $lesson['level'],
    'vocab' => $vocab,
    'warmup' => $warmup,
    'questions' => $questions,
    'background_key' => $lesson['background_key'],
    'hangman' => $hangman,
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
    .content-box.wide { max-width: 1100px; }
    .vocab-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(160px, 1fr)); gap: 18px; }
    .vocab-card {
        background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.16); border-radius: 16px;
        padding: 12px; text-align: center;
    }
    .vocab-photo {
        width: 100%; aspect-ratio: 1; object-fit: cover; border-radius: 12px;
        margin-bottom: 10px; box-shadow: 0 6px 18px rgba(0,0,0,0.45); display: block;
    }
    .vocab-photo-empty { background: rgba(255,255,255,0.08); }
    .vocab-en { font-weight: 700; font-size: 1.12em; margin-bottom: 4px; }
    .vocab-tr { font-size: 0.92em; opacity: 0.82; line-height: 1.4; }

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

    /* Persistent top-right game links (beginner/elementary) — stay above the overlay so either game is reachable at any time. */
    .game-links { position: fixed; top: 18px; right: 26px; z-index: 22; display: flex; gap: 10px; }
    .game-links button {
        background: rgba(0,0,0,0.35); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);
        color: #fff; padding: 10px 18px; border-radius: 999px; cursor: pointer; font-weight: 700; font-size: 0.9em; font-family: inherit;
    }
    .game-links button:hover { background: rgba(0,0,0,0.55); }
    .game-links button.active { background: #5b5fef; border-color: #5b5fef; }

    .game-overlay {
        position: fixed; inset: 0; z-index: 20; background: rgba(8,8,16,0.92); backdrop-filter: blur(8px);
        display: flex; align-items: center; justify-content: center; padding: 90px 24px 40px;
    }
    .game-overlay[hidden] { display: none; }
    .overlay-close {
        position: fixed; top: 68px; right: 26px; z-index: 21; width: 38px; height: 38px; border-radius: 50%;
        border: 1px solid rgba(255,255,255,0.3); background: rgba(255,255,255,0.12); color: #fff; font-size: 1.1em;
        cursor: pointer; display: flex; align-items: center; justify-content: center;
    }
    .overlay-body { max-width: 720px; width: 100%; text-align: center; }
    .overlay-title { font-size: 1.6em; font-weight: 800; margin-bottom: 22px; }

    .restart-btn {
        display: block; margin: 20px auto 0; background: #5b5fef; font-family: inherit;
        color: #fff; border: none; padding: 11px 26px; border-radius: 999px; cursor: pointer; font-weight: 700;
    }

    /* Match game */
    .match-prompt { margin-bottom: 18px; }
    .match-photo { width: 150px; height: 150px; object-fit: cover; border-radius: 16px; margin: 0 auto 14px; display: block; box-shadow: 0 6px 20px rgba(0,0,0,0.5); }
    .match-tr { font-size: 1.3em; font-weight: 700; line-height: 1.5; }
    .match-feedback { min-height: 1.4em; font-weight: 700; margin-bottom: 14px; }
    .match-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; }
    .match-opt {
        border: none; border-radius: 12px; padding: 16px 10px; color: #fff; font-weight: 700; font-size: 1.05em;
        cursor: pointer; font-family: inherit; box-shadow: 0 4px 12px rgba(0,0,0,0.35);
    }
    .match-opt:disabled { opacity: 0.4; cursor: default; }
    .match-status { margin-top: 18px; opacity: 0.75; font-size: 0.9em; }
    .match-complete h3 { font-size: 1.4em; margin-bottom: 8px; }

    /* Hangman game */
    .hangman-cat { opacity: 0.7; font-size: 0.85em; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 10px; }
    .hangman-clue { font-size: 1.1em; font-style: italic; opacity: 0.9; margin-bottom: 18px; line-height: 1.6; }
    .hangman-word { font-size: 2.1em; font-weight: 800; letter-spacing: 0.12em; margin-bottom: 12px; }
    .hangman-status { opacity: 0.75; margin-bottom: 18px; font-size: 0.9em; }
    .hangman-keys { display: grid; grid-template-columns: repeat(9, 1fr); gap: 8px; max-width: 480px; margin: 0 auto; }
    .hg-key {
        background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.3); color: #fff; font-family: inherit;
        padding: 10px 0; border-radius: 8px; cursor: pointer; font-weight: 700;
    }
    .hg-key:disabled { opacity: 0.3; cursor: default; }
    .hangman-result h3 { font-size: 1.4em; margin-bottom: 8px; }

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
<div class="bg-stage bg-<?= htmlspecialchars($data['background_key'], ENT_QUOTES, 'UTF-8') ?>"></div>

<div class="topbar">
    <div class="title-block">
        <div class="t"><?= htmlspecialchars($data['topic'], ENT_QUOTES, 'UTF-8') ?></div>
        <div class="l"><?= htmlspecialchars($data['level'], ENT_QUOTES, 'UTF-8') ?></div>
    </div>
</div>

<?php if ($isPictureLevel): ?>
<div class="game-links" id="gameLinks">
    <button type="button" id="btnMatch">🎯 Match</button>
    <button type="button" id="btnHangman">🔠 Hangman</button>
</div>
<div class="game-overlay" id="gameOverlay" hidden>
    <button class="overlay-close" id="overlayClose">✕</button>
    <div class="overlay-body" id="overlayBody"></div>
</div>
<?php endif; ?>

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

function buildSlide(innerHtml, extraClass) {
    const slide = document.createElement('div');
    slide.className = 'slide';
    const box = document.createElement('div');
    box.className = 'content-box' + (extraClass ? ' ' + extraClass : '');
    box.innerHTML = innerHtml;
    slide.appendChild(box);
    return slide;
}

const track = document.getElementById('sliderTrack');
const slides = [];

// Slide 0: vocabulary
const hasImages = LESSON.vocab.some(w => w.img);
if (hasImages) {
    slides.push(buildSlide(`
        <div class="slide-title">📚 Vocabulary</div>
        <div class="vocab-grid">${LESSON.vocab.map(w => `
            <div class="vocab-card">
                ${w.img ? `<img class="vocab-photo" src="${esc(w.img)}" alt="${esc(w.en)}">` : '<div class="vocab-photo vocab-photo-empty"></div>'}
                <div class="vocab-en">${esc(w.en)}</div>
                <div class="vocab-tr">${esc(w.ru)}</div>
                <div class="vocab-tr">${esc(w.kz)}</div>
            </div>
        `).join('')}</div>
    `, 'wide'));
} else {
    slides.push(buildSlide(`
        <div class="slide-title">📚 Vocabulary</div>
        <table><thead><tr><th>English</th><th>Русский</th><th>Қазақша</th></tr></thead>
        <tbody>${LESSON.vocab.map(w => `<tr><td>${esc(w.en)}</td><td>${esc(w.ru)}</td><td>${esc(w.kz)}</td></tr>`).join('')}</tbody></table>
    `));
}

// Slide 1: warmup
slides.push(buildSlide(`
    <div class="slide-title">💬 Let's talk about it</div>
    <div class="lang-block"><div class="en">${esc(LESSON.warmup.en)}</div></div>
    <div class="lang-block"><div class="tr"><strong>RU:</strong> ${esc(LESSON.warmup.ru)}</div></div>
    <div class="lang-block"><div class="tr"><strong>KZ:</strong> ${esc(LESSON.warmup.kz)}</div></div>
`));

const isPictureLevel = LESSON.level === 'beginner' || LESSON.level === 'elementary';
let gameSlide = null;

if (isPictureLevel) {
    // Questions paired two-per-slide; games live in the persistent top-right buttons instead of a hub slide.
    for (let i = 0; i < LESSON.questions.length; i += 2) {
        const q1 = LESSON.questions[i];
        const q2 = LESSON.questions[i + 1];
        slides.push(buildSlide(`
            <div class="question-num">Questions ${i + 1}${q2 ? '–' + (i + 2) : ''} of ${LESSON.questions.length}</div>
            <div class="q-pair">
                <div class="q-block">
                    <div class="q-index">${i + 1}</div>
                    <div class="lang-block"><div class="en">${esc(q1.en)}</div></div>
                    <div class="lang-block"><div class="tr"><strong>RU:</strong> ${esc(q1.ru)}</div></div>
                    <div class="lang-block"><div class="tr"><strong>KZ:</strong> ${esc(q1.kz)}</div></div>
                </div>
                ${q2 ? `
                <div class="q-divider"></div>
                <div class="q-block">
                    <div class="q-index">${i + 2}</div>
                    <div class="lang-block"><div class="en">${esc(q2.en)}</div></div>
                    <div class="lang-block"><div class="tr"><strong>RU:</strong> ${esc(q2.ru)}</div></div>
                    <div class="lang-block"><div class="tr"><strong>KZ:</strong> ${esc(q2.kz)}</div></div>
                </div>` : ''}
            </div>
        `));
    }
} else {
    // Slide: game hub (Memory Match / Speed Quiz)
    gameSlide = buildSlide(`
        <div class="slide-title">🎮 Let's Play!</div>
        <div class="game-menu">
            <button id="playMemory" type="button">🧠 Memory Match</button>
            <button id="playQuiz" type="button">⚡ Speed Quiz</button>
        </div>
        <div id="gameArea" style="margin-top:20px;"></div>
    `);
    slides.push(gameSlide);

    // One slide per question
    LESSON.questions.forEach((q, i) => {
        slides.push(buildSlide(`
            <div class="question-num">Question ${i + 1} of ${LESSON.questions.length}</div>
            <div class="lang-block"><div class="en">${esc(q.en)}</div></div>
            <div class="lang-block"><div class="tr"><strong>RU:</strong> ${esc(q.ru)}</div></div>
            <div class="lang-block"><div class="tr"><strong>KZ:</strong> ${esc(q.kz)}</div></div>
        `));
    });
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

// Game hub wiring (Memory Match / Speed Quiz) — pre-intermediate/intermediate only
if (gameSlide) {
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
}

// Persistent Match / Hangman games — beginner/elementary only
if (isPictureLevel) {
    const overlay = document.getElementById('gameOverlay');
    const overlayBody = document.getElementById('overlayBody');
    const overlayClose = document.getElementById('overlayClose');
    const btnMatch = document.getElementById('btnMatch');
    const btnHangman = document.getElementById('btnHangman');

    function openOverlay(title, builder, activeBtn) {
        overlayBody.innerHTML = `<div class="overlay-title">${title}</div><div id="overlayGame"></div>`;
        overlay.hidden = false;
        builder(overlayBody.querySelector('#overlayGame'));
        [btnMatch, btnHangman].forEach(b => b.classList.toggle('active', b === activeBtn));
    }
    overlayClose.addEventListener('click', () => {
        overlay.hidden = true;
        overlayBody.innerHTML = '';
        [btnMatch, btnHangman].forEach(b => b.classList.remove('active'));
    });

    btnMatch.addEventListener('click', () => openOverlay('🎯 Match the Word', mount => startMatchGame(mount, LESSON.vocab), btnMatch));
    btnHangman.addEventListener('click', () => openOverlay('🔠 Hangman', mount => startHangmanGame(mount, LESSON.hangman), btnHangman));
}

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

function hangmanSvg(wrong) {
    let svg = `<svg viewBox="0 0 200 220" width="180" height="198" style="display:block;margin:0 auto 16px;">
        <g stroke="#fff" stroke-width="8" stroke-linecap="round" fill="none" opacity="0.85">
            <line x1="18" y1="204" x2="92" y2="204"/>
            <line x1="45" y1="204" x2="45" y2="16"/>
            <line x1="45" y1="16" x2="140" y2="16"/>
            <line x1="140" y1="16" x2="140" y2="42"/>
        </g>`;
    const p = '<g stroke="#ff8a5c" stroke-width="8" stroke-linecap="round" fill="none">';
    if (wrong >= 1) svg += `${p}<circle cx="140" cy="60" r="18" stroke-width="7"/></g>`;
    if (wrong >= 2) svg += `${p}<line x1="140" y1="78" x2="140" y2="136"/></g>`;
    if (wrong >= 3) svg += `${p}<line x1="140" y1="94" x2="112" y2="118"/></g>`;
    if (wrong >= 4) svg += `${p}<line x1="140" y1="94" x2="168" y2="118"/></g>`;
    if (wrong >= 5) svg += `${p}<line x1="140" y1="136" x2="115" y2="178"/><line x1="140" y1="136" x2="165" y2="178"/></g>`;
    svg += `</svg>`;
    return svg;
}

function startHangmanGame(container, words) {
    if (!words || !words.length) {
        container.innerHTML = `<p>No hangman words available for this lesson.</p>`;
        return;
    }
    let idx = 0;
    let solved = 0;

    function renderWord() {
        if (idx >= words.length) { renderComplete(); return; }
        const { word, clue } = words[idx];
        const letters = word.toUpperCase().split('');
        const guessed = new Set();
        let wrong = 0;

        function draw() {
            const display = letters.map(l => guessed.has(l) ? l : '_').join(' ');
            container.innerHTML = `
                <div class="hangman-cat">Word ${idx + 1} of ${words.length}</div>
                ${hangmanSvg(wrong)}
                <div class="hangman-clue">${esc(clue)}</div>
                <div class="hangman-word">${display}</div>
                <div class="hangman-status">Wrong guesses: ${wrong} / ${HANGMAN_MAX_WRONG}</div>
                <div class="hangman-keys">${'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('').map(l => `<button type="button" class="hg-key" data-l="${l}" ${guessed.has(l) ? 'disabled' : ''}>${l}</button>`).join('')}</div>
            `;
            container.querySelectorAll('.hg-key').forEach(btn => {
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
            container.innerHTML = `
                ${hangmanSvg(wrongCount)}
                <div class="hangman-result">
                    <h3>${won ? '🎉 Correct!' : '💀 He got hanged!'}</h3>
                    <p>The word was <strong>${esc(word.toUpperCase())}</strong></p>
                    <button type="button" class="restart-btn" id="hgNext">${idx + 1 < words.length ? 'Next word' : 'See results'}</button>
                </div>
            `;
            container.querySelector('#hgNext').addEventListener('click', () => { idx++; renderWord(); });
        }

        draw();
    }

    function renderComplete() {
        container.innerHTML = `
            <div class="hangman-result">
                <h3>🏁 Finished!</h3>
                <p>${solved} of ${words.length} words solved.</p>
                <button type="button" class="restart-btn" id="hgRestart">Play again</button>
            </div>
        `;
        container.querySelector('#hgRestart').addEventListener('click', () => { idx = 0; solved = 0; renderWord(); });
    }

    renderWord();
}

goTo(0);
</script>
</body>
</html>
