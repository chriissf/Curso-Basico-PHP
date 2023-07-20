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
        //encontrar posição da string como foi passada
        $frase = "Estou aprendendo PHP ";

        $pos = strpos($frase, "PHP");
        echo "STRING FOI ENCONTRADA NA POSIÇÃO $pos";

        $frase = "Estou aprendendo PHP ";
        //pega posição da string tanto em maisculo quanto em minusculo
        $pos = stripos($frase, "php");
        echo " </br>STRING FOI ENCONTRADA NA POSIÇÃO $pos";


        ?>
    </div>
</body>

</html>