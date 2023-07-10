<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores Relacionais</title>
</head>

<body>
    <div>
        <?php
        // entrada de valor pela url servidor local http://localhost/Php_basico/aula_07/igualIgual.php?a=10&b=5&op=n
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];

        echo "O valores passados fora $n1 e $n2 <br/>";

        //tipo = s faça (true) $n1 + $n2 se não (false)$n1 * $n2;

        $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;

        echo "O resultado é $r ";

        ?>
    </div>
</body>

</html>