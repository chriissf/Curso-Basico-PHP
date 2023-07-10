<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>eleições/operadores logico && -|| -xor </title>
</head>

<body>
    <div>
        <?php
        $ano = $_GET["ano"];
        $idade = 2023 - $ano;

        echo "Quem nasceu em $ano tem idade de $idade anos<br/>";
        echo "Voto: " . (($idade >= 18 && $idade < 65) ? "Obrigatorio!" : "Não Obrigatorio!");







        ?>
    </div>
</body>

</html>