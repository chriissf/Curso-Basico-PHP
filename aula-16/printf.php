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
        $p = "leite";
        $pr = "4.5";
        // echo "o $p custa " . number_format($pr, 2);
        printf("</br>o %s custa R$ %.2f ", $p, $pr);

        /*
        %d valor decimal(positivo ou negativo)
        %u valor decimal sem sinal(apenas positivos)
        %f valor real
        %s string
*/

        ?>
    </div>
</body>

</html>