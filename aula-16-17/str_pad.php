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
        $nome = "Christian";
        /* STR_PAD_CENTER DEIXA A STRING NO CENTRO,
        
           STR_PAD_LEFT ESPAÇO EM BRANCO A ESQUERDA*/
        $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
        print("Eu sou $novo e sou Lindo!");

        ?>
    </div>
</body>

</html>