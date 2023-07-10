<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css" />
    <title>DescontoCompra</title>
</head>

<body>
    <div>
        <?php


        /* $preco = $_GET["P"];

        echo "O preço do produto é R$ $preco";

        $preco +=  $preco * 10 / 100;
        
        echo "<br/>O novo preço com 10% de aumento sera " . number_format($preco, 2, ",", ".");*/


        $precoD = $_GET["P"];
        $desc = $_GET["D"];

        echo "O preço do Produto é R$ $precoD ";
        $precoD -= $precoD * $desc / 100;
        echo "<br/>O novo preço ja aplicado  $desc % de desconto é : R$ " . number_format($precoD, 2, ",", ".");






        ?>
    </div>
</body>

</html>