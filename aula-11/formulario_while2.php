<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios while</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>

        <form method="get" action="while2.php">
            <?php

            //criando formulario Dinamicamente
            $c = 1;
            while ($c <= 5) {
                echo " Valor $c <input type='number'name='v$c' max='100' min='0' value='v1' required='' /></br>";
                $c++;
            }

            ?>


            <input type="submit" value="Enviar" class="botao" />

        </form>





    </div>
</body>

</html>