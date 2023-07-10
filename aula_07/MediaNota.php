<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Media Nota</title>
</head>

<body>
    <div>
        <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2) / 2;
        echo "A media entre $nota1 e $nota2  é $media <br/>";

        //$sit = ($media >= 7) ? "Aprovado" : "Reprovado";

        echo "O aluno foi: " . (($media > 6) ? "Aprovado!" : "Reprovado!");

        //echo "<br/>Vc foi $sit";

        ?>
    </div>
</body>

</html>