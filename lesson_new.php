<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/levels.php';
require_once __DIR__ . '/includes/backgrounds.php';

$teacher = require_admin();

$lessonId = isset($_GET['id']) ? (int)$_GET['id'] : null;
$lesson = null;

if ($lessonId) {
    $stmt = db()->prepare('SELECT * FROM lessons WHERE id = ?');
    $stmt->execute([$lessonId]);
    $lesson = $stmt->fetch();
    if (!$lesson) {
        http_response_code(404);
        die('Lesson not found.');
    }
}

$initialLevel = $lesson['level'] ?? ($_GET['level'] ?? 'beginner');
if (!array_key_exists($initialLevel, LEVELS)) {
    $initialLevel = 'beginner';
}

$initialData = [
    'id' => $lesson['id'] ?? null,
    'topic' => $lesson['topic'] ?? '',
    'level' => $initialLevel,
    'vocab' => $lesson ? json_decode($lesson['vocab'], true) : [],
    'warmup' => $lesson ? json_decode($lesson['warmup'], true) : ['en' => '', 'ru' => '', 'kz' => ''],
    'questions' => $lesson ? json_decode($lesson['questions'], true) : [],
    'background_key' => $lesson['background_key'] ?? 'calm',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $lesson ? 'Edit Lesson' : 'New Lesson' ?> - Speaking Club Portal</title>
<link rel="stylesheet" href="<?= av('assets/css/style.css') ?>">
<style>
    .row-flex { display: flex; gap: 10px; align-items: flex-start; margin-bottom: 10px; }
    .row-flex .field { flex: 1; margin-bottom: 0; }
    .row-flex .remove-btn { margin-top: 28px; }
    .generate-bar { display: flex; gap: 12px; align-items: flex-end; flex-wrap: wrap; margin-bottom: 24px; }
    .generate-bar .field { flex: 1; min-width: 220px; margin-bottom: 0; }
    .section-title { margin: 26px 0 12px; color: var(--primary-dark); }
    .add-row-btn { margin-top: 6px; }
    #genError { display: none; }
    #genStatus { display: none; color: var(--ink-soft); margin-top: 10px; }
</style>
</head>
<body>
<div class="app-shell">
    <?php $active = 'level:' . $initialLevel; include __DIR__ . '/includes/sidebar.php'; ?>

    <main class="main">
    <div class="main-header">
        <div>
            <h1><?= $lesson ? 'Edit Lesson' : 'New Lesson' ?></h1>
            <p><?= $lesson ? 'Update the vocabulary, warm-up, and questions below.' : 'Enter a topic and let AI draft the lesson, or build it by hand.' ?></p>
        </div>
        <a class="btn btn-outline" href="dashboard.php?level=<?= urlencode($initialLevel) ?>">← Dashboard</a>
    </div>

    <div class="card">
        <div class="generate-bar">
            <div class="field">
                <label for="topicInput">Topic</label>
                <input type="text" id="topicInput" placeholder="e.g. Daily Routines, Travel, Discipline">
            </div>
            <div class="field" style="max-width: 220px;">
                <label for="levelSelect">Level</label>
                <select id="levelSelect">
                    <?php foreach (LEVELS as $key => $label): ?>
                        <option value="<?= h($key) ?>"><?= h($label) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="button" class="btn btn-success" id="generateBtn">✨ Generate with AI</button>
        </div>
        <div id="genError" class="error-msg"></div>
        <div id="genStatus"><span class="spinner"></span>Generating lesson…</div>

        <div class="section-title"><h2>Background mood</h2></div>
        <div class="field" style="max-width: 260px;">
            <select id="backgroundSelect">
                <?php foreach (BACKGROUND_MOODS as $key => $label): ?>
                    <option value="<?= h($key) ?>"><?= h($label) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="section-title"><h2>Warm-up intro</h2></div>
        <div class="field"><label>English</label><textarea id="warmupEn" rows="2"></textarea></div>
        <div class="field"><label>Russian</label><textarea id="warmupRu" rows="2"></textarea></div>
        <div class="field"><label>Kazakh</label><textarea id="warmupKz" rows="2"></textarea></div>

        <div class="section-title"><h2>Vocabulary</h2></div>
        <div id="vocabRows"></div>
        <button type="button" class="btn add-row-btn" id="addVocabRow">+ Add word</button>

        <div class="section-title"><h2>Discussion questions</h2></div>
        <div id="questionRows"></div>
        <button type="button" class="btn add-row-btn" id="addQuestionRow">+ Add question</button>

        <div style="margin-top: 30px; text-align: center;">
            <button type="button" class="btn btn-success" id="saveBtn" style="padding: 14px 40px; font-size: 1.05em;">💾 Save Lesson</button>
        </div>
    </div>
    </main>
</div>

<script>
const CSRF_TOKEN = <?= json_encode(csrf_token()) ?>;
const LESSON = <?= json_encode($initialData, JSON_UNESCAPED_UNICODE) ?>;

document.getElementById('topicInput').value = LESSON.topic;
document.getElementById('levelSelect').value = LESSON.level;
document.getElementById('backgroundSelect').value = LESSON.background_key;
document.getElementById('warmupEn').value = LESSON.warmup.en || '';
document.getElementById('warmupRu').value = LESSON.warmup.ru || '';
document.getElementById('warmupKz').value = LESSON.warmup.kz || '';

let vocab = LESSON.vocab.length ? LESSON.vocab : [];
let questions = LESSON.questions.length ? LESSON.questions : [];

function renderVocab() {
    const container = document.getElementById('vocabRows');
    container.innerHTML = '';
    vocab.forEach((w, i) => {
        const div = document.createElement('div');
        div.className = 'row-flex';
        div.innerHTML = `
            <div class="field"><label>English</label><input type="text" data-i="${i}" data-f="en" value="${escAttr(w.en)}"></div>
            <div class="field"><label>Russian</label><input type="text" data-i="${i}" data-f="ru" value="${escAttr(w.ru)}"></div>
            <div class="field"><label>Kazakh</label><input type="text" data-i="${i}" data-f="kz" value="${escAttr(w.kz)}"></div>
            <button type="button" class="btn btn-danger remove-btn" data-remove="${i}">✕</button>
        `;
        container.appendChild(div);
    });
    container.querySelectorAll('input').forEach(inp => {
        inp.addEventListener('input', e => {
            vocab[e.target.dataset.i][e.target.dataset.f] = e.target.value;
        });
    });
    container.querySelectorAll('[data-remove]').forEach(btn => {
        btn.addEventListener('click', e => {
            vocab.splice(parseInt(e.target.dataset.remove), 1);
            renderVocab();
        });
    });
}

function renderQuestions() {
    const container = document.getElementById('questionRows');
    container.innerHTML = '';
    questions.forEach((q, i) => {
        const div = document.createElement('div');
        div.className = 'card';
        div.style.marginBottom = '14px';
        div.style.boxShadow = 'none';
        div.style.border = '1px solid #e2e2ef';
        div.innerHTML = `
            <div class="field"><label>English</label><textarea rows="2" data-i="${i}" data-f="en">${escHtml(q.en)}</textarea></div>
            <div class="field"><label>Russian</label><textarea rows="2" data-i="${i}" data-f="ru">${escHtml(q.ru)}</textarea></div>
            <div class="field"><label>Kazakh</label><textarea rows="2" data-i="${i}" data-f="kz">${escHtml(q.kz)}</textarea></div>
            <button type="button" class="btn btn-danger" data-remove="${i}">✕ Remove question</button>
        `;
        container.appendChild(div);
    });
    container.querySelectorAll('textarea').forEach(inp => {
        inp.addEventListener('input', e => {
            questions[e.target.dataset.i][e.target.dataset.f] = e.target.value;
        });
    });
    container.querySelectorAll('[data-remove]').forEach(btn => {
        btn.addEventListener('click', e => {
            questions.splice(parseInt(e.target.dataset.remove), 1);
            renderQuestions();
        });
    });
}

function escAttr(s) { return (s || '').replace(/"/g, '&quot;'); }
function escHtml(s) { const d = document.createElement('div'); d.textContent = s || ''; return d.innerHTML; }

document.getElementById('addVocabRow').addEventListener('click', () => {
    vocab.push({en: '', ru: '', kz: ''});
    renderVocab();
});
document.getElementById('addQuestionRow').addEventListener('click', () => {
    questions.push({en: '', ru: '', kz: ''});
    renderQuestions();
});

document.getElementById('generateBtn').addEventListener('click', async () => {
    const topic = document.getElementById('topicInput').value.trim();
    const level = document.getElementById('levelSelect').value;
    const errBox = document.getElementById('genError');
    const statusBox = document.getElementById('genStatus');
    errBox.style.display = 'none';
    if (!topic) {
        errBox.textContent = 'Please enter a topic first.';
        errBox.style.display = 'block';
        return;
    }
    statusBox.style.display = 'block';
    document.getElementById('generateBtn').disabled = true;
    try {
        const res = await fetch('api/generate_lesson.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({topic, level, csrf_token: CSRF_TOKEN})
        });
        const data = await res.json();
        if (!res.ok) throw new Error(data.error || 'Generation failed.');
        vocab = data.vocab;
        questions = data.questions;
        document.getElementById('warmupEn').value = data.warmup.en || '';
        document.getElementById('warmupRu').value = data.warmup.ru || '';
        document.getElementById('warmupKz').value = data.warmup.kz || '';
        document.getElementById('backgroundSelect').value = data.background_key || 'calm';
        renderVocab();
        renderQuestions();
    } catch (e) {
        errBox.textContent = e.message;
        errBox.style.display = 'block';
    } finally {
        statusBox.style.display = 'none';
        document.getElementById('generateBtn').disabled = false;
    }
});

document.getElementById('saveBtn').addEventListener('click', async () => {
    const topic = document.getElementById('topicInput').value.trim();
    if (!topic) { alert('Please enter a topic.'); return; }
    if (!vocab.length) { alert('Add at least one vocabulary word.'); return; }
    if (!questions.length) { alert('Add at least one discussion question.'); return; }

    const payload = {
        id: LESSON.id,
        topic,
        level: document.getElementById('levelSelect').value,
        vocab,
        warmup: {
            en: document.getElementById('warmupEn').value,
            ru: document.getElementById('warmupRu').value,
            kz: document.getElementById('warmupKz').value,
        },
        questions,
        background_key: document.getElementById('backgroundSelect').value,
        csrf_token: CSRF_TOKEN
    };

    const btn = document.getElementById('saveBtn');
    btn.disabled = true;
    try {
        const res = await fetch('api/save_lesson.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify(payload)
        });
        const data = await res.json();
        if (!res.ok) throw new Error(data.error || 'Save failed.');
        window.location.href = `dashboard.php?level=${encodeURIComponent(payload.level)}&saved=1`;
    } catch (e) {
        alert(e.message);
        btn.disabled = false;
    }
});

renderVocab();
renderQuestions();
</script>
</body>
</html>
