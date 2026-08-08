function initQuizGame(container, vocab, lang) {
    const pool = vocab.filter(w => w.en && w[lang]);
    const questions = shuffleArray(pool).slice(0, Math.min(10, pool.length)).map(w => {
        const distractorPool = pool.filter(p => p[lang] !== w[lang]).map(p => p[lang]);
        const distractors = shuffleArray(distractorPool).slice(0, 3);
        const options = shuffleArray([w[lang], ...distractors]);
        return { prompt: w.en, correct: w[lang], options };
    });

    let index = 0;
    let score = 0;

    render();

    function render() {
        if (index >= questions.length) {
            renderComplete();
            return;
        }
        const q = questions[index];
        container.innerHTML = '';

        const progress = document.createElement('div');
        progress.className = 'quiz-progress';
        progress.textContent = `Question ${index + 1} of ${questions.length}`;
        container.appendChild(progress);

        const prompt = document.createElement('div');
        prompt.className = 'quiz-question';
        prompt.textContent = `What does "${q.prompt}" mean?`;
        container.appendChild(prompt);

        const optionsWrap = document.createElement('div');
        optionsWrap.className = 'quiz-options';
        q.options.forEach(opt => {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'quiz-option';
            btn.textContent = opt;
            btn.addEventListener('click', () => selectAnswer(opt, q, optionsWrap));
            optionsWrap.appendChild(btn);
        });
        container.appendChild(optionsWrap);

        const scoreLine = document.createElement('div');
        scoreLine.className = 'quiz-score';
        scoreLine.textContent = `Score: ${score} / ${index}`;
        container.appendChild(scoreLine);
    }

    function selectAnswer(chosen, q, optionsWrap) {
        const buttons = optionsWrap.querySelectorAll('.quiz-option');
        buttons.forEach(btn => {
            btn.disabled = true;
            if (btn.textContent === q.correct) btn.classList.add('correct');
            else if (btn.textContent === chosen) btn.classList.add('incorrect');
        });
        if (chosen === q.correct) score++;

        const next = document.createElement('button');
        next.className = 'quiz-next-btn';
        next.textContent = index + 1 < questions.length ? 'Next ➡' : 'See results 🏁';
        next.addEventListener('click', () => { index++; render(); });
        optionsWrap.parentNode.appendChild(next);
    }

    function renderComplete() {
        const pct = questions.length ? Math.round((score / questions.length) * 100) : 0;
        container.innerHTML = `
            <div class="quiz-complete">
                <h3>🏁 ${score} / ${questions.length} correct (${pct}%)</h3>
            </div>
        `;
        const replay = document.createElement('button');
        replay.className = 'memory-replay-btn';
        replay.textContent = '🔁 Play Again';
        replay.addEventListener('click', () => initQuizGame(container, vocab, lang));
        container.querySelector('.quiz-complete').appendChild(replay);
    }
}
