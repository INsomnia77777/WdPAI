<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'BladeCrew') ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header class="main-header">
        <div class="header-banner-bg">
            <img src="/assets/images/nav-banner.jpg" alt="" class="banner-img">
        </div>

        <div class="header-container">
            <a href="/" class="brand-logo">BladeCrew</a>

            <nav class="main-nav" aria-label="Main navigation">
                <a href="/" class="nav-btn">Homepage</a>
                <a href="/tricks" class="nav-btn">Tricks</a>
                <a href="/spotfinder" class="nav-btn">SpotFinder</a>
                <a href="/groups" class="nav-btn">Groups</a>
            </nav>

            <div class="header-actions">
                <button type="button" class="icon-btn" aria-label="Settings">
                    <img src="/assets/icons/settings.svg" alt="Settings">
                </button>
                <button type="button" class="icon-btn" aria-label="Notifications">
                    <img src="/assets/icons/bell.svg" alt="Notifications">
                </button>
                <div class="user-menu">
                    <span class="user-avatar">AK</span>
                    <button type="button" class="dropdown-toggle" aria-label="User menu">▾</button>
                </div>
            </div>
        </div>
    </header>

    <main class="page-content">