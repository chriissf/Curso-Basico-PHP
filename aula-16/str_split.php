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
        //cada letra e colocar no indice do vetor
        $nome = "Maria";
        $vetor = str_split($nome);
        print_r($vetor);

        ?>
    </div>
</body>

</html>