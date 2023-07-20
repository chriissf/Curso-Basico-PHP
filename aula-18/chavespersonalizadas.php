<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>
        <pre><!--coloca em linha-->
        <?php
        $n = array(
            0 => 3,
            1 => 5,
            3 => 7,
            8 => 2
        );

        $n[] = "E";

        //unset destruir elemento/desalocar da posição do vetor
        unset($n[1]);
        print_r($n)



        ?>
        </pre>
    </div>
</body>

</html>