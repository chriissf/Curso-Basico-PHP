<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="text-align:center" ;>Contador personalizado</title>
</head>

<body>
    <div>
        <?php

        $inicio = ($_GET["num"]) ? $_GET["num"] : 0;
        $fim = ($_GET["num2"]) ? $_GET["num2"] : 0;
        $saltar = ($_GET["i"]) ? $_GET["i"] : 0;

        while ($inicio <= $fim) {
            echo "$inicio</br>";
            $inicio += $saltar;

            if ($inicio > $fim) {
                echo " $inicio</br>";
                $inicio -= $saltar;
            }
        }




        ?>

    </div>
</body>

</html>