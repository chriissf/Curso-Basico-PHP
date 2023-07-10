<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Tipos</title>
</head>
<body>
    <div>
    <?php 

    /*interpreta tipo de variável automático 
    ou pode força inter/string/double/flot...
     ja caso deseja declarar booleano true=1 false=0*/


    $idade = 30;
    $nome = 'Christian';
    $endereco = 'Alameda dos flamingos 380, <br/>Cabral<br/>Contagem-Mg';

    //Aspa " " para interpretar variáveis e string
    echo "$nome tem $idade anos, <br/>Endereço:<br/>Av $endereco<br/>";
    
    //ou

    echo $nome."<br/>".$idade." anos <br/> Endereço: <br/>".$endereco."<br/>";
    ?>
    </div>
</body>
</html>