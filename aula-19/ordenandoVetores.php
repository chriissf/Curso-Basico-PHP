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

        <pre>
           <?php

            // $v = array("B", "Z", "77", "D", "E", "F", "O", "H", "I", 10, 4, 9, 3, 15, 1);
            /*krsort indice em forma reversos
            ksort ordenação das chaves do -indices-
            arsort ordenar reverso e mater os indices
            rsort ordenar na ordem ao contrário
            sort serve para organizar vetores
            asort mecher todo elemento  associativa manter os indices*/
            $v = array(2 => 1, 4 => 20, 1 => 3, 3 => 2);
            print_r($v);
            ksort($v);
            print_r($v);
            ?>
        </table>
        </pre>
    </div>
</body>

</html>