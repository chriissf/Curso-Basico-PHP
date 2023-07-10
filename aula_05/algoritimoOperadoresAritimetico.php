<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
    <title>OperadoresAritimeticos</title>
</head>
<body>
<div>
    <?php 

        $n1=$_GET["a"];
        $n2=$_GET["b"];
        $m =($n1+$n2)/2;

        echo"<h2>Valores recebidos: $n1, $n2</h2>";


        echo"Entrada 1 =  ".$n1."<br/>Entrada 2 = ".$n2;
        echo "<br/>Soma é : ".($n1+$n2);
        echo "<br/>Subtração vale: ".($n1-$n2);
        echo "<br/>Mutiplicação vale: ".($n1*$n2);
        echo "<br/>Divisão vale: ".($n1/$n2);
        echo "<br/>Resto : ".($n1%$n2);
        echo"<br/>Media é: $m";




    ?>
</div>
</body>
</html>