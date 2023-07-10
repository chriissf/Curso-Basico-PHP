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

        //Pre-Pos  incremento ++$atual / descremento --$atual

        $atual = $_GET["aa"];
        echo "O ano atual e $atual e o ano anterior é " . --$atual;


        ?>
    </div>
</body>

</html>