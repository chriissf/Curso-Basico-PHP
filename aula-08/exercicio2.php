<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>FORMULARIO</title>
</head>

<body>
    <div>
        <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : ["sem sexo"];
        $idade = date("Y") - $ano - 1;
        echo "$nome é $sexo tem $idade anos ";
        ?>
        <a href="exercicio02.html">Voltar</a>
    </div>
</body>

</html>