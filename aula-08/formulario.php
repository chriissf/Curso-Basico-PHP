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
    $valor = $_GET["v"];
    echo "O valor enviado foi $valor <br/>";
    $rq = sqrt($valor);
    echo "A raiz quadrada de $valor é igual a " . number_format($rq, 2);



    ?>
    <a href="formulario.html">Voltar</a>
  </div>
</body>

</html>