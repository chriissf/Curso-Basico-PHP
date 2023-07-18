<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>função PHP INCLUDE/REQUIRE</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>

    <div>
        <?php
        //usar caso o arquivo não for encontrado para o script(erro)
        require  "funcao.php";
        //include_once caso deseja usar a mesma função no mesmo pagina
        //require_once  \\
        // caso não encontrar o arquivo continua carregando o restante do codigo
        // include "funcao.php";
        echo "<h1>Testando novas funções </h1>";
        ola();
        mostrarValor(4);
        echo " <h2>Finalizando programa aqui...</h2>"
        ?>
    </div>
</body>

</html>