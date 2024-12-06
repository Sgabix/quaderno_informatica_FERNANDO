<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schemi di Triangoli</title>
    <style>
        body {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <h1>Schemi di Triangoli</h1>

    <?php
    // Triangolo (a)
    echo "<p>(a)</p>";
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }

    echo '<br>'; // Spazio tra gli schemi

    // Triangolo (b)
    echo "<p>(b)</p>";
    for ($i = 10; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }

    echo '<br>'; // Spazio tra gli schemi

    // Triangolo (c)
    echo "<p>(c)</p>";
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= (10 - $i); $j++) {
            echo '&nbsp;';
        }
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }

    echo '<br>'; // Spazio tra gli schemi

    // Triangolo (d)
    echo "<p>(d)</p>";
    for ($i = 10; $i >= 1; $i--) {
        for ($j = 1; $j <= (10 - $i); $j++) {
            echo '&nbsp;';
        }
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }
    ?>
    <a href="Index.html">Home</a>
</body>
</html>
