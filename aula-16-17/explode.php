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
        /*separa por espaço dentro de um vetor ,
        o espaço eu determino depois de que guarda dentro do vetor*/
        $site = "Curso em php";
        $vetor = explode(" ", $site);
        print_r($vetor);


        ?>
    </div>
</body>

</html>