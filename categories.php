<?php
$category = isset($_GET['category']) ? $_GET['category'] : 'allgemein';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategorieseite</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <header>
        <h1>Kategorieseite</h1>
    </header>
    <nav class="navbar">
        <a href="/start">Start</a>
        <a href="/products/schuhe">Produkte</a>
        <a href="/contact">Kontakt</a>
    </nav>
    <div class="container content">
        <h1>Kategorie: <?php echo $category; ?></h1>
        <p>Produkte in dieser Kategorie anzeigen.</p>
    </div>
    <footer>
        <p>&copy; 2025 Deine Website</p>
    </footer>
</body>
</html>
