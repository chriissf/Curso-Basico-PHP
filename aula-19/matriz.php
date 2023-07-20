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
        <!--em php uma matriz é criada dentro do vetor-->
        <pre>
            <table><tr><td>
        <?php
        $m = array(
            array(3, 5),
            array(4, 6),
            array(5, 10),
            array(6, 7)
        );
        $m[0][1] = $m[3][1];
        print_r($m);



        ?>
        </table>
        </pre>
    </div>
</body>

</html>