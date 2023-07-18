<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condição Para</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>
        <?php
        function somar()
        {
            $p = func_get_args();
            $tot = func_num_args();
            $s = 0;

            for ($i = 0; $i < $tot; $i++) {
                $s = $s + $p[$i];
            }
            return $s;
        }
        $s = somar(3, 5, 8, 10, 1, 3, 50);
        echo $s;
        ?>
    </div>
</body>

</html>