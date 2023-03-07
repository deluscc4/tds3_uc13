<?php
    $nota1 = 70.5;
    $nota2 = 80;
    $nota3 = 91;
    $nota4 = 85.5;
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if ($media >= 70) {
        $resultado = "aprovado!";
    } else if ($media >= 50 && $media < 70) {
        $resultado = "em recuperação.";
    } else {
        $resultado = "reprovado.";
    }
?>

<html>
    <head>
        <title>Exercício 2</title>
    </head>
    <body>
    <?php
        echo "O aluno está " . $resultado . "<br>Sua média foi " . $media . ".";
    ?>
    </body>
</html>
