<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella Pitagorica</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            width: 30px;
            height: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Tabella Pitagorica</h1>
    <table>
        <?php
        $size = 10; // Dimensione della tabella
        for ($i = 1; $i <= $size; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $size; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <a href="Index.html">Home</a>
</body>
</html>