<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplos cases</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>
        <?php

        $op = assert($_GET["dia"]) ? $_GET["dia"] : 0;
        switch ($op) {

            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                echo "Hoje tem aula";
                break;
            case 6:
            case 7:
                echo "Hoje não tem aula!";
                break;
            default:
                echo "Dia da semana invalido!";
        }

        ?>

    </div>
</body>

</html>