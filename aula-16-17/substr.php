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
        $site = "Curso em Video";
        $sub = substr($site, 0, 5);
        print($sub);
        print(substr($site, 9, 5));



        ?>
    </div>
</body>

</html>