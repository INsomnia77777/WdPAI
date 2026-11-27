<?php require_once __DIR__ . '/layout/header.php'; ?>

<section class="page-banner">
    <p class="eyebrow-text">Find new tricks for yourself to learn</p>
    <h1>Tricks</h1>
    <p class="subtitle-text">Get better 1% everyday</p>
</section>

<section class="toolbar-row">
    <form class="search-form" action="/tricks" method="GET">
        <input type="search" name="q" placeholder="Search tricks, techniques, or disciplines..." aria-label="Search tricks">
    </form>
    <button type="button" class="sort-btn">Recommended</button>
</section>

<div class="catalog-layout">
    <aside class="filters-sidebar">
        <button type="button" class="primary-dark-btn">My progress</button>

        <h2>Explore tricks</h2>

        <ul class="discipline-filter-list">
            <li><button type="button" class="active">All disciplines <span>128</span></button></li>
            <li><button type="button">Slalom <span>54</span></button></li>
            <li><button type="button">Freeride <span>42</span></button></li>
            <li><button type="button">Aggressive <span>32</span></button></li>
        </ul>

        <fieldset class="filter-group">
            <legend>MY MASTERY</legend>
            <label><input type="checkbox" name="mastery[]" value="unlearned"> Unlearned</label>
            <label><input type="checkbox" name="mastery[]" value="learning"> Learning</label>
            <label><input type="checkbox" name="mastery[]" value="mastered"> Mastered</label>
        </fieldset>

        <fieldset class="filter-group">
            <legend>DIFFICULTY</legend>
            <label><input type="checkbox" name="difficulty[]" value="beginner"> Beginner</label>
            <label><input type="checkbox" name="difficulty[]" value="intermediate"> Intermediate</label>
            <label><input type="checkbox" name="difficulty[]" value="advanced"> Advanced</label>
        </fieldset>
    </aside>

    <section class="tricks-grid-wrapper">
        <div class="tricks-grid">
            <article class="trick-card">
                <figure class="card-thumbnail">
                    <img src="/assets/images/tricks/cross.jpg" alt="Cross trick">
                    <button type="button" class="bookmark-btn" aria-label="Save trick">🔖</button>
                </figure>
                <div class="card-body">
                    <div class="card-meta">
                        <span class="tag-discipline">SLALOM</span>
                        <span class="tag-difficulty">Beginner</span>
                    </div>
                    <h3><a href="/tricks/1">Cross</a></h3>
                    <div class="card-footer">
                        <span class="status-pill status-mastered">Mastered</span>
                        <span class="expand-arrow">⌄</span>
                    </div>
                </div>
            </article>

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

            <article class="trick-card">
                <figure class="card-thumbnail">
                    <img src="/assets/images/tricks/cross.jpg" alt="Cross trick">
                    <button type="button" class="bookmark-btn" aria-label="Save trick">🔖</button>
                </figure>
                <div class="card-body">
                    <div class="card-meta">
                        <span class="tag-discipline">SLALOM</span>
                        <span class="tag-difficulty">Beginner</span>
                    </div>
                    <h3><a href="/tricks/1">Cross</a></h3>
                    <div class="card-footer">
                        <span class="status-pill status-mastered">Mastered</span>
                        <span class="expand-arrow">⌄</span>
                    </div>
                </div>
            </article>

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

        <footer class="pagination-bar">
            <span>Showing 1–6 of 128 tricks</span>
            <nav class="pagination-controls" aria-label="Pagination">
                <a href="?page=1" class="page-num active">1</a>
                <a href="?page=2" class="page-num">2</a>
                <a href="?page=3" class="page-num">3</a>
                <a href="?page=2" class="page-next">Next →</a>
            </nav>
        </footer>
    </section>
</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>