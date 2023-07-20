<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vetor</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>

        <pre>
           <?php

            $v = array("A", "B", "C", "D", "1", "10", "G", "H", "true");
            print_r($v);
            array_push($v, "S");
            //array_pop($v);
            print_r($v);


            /* 
            tratamento especifico de pilha lifo
            adiciona mais um elemento na ultima casa array array_push($n,"p");
            destrói a ultima casa  array_pop()
*/
            ?>
        </table>
        </pre>
    </div>
</body>

</html>