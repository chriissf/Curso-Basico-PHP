<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotaMedia</title>
    <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>
    <div>
        <?php
        $nota = isset($_GET["nota"]) ? $_GET["nota"] : 0;
        $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
        $media = ($nota + $nota2) / 2;
        if ($media >= 7) {
            $r = "Aprovado";
        } else if ($media >= 4 && $media < 7) {
            $r = "Recuperação";
        } else {
            $r = "Reprovado!<br/>Procure a secretaria";
        }

        echo "Sua 1º nota $nota <br/> Sua 2º nota $nota2 <br/>";
        echo "Sua media: $media <br/>Situação do aluno: $r";

        ?>

        <a href="notaMedia.html">Voltar</a>

    </div>

</body>

</html>