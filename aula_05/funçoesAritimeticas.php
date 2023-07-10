<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8">
    <style>
        h2 {
            font: 12px Arial;
            color: #171551;
        }
     </style>

    <title>Document</title>
</head>

<body>
    <div>
    <?php
    $v1= $_GET["x"];
    $v2= $_GET["y"];

    echo "<h2>Valores Recebidos: $v1 e $v2</h2>";  

    // .abs() Pega valor absoluto elimina - o sinal negativo
    
    echo "O valor absoluto de $v2 é ".abs($v2);

      //.pow() Potenciação 4  <sup> <sup/> =tag html para criar elevado

      echo "<br/>O valor de $v1 <sup>$v2</sup> e ".pow($v1,$v2);
    
      //.sqrt() Raiz quadrada de v1
      echo "<br/>A raiz quadrada de $v1 é ".sqrt($v1);

      // .round ()Arredonda valor  //.ceil() Arredonda cima /.floor() Arredonda baixo

      echo "<br/>O valor de $v2 arrendondado é ".round($v2);

      //.intval() valor inteiro da de um numero real variavel

        echo "<br/> A parte inteira de $v2 é ".intval($v2);

        //number

        echo "<br/>O valor de $v1 em moeda é R$".number_format($v1,2,",",".");

    ?>
    
 

</div>
</body>
</html>