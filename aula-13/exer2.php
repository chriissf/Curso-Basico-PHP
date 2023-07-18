<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condição for(Para) tabuada</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<!--Repetição com variáveis de controle ja definidas-->

<body>
    <div>
        <form method="GET" action="tabuada.php">

            <select name="num">
                <?php

                for ($i = 1; $i <= 10; $i++) {
                    echo "<option>$i</option>";
                }

                ?>


            </select>

            <input type="submit" value="Tabuada" class="botao" />
        </form>

    </div>
</body>

</html>