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
        $frase = "Eu vou estudar php agora";
        $cont = str_word_count($frase, 0); /*caso use 1 gera vetor da palavra ,
        e caso 2 caso quer criar vetor mantendo o posicionamento  de cada palavra dentro da  string */
        echo $cont;


        ?>
    </div>
</body>

</html>