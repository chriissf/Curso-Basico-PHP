<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>
    <div>
        <?php

        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $o = isset($_GET["oper"]) ? $_GET["oper"] : 2;
        switch ($o) {
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = $n ** 3;
                break;
            case 3:
                $r = sqrt($n);
                break;
        };

        echo "A operção escolhida: $o <br/> Resultado:" .  number_format($r, 2);

        ?>
        <a class="botao" href="exercicio1.html">Voltar</a>
    </div>

</body>

</html>