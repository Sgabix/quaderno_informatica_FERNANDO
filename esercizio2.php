<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saluto</title>
</head>
<body>
    <?php
    // Variabile con il nome
    $nome = "Paolo";

    // Ottieni l'ora corrente
    $ora_corrente = new DateTime("now", new DateTimeZone('Europe/Rome'));
    $ora = (int) $ora_corrente->format('H');

    // Determina il saluto in base all'ora
    if ($ora >= 8 && $ora < 12) {
        $saluto = "Buongiorno";
    } elseif ($ora >= 12 && $ora < 20) {
        $saluto = "Buonasera";
    } else {
        $saluto = "Buonanotte";
    }

    // Stampa il messaggio di benvenuto
    echo "<p>$saluto $nome, benvenuto nella mia prima pagina PHP!</p>";

    // Determina il browser usato dall'utente
    $browser = $_SERVER['HTTP_USER_AGENT'];
    echo "<p>Stai usando il browser: $browser</p>";
    ?>
    <a href="Index.html">Home</a>
</body>
</html>