<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>range</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>
        <pre>
            <table border="1"><tr><!--coloca em linha-->
        <?php
        $c = range(5, 20, 2);
        //a cada repetição ela vai colocar um elemento do vetor c dentro do valor
        foreach ($c as $valor) {
            echo "<td>$valor";
        }

        ?>
        </table>
        </pre>
    </div>
</body>

</html>