<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condição Para</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>

    <div>
        <?php

        function somar($a, $b)
        {

            $s = $a + $b;

            echo "<p>$a + $b = $s</p>";
        }

        somar(5, 10);
        somar(8, 10);

        $y = 10;
        $x = 10;
        somar($x, $y);
        ?>
    </div>
</body>

</html>