<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condição Para</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <!--Repetição com variáveis de controle -->
    <div>
        <h1>Tabuada condição For </h1>
        <?php

        $n = isset($_GET["num"]) ? $_GET["num"] : 1;

        for ($c = 1; $c <= 10; $c++) {
            $r = $n * $c;
            echo "<p>$n x $c = $r</p>";
        }

        ?>
        <p><a href="exer2.php" class="botao">Voltar</a></p>
    </div>
</body>

</html>