<?php require_once __DIR__ . '/layout/header.php'; ?>

<section class="detail-header-card">
    <div class="detail-header-info">
        <a href="/tricks" class="back-link">← Back to tricks</a>
        <p class="eyebrow-text"><?= htmlspecialchars($discipline ?? 'SLALOM') ?> / <?= htmlspecialchars($difficulty ?? 'BEGINNER') ?></p>
        <h1><?= htmlspecialchars($name ?? 'Cross') ?></h1>
        <p class="subtitle-text">Build your slalom foundations, one cone at a time.</p>
    </div>
    <div class="detail-header-status">
        <span class="badge-mastered">✓ Mastered</span>
    </div>
</section>

<section class="detail-main-grid">
    <figure class="trick-media-placeholder">
        <img src="/assets/images/tricks/cross-preview.jpg" alt="<?= htmlspecialchars($name ?? 'Cross') ?> demonstration">
    </figure>

    <article class="info-card">
        <h2>About this trick</h2>
        <p>
            Cross is a forward slalom move: your skates cross and uncross as you weave around a line of cones.
        </p>

        <dl class="trick-specs">
            <div>
                <dt>DISCIPLINE</dt>
                <dd><?= htmlspecialchars($discipline ?? 'Slalom') ?></dd>
            </div>
            <div>
                <dt>DIFFICULTY</dt>
                <dd><?= htmlspecialchars($difficulty ?? 'Beginner') ?></dd>
            </div>
        </dl>

        <div class="progress-selector">
            <span class="label">MY PROGRESS</span>
            <div class="progress-buttons">
                <button type="button" class="progress-btn">Unlearned</button>
                <button type="button" class="progress-btn">Learning</button>
                <button type="button" class="progress-btn active">Mastered</button>
            </div>
            <p class="status-note">You have this trick in your repertoire.</p>
        </div>
    </article>
</section>

<section class="detail-secondary-grid">
    <article class="info-card">
        <h2>Recommended tutorials:</h2>
        <ol class="tutorials-list">
            <li>
                <span class="tutorial-index">01</span>
                <div class="tutorial-details">
                    <strong>Title - author</strong>
                    <a href="https://www.youtube.com/watch?v=example" target="_blank" rel="noopener">https://www.youtube.com/watch?v=example</a>
                </div>
            </li>
            <li>
                <span class="tutorial-index">02</span>
                <div class="tutorial-details">
                    <strong>Title - author</strong>
                    <a href="https://www.youtube.com/watch?v=example" target="_blank" rel="noopener">https://www.youtube.com/watch?v=example</a>
                </div>
            </li>
            <li>
                <span class="tutorial-index">03</span>
                <div class="tutorial-details">
                    <strong>Title - author</strong>
                    <a href="https://www.youtube.com/watch?v=example" target="_blank" rel="noopener">https://www.youtube.com/watch?v=example</a>
                </div>
            </li>
        </ol>
    </article>

    <article class="info-card">
        <h2>Before you start</h2>
        <p>Feel comfortable gliding forward, turning and stopping before trying the cone line.</p>

        <h2>Keep in mind</h2>
        <ul class="tips-list">
            <li>Look ahead, not down at your skates.</li>
            <li>Keep your knees soft and your upper body calm.</li>
            <li>Practice both crossing directions.</li>
            <li>Wear protective gear and start slowly.</li>
        </ul>
    </article>
</section>

<section class="related-tricks-section">
    <div class="related-intro">
        <p class="eyebrow-text">Keep rolling</p>
        <h2>Explore more tricks</h2>
        <p>Find your next challenge in the trick dictionary and keep building your own skating repertoire.</p>
        <a href="/tricks" class="back-link">← Browse all tricks</a>
    </div>

    <div class="related-cards">
        <article class="trick-card">
            <figure class="card-thumbnail">
                <img src="/assets/images/tricks/powerslide.jpg" alt="Powerslide trick">
                <button type="button" class="bookmark-btn" aria-label="Save trick">🔖</button>
            </figure>
            <div class="card-body">
                <div class="card-meta">
                    <span class="tag-discipline">FREERIDE</span>
                    <span class="tag-difficulty">Intermediate</span>
                </div>
                <h3><a href="/tricks/2">Powerslide</a></h3>
                <div class="card-footer">
                    <span class="status-pill status-learning">Learning</span>
                    <span class="expand-arrow">⌄</span>
                </div>
            </div>
        </article>

        <article class="trick-card">
            <figure class="card-thumbnail">
                <img src="/assets/images/tricks/soul-grind.jpg" alt="Soul grind trick">
                <button type="button" class="bookmark-btn" aria-label="Save trick">🔖</button>
            </figure>
            <div class="card-body">
                <div class="card-meta">
                    <span class="tag-discipline">AGGRESSIVE</span>
                    <span class="tag-difficulty">Intermediate</span>
                </div>
                <h3><a href="/tricks/3">Soul grind</a></h3>
                <div class="card-footer">
                    <span class="status-pill status-unlearned">Unlearned</span>
                    <span class="expand-arrow">⌄</span>
                </div>
            </div>
        </article>
    </div>
</section>

<?php require_once __DIR__ . '/layout/footer.php'; ?>