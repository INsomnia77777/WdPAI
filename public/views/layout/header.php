<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'BladeCrew') ?></title>
    <!-- Tutaj w przyszłości podepniemy plik CSS -->
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <span class="icon">🛼</span> <strong>BladeCrew</strong>
        </div>
        <nav>
            <a href="/">Homepage</a>
            <a href="/tricks">Tricks</a>
            <a href="/spotfinder">SpotFinder</a>
            <a href="/groups">Groups</a>
        </nav>
        <div class="user-profile">
            <span>AK</span>
        </div>
    </header>
    <main>