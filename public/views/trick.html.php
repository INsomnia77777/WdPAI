<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($name) ?> - BladeCrew</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Strona główna</a></li>
                <li><a href="/tricks">Słownik trików</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <header>
                <h1><?= htmlspecialchars($name) ?></h1>
            </header>
            <article>
                <p><strong>ID triku:</strong> <?= htmlspecialchars((string)$id) ?></p>
                <p><strong>Poziom trudności:</strong> <?= htmlspecialchars($difficulty) ?></p>
            </article>
        </section>
    </main>
</body>
</html>