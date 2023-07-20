<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>
        <pre border="1"><!--coloca em linha-->
        <?php
        $cad = array(
            "nome" => "Ana",
            "idade" => 23,
            "peso" => 70.
        );

        //adicionando mais um valor a essa estrutura
        $cad["Fuma"] = true;
        foreach ($cad as $campo => $valor) {

            echo "</br> $campo : $valor";
        }


        ?>
        </pre>
    </div>
</body>

</html>