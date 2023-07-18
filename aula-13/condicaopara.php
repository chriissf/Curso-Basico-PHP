<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condição Para</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<!--Repetição com variáveis de controle ja definidas-->

<body>
    <div>
        <?php
        for ($i = 1; $i <= 10; $i++) {

            echo "<p>1+: $i</br></p>";
        }
        for ($i = 10; $i >= 1; $i--) {
            echo "<p>-1:  $i </p>";
        }
        for ($i = 0; $i <= 50; $i += 5) {
            echo "<p>0 a 100 +5:  $i </p>";
        }
        for ($i = 20; $i >= 1; $i -= 2) {
            print "<p>$i  -2</p>";
        }
        ?>

    </div>
</body>

</html>