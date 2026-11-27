<?php require_once __DIR__ . '/layout/header.php'; ?>

<section class="page-banner banner-with-action">
    <div>
        <p class="eyebrow-text">Learning from each other is the greatest fun</p>
        <h1>Your crew, in motion.</h1>
        <p class="subtitle-text">A little structure. A lot of progress. Welcome back, Alex.</p>
    </div>
    <button type="button" class="accent-btn">Schedule session</button>
</section>

<section class="kpi-stats-row">
    <article class="kpi-card">
        <span class="kpi-icon">👥</span>
        <div>
            <strong>3 private groups</strong>
            <p>28 students</p>
        </div>
    </article>
    <article class="kpi-card">
        <span class="kpi-icon">📅</span>
        <div>
            <strong>4 sessions this week</strong>
            <p>Next up: today, 18:00</p>
        </div>
    </article>
    <article class="kpi-card">
        <span class="kpi-icon">✅</span>
        <div>
            <strong>3 progress approvals</strong>
            <p>Ready for your review</p>
        </div>
    </article>
</section>

<div class="workspace-three-columns">
    <aside class="groups-sidebar">
        <div class="sidebar-header">
            <h2>Your groups</h2>
            <button type="button" class="add-icon-btn" aria-label="Create group">+</button>
        </div>

        <ul class="group-list">
            <li class="group-item active">
                <span class="group-initials">SF</span>
                <div class="group-meta">
                    <strong>Slalom foundations</strong>
                    <span>12 students · Private</span>
                </div>
                <span class="unread-badge">4 new</span>
            </li>
            <li class="group-item">
                <span class="group-initials">FF</span>
                <div class="group-meta">
                    <strong>Friday freeride</strong>
                    <span>10 students · Private</span>
                </div>
                <span class="unread-badge">2 new</span>
            </li>
            <li class="group-item">
                <span class="group-initials">PP</span>
                <div class="group-meta">
                    <strong>Park progression</strong>
                    <span>6 students · Private</span>
                </div>
            </li>
        </ul>

        <button type="button" class="full-width-btn">+ Create private group</button>

        <section class="upcoming-schedule">
            <h3>COMING UP THIS WEEK</h3>
            <ul class="schedule-list">
                <li>
                    <span class="schedule-date">WED 04</span>
                    <div>
                        <strong>City flow session</strong>
                        <span>18:30 · Friday freeride</span>
                    </div>
                </li>
                <li>
                    <span class="schedule-date">SAT 07</span>
                    <div>
                        <strong>First grinds</strong>
                        <span>10:00 · Park progression</span>
                    </div>
                </li>
            </ul>
            <a href="/groups/schedule" class="text-link">View full schedule →</a>
        </section>
    </aside>

    <section class="group-chat-panel">
        <header class="chat-header">
            <div>
                <h2>Slalom foundations</h2>
                <p>Private group · 12 students · 8 online</p>
            </div>
            <button type="button" class="secondary-btn">Invite</button>
        </header>

        <nav class="chat-tabs" aria-label="Group sections">
            <button type="button" class="tab active">Chat 4</button>
            <button type="button" class="tab">Students</button>
            <button type="button" class="tab">Sessions</button>
            <button type="button" class="tab">Shared files</button>
        </nav>

        <div class="pinned-banner">
            Pinned: Bring your cones &amp; protective gear to every session.
        </div>

        <article class="next-session-highlight">
            <div class="session-date-box">
                <span>NOV</span>
                <strong>03</strong>
            </div>
            <div class="session-details">
                <span class="session-label">NEXT SESSION / TODAY</span>
                <h3>Find your flow: cross &amp; Nelson</h3>
                <p>18:00–19:30 · Place de la Bastille</p>
                <span class="rsvp-summary">9 going · 2 maybe · 1 awaiting reply</span>
            </div>
            <button type="button" class="manage-link">Manage session</button>
        </article>

        <div class="chat-messages">
            <p class="date-separator">TODAY, NOVEMBER 3</p>

            <article class="chat-message">
                <span class="msg-avatar">AK</span>
                <div class="msg-content">
                    <header>
                        <strong>Alex Kim</strong>
                        <span class="role-badge">INSTRUCTOR</span>
                        <time>10:24</time>
                    </header>
                    <p>Crew! Tonight we're linking the cross into a Nelson. Come warmed up — we'll start with a few balance drills. 🛼</p>
                </div>
            </article>

            <article class="chat-message">
                <span class="msg-avatar">MC</span>
                <div class="msg-content">
                    <header>
                        <strong>Maya Chen</strong>
                        <time>10:31</time>
                    </header>
                    <p>Can't wait! Just uploaded my cross video for review. Finally got a clean run through all 10 cones 🙌</p>
                </div>
            </article>

            <article class="chat-message">
                <span class="msg-avatar">LM</span>
                <div class="msg-content">
                    <header>
                        <strong>Leo Martin</strong>
                        <time>10:34</time>
                    </header>
                    <p>Nice one Maya! I'll bring the extra cones tonight.</p>
                </div>
            </article>

            <p class="typing-indicator">Sofia is typing</p>
        </div>

        <form class="chat-input-form" action="/groups/1/messages" method="POST">
            <button type="button" class="attach-btn" aria-label="Attach file">📎</button>
            <input type="text" name="message" placeholder="Message Slalom foundations..." aria-label="Message">
            <button type="submit" class="send-btn" aria-label="Send message">+</button>
        </form>
        <p class="privacy-note">Only members of this private group can see these messages.</p>
    </section>

    <aside class="approvals-sidebar">
        <section class="approvals-section">
            <div class="sidebar-header">
                <h2>Progress approvals</h2>
                <span>3 pending</span>
            </div>
            <p class="sidebar-subtext">A new milestone deserves a second pair of eyes. Review their clips and make it official.</p>

            <article class="approval-card">
                <header>
                    <span class="msg-avatar">MC</span>
                    <div>
                        <strong>Maya Chen</strong>
                        <span>Cross · submitted today</span>
                    </div>
                </header>
                <div class="approval-media-row">
                    <figure class="video-thumb">
                        <img src="/assets/images/submissions/maya-cross.jpg" alt="Maya Chen Cross submission">
                    </figure>
                    <div>
                        <span class="transition-label">Learning → Mastered</span>
                        <a href="#video-1">Watch video · 0:18 ↗</a>
                    </div>
                </div>
                <div class="approval-actions">
                    <button type="button" class="accent-btn">✓ Approve</button>
                    <button type="button" class="secondary-btn">Give feedback</button>
                </div>
            </article>

            <article class="approval-card">
                <header>
                    <span class="msg-avatar">SR</span>
                    <div>
                        <strong>Sofia Rivera</strong>
                        <span>Nelson · submitted today</span>
                    </div>
                </header>
                <div class="approval-media-row">
                    <figure class="video-thumb">
                        <img src="/assets/images/submissions/sofia-nelson.jpg" alt="Sofia Rivera Nelson submission">
                    </figure>
                    <div>
                        <span class="transition-label">Learning → Mastered</span>
                        <a href="#video-2">Watch video · 0:18 ↗</a>
                    </div>
                </div>
                <div class="approval-actions">
                    <button type="button" class="accent-btn">✓ Approve</button>
                    <button type="button" class="secondary-btn">Give feedback</button>
                </div>
            </article>

            <a href="/groups/approvals" class="text-link">View all 3 submissions →</a>
        </section>

        <section class="crew-progression">
            <div class="sidebar-header">
                <h2>Crew progression</h2>
                <span>12 students</span>
            </div>

            <div class="student-progress-item">
                <div class="student-row">
                    <span class="msg-avatar">MC</span>
                    <strong>Maya Chen</strong>
                    <span>8 / 12 mastered</span>
                </div>
                <progress value="8" max="12">8/12</progress>
            </div>

            <div class="student-progress-item">
                <div class="student-row">
                    <span class="msg-avatar">LM</span>
                    <strong>Leo Martin</strong>
                    <span>6 / 12 mastered</span>
                </div>
                <progress value="6" max="12">6/12</progress>
            </div>

            <div class="student-progress-item">
                <div class="student-row">
                    <span class="msg-avatar">SR</span>
                    <strong>Sofia Rivera</strong>
                    <span>5 / 12 mastered</span>
                </div>
                <progress value="5" max="12">5/12</progress>
            </div>

            <a href="/groups/progression" class="text-link">Open student progress →</a>
        </section>
    </aside>
</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>