<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css" />
    <title>OperadoresIncrementoDecremento</title>
</head>

<body>
    <div>
        <?php

        $Vestidos = 3;
        $item = &$Vestidos;
        $item += 5;


        echo " O valor do De qualquer vestido  $Vestidos ";
        echo " <br/>Valor Peça:  $item ";




        ?>
    </div>
</body>

</html>