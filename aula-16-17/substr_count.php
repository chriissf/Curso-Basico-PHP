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
        $frase = "Estou aprendendo PHP no Curso em video PHP Php";

        $cont = substr_count($frase, "PHP");
        print("PHP foi encontrado: $cont");




        ?>
    </div>
</body>

</html>