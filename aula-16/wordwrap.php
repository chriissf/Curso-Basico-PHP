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

        $t = "A tecnologia é a linguagem universal do futuro, tecendo conexões digitais entre mentes brilhantes, transformando ideias em inovações e permitindo que o mundo se reinvente a cada linha de código.";
        //quebra de linha no texto na variavel,
        $r = wordwrap($t, 50, "</br>\n", false);
        echo $r;

        ?>
    </div>
</body>

</html>