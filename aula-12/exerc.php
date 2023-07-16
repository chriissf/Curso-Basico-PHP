<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem personalizada</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>
        <?php
        $n1 = 100;
        $s = 2;
        do {
            echo "$n1 </br>";
            $n1 -= $s;
        } while ($n1 >= 0);

        ?>

    </div>
</body>

</html>