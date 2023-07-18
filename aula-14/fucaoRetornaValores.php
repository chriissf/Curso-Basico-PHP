<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condição Para</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>

    <div>
        <?php

        function somar($num, $num1)
        {

            //$s = $num + $num1;
            return $num + $num1;
        }

        $x = 23;
        $y = -10;
        $r = ($x + $y);

        echo "A soma entre $x e $y e igual a $r";


        ?>

    </div>
</body>

</html>