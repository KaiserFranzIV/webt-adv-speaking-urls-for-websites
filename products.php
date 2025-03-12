<?php
$name = isset($_GET['product']) ? $_GET['product'] : 'unbekannt';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produktseite</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <header>
        <h1>Produktseite</h1>
    </header>
    <nav class="navbar">
        <a href="/start">Start</a>
        <a href="/categories/elektronik">Kategorien</a>
        <a href="/contact">Kontakt</a>
    </nav>
    <div class="container content">
        <h1>Produkt: <?php echo $name; ?></h1>
        <p>Details zu deinem Produkt hier anzeigen.</p>
    </div>
    <footer>
        <p>&copy; 2025 Deine Website</p>
    </footer>
</body>
</html>
