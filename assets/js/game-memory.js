function initMemoryGame(container, vocab, lang) {
    const pool = vocab.filter(w => w.en && w[lang]);
    const pairsCount = Math.min(8, pool.length);
    const chosen = shuffleArray(pool).slice(0, pairsCount);

    let cards = [];
    chosen.forEach((w, i) => {
        cards.push({ pairId: i, text: w.en, matched: false });
        cards.push({ pairId: i, text: w[lang], matched: false });
    });
    cards = shuffleArray(cards);

    let flipped = [];
    let locked = false;
    let moves = 0;
    let matchedPairs = 0;

    render();

    function render() {
        const grid = document.createElement('div');
        grid.className = 'memory-grid';
        cards.forEach((card, i) => {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'memory-card' + (card.matched ? ' matched' : '') + (flipped.includes(i) ? ' revealed' : '');
            btn.textContent = (card.matched || flipped.includes(i)) ? card.text : '?';
            btn.disabled = card.matched || locked;
            btn.addEventListener('click', () => handleClick(i));
            grid.appendChild(btn);
        });

        const status = document.createElement('div');
        status.className = 'memory-status';
        status.textContent = `Moves: ${moves} | Pairs found: ${matchedPairs} / ${chosen.length}`;

        container.innerHTML = '';
        container.appendChild(grid);
        container.appendChild(status);

        if (matchedPairs === chosen.length && chosen.length > 0) {
            const done = document.createElement('div');
            done.className = 'memory-complete';
            done.innerHTML = `<h3>🎉 Well done! Solved in ${moves} moves.</h3>`;
            const replay = document.createElement('button');
            replay.className = 'memory-replay-btn';
            replay.textContent = '🔁 Play Again';
            replay.addEventListener('click', () => initMemoryGame(container, vocab, lang));
            done.appendChild(replay);
            container.appendChild(done);
        }
    }

    function handleClick(i) {
        if (locked || flipped.includes(i) || cards[i].matched) return;
        flipped.push(i);
        render();
        if (flipped.length === 2) {
            moves++;
            locked = true;
            const [a, b] = flipped;
            if (cards[a].pairId === cards[b].pairId) {
                cards[a].matched = true;
                cards[b].matched = true;
                matchedPairs++;
                flipped = [];
                locked = false;
                render();
            } else {
                setTimeout(() => {
                    flipped = [];
                    locked = false;
                    render();
                }, 800);
            }
        }
    }
}

function shuffleArray(arr) {
    const a = arr.slice();
    for (let i = a.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [a[i], a[j]] = [a[j], a[i]];
    }
    return a;
}
