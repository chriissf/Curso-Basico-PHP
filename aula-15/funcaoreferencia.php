<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcaoReferencia</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>

    <div>
        <?php

        function teste(&$x)
        {

            $x += 2;
            echo "$x</br>";
        }

        $b = 10;
        teste($b);
        echo $b;

        ?>
    </div>
</body>

</html>