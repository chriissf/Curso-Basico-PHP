<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Strings</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>
        <?php

        $vetor[0] = "curso";
        $vetor[1] = "php";
        $vetor[2] = "Basico";
        //join()mesma função do implode
        $texto = implode("#", $vetor);
        print_r($texto);

        ?>
    </div>
</body>

</html>