<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css" <title>Dirigir</title>

</head>

<body>
    <div>
        <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : [" Nome não informado!"];
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
        $idade = date("Y") - $ano - 1;
        if ($idade >= 18 && $idade <= 65) {
            echo "Olá $nome você tem $idade anos! <br/>Voto obrigatorio e maior idade para dirigir!";
        } else if (($idade < 18 && $idade >= 16) || ($idade > 65)) {
            echo "Olá $nome você não é obrigado(a) a votar,sua idade é $idade anos";
        } else {
            echo "Olá $nome você não pode votar,idade minima 16 anos!<br/>Sua idade é: $idade";
        }
        ?>
        <di>
            <a href="if-else.html">Voltar</a>
        </di>
    </div>

</body>

</html>