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

        $frase = "Estou aprendendo Matematica ,é Matematica legal";
        $novaFrase = str_ireplace("matematica", "PHP", $frase);
        print($novaFrase);



        ?>
    </div>
</body>

</html>