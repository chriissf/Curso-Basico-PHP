<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css" />
    <title>Variavel criado a partir $$ com conteudo da primeira</title>
</head>

<body>
    <div>
        <?php

        $sites = "CursoPHP";
        $$sites = "variavelCriada";


        echo "O conteudo  da variavel sites e  $sites";

        echo "<br/>A variavel criada Sites recebeu o valor $CursoPHP";



        ?>
    </div>
</body>

</html>