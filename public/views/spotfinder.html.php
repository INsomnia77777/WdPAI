<?php require_once __DIR__ . '/layout/header.php'; ?>

<section class="page-banner banner-with-action">
    <div>
        <p class="eyebrow-text">Let's explore on skates</p>
        <h1>SpotFinder</h1>
        <p class="subtitle-text">From your neighborhood ledge to your next favorite place to roll.</p>
    </div>
    <button type="button" class="accent-btn">+ Add a spot</button>
</section>

<section class="spot-filters-bar">
    <form class="location-search" action="/spotfinder" method="GET">
        <input type="text" name="location" value="Paris, France" aria-label="Location">
    </form>

    <div class="filter-pills">
        <button type="button" class="pill active">All disciplines</button>
        <button type="button" class="pill">Slalom</button>
        <button type="button" class="pill">Freeride</button>
        <button type="button" class="pill">Aggressive</button>
        <button type="button" class="pill">☆ 4+ rating</button>
        <button type="button" class="pill">More filters</button>
    </div>

    <a href="/spotfinder/saved" class="saved-link">Saved spots</a>
</section>

<div class="spotfinder-workspace">
    <aside class="spots-list-column">
        <div class="list-header">
            <span>24 spots around Paris</span>
            <button type="button" class="sort-toggle">Nearest first ↓</button>
        </div>

        <article class="spot-list-card active">
            <figure class="spot-thumb">
                <img src="/assets/images/spots/bercy.jpg" alt="Bercy Skatepark">
            </figure>
            <div class="spot-info">
                <h3>Bercy Skatepark</h3>
                <p class="spot-address">12th arrondissement · 1.2 km</p>
                <p class="spot-rating">☆ 4.8 <span>(124 ratings)</span></p>
                <div class="spot-tags">
                    <span>Aggressive · Freeride</span>
                    <span class="status-open">Open now</span>
                </div>
            </div>
        </article>

        <article class="spot-list-card">
            <figure class="spot-thumb">
                <img src="/assets/images/spots/bastille.jpg" alt="Place de la Bastille">
            </figure>
            <div class="spot-info">
                <h3>Place de la Bastille</h3>
                <p class="spot-address">11th arrondissement · 2.4 km</p>
                <p class="spot-rating">☆ 4.6 <span>(86 ratings)</span></p>
                <div class="spot-tags">
                    <span>Slalom · Freeride</span>
                    <span class="status-open">Open now</span>
                </div>
            </div>
        </article>

        <article class="spot-list-card">
            <figure class="spot-thumb">
                <img src="/assets/images/spots/quai.jpg" alt="Quai de la Gare">
            </figure>
            <div class="spot-info">
                <h3>Quai de la Gare</h3>
                <p class="spot-address">13th arrondissement · 1.8 km</p>
                <p class="spot-rating">☆ 4.7 <span>(62 ratings)</span></p>
                <div class="spot-tags">
                    <span>Freeride · Slalom</span>
                    <span class="status-open">Open now</span>
                </div>
            </div>
        </article>

        <article class="spot-list-card">
            <figure class="spot-thumb">
                <img src="/assets/images/spots/espace.jpg" alt="Espace glisse de Paris">
            </figure>
            <div class="spot-info">
                <h3>Espace glisse de Paris</h3>
                <p class="spot-address">18th arrondissement · 6.1 km</p>
                <p class="spot-rating">☆ 4.9 <span>(203 ratings)</span></p>
                <div class="spot-tags">
                    <span>Aggressive</span>
                    <span class="status-open">Open now</span>
                </div>
            </div>
        </article>

        <div class="add-spot-prompt">
            <strong>Know a hidden gem?</strong>
            <a href="/spotfinder/new">Put your local spot on the map. →</a>
        </div>
    </aside>

    <section class="map-container">
        <div id="spotfinder-map" class="map-canvas-placeholder">
            <img src="/assets/images/map-placeholder.png" alt="Interactive spots map">
            <button type="button" class="search-area-btn">Search this area</button>
        </div>

        <article class="selected-spot-overlay">
            <figure class="overlay-cover">
                <img src="/assets/images/spots/bercy-large.jpg" alt="Bercy Skatepark">
            </figure>
            <div class="overlay-body">
                <div class="overlay-title-row">
                    <h3>Bercy Skatepark</h3>
                    <button type="button" class="bookmark-btn" aria-label="Save spot">🔖</button>
                </div>
                <p class="spot-rating">☆ 4.8 (124 ratings) · 1.2 km away</p>
                <p class="spot-description">
                    Ledges, rails, and room to roll. A local favorite under the Bercy metro line.
                </p>
                <p class="spot-attributes">Open now · Free · Outdoor · Concrete</p>
                <div class="overlay-actions">
                    <a href="/spotfinder/1" class="accent-btn">↗ View spot</a>
                    <button type="button" class="secondary-btn">☆ Rate spot</button>
                </div>
            </div>
        </article>
    </section>
</div>

<div class="spotfinder-subfooter">
    <span>Built by skaters, for skaters. 1,248 spots and counting.</span>
    <div class="view-switch">
        <button type="button" class="active">Map view</button> / <button type="button">List view</button>
    </div>
</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>