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

        $nome = "  jose  da  silva  ";
        //echo (strlen($nome));

        $novo = trim($nome);

        //ltrim() mater espaço branco no final
        //rtrim() mater espaço branco no inicio

        echo "($novo)</br>";
        echo (strlen($novo));

        ?>
    </div>
</body>

</html>