<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css">

</head>

<body>
    <div>
        <?php


        //criando variavel a partir de outra variavel Dinamicamente
        $i = 1;
        while ($i <= 5) {
            $v = "num" . $i;
            $url = "v" . $i;
            $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
            $i++;
        }

        /*echo "$num1 $num2 $num3 $num4 $num5";  */


        //print da variavel criada $$v num1 num2 num3 num4 num5
        $i = 1;
        while ($i <= 5) {
            $v = "num" . $i;
            echo "Valor $i  : " . $$v . "</br>";
            $i++;
        }


        ?>

    </div>

</body>

</html>