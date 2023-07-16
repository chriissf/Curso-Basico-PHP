<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="_css/estilo.css">

</head>

<body>
    <div>
        <?php

        $t = isset($_GET["t"]) ? $_GET["t"] : 1;
        $c = 1;
        echo "<h1>Tabuada de : $t </h1>";
        do {

            $r = $t * $c;
            echo "<h2> $t x $c = $r </h2>";
            $c++;
        } while ($c <= 10)




        ?>
        <p><a href="fatorial.html" class="botao">Voltar</a></p>
    </div>
</body>

</html>