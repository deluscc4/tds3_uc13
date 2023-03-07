<?php
$num1 = 2;
$num2 = 6;
$soma = $num1 + $num2;

if ($soma > 20) {
    $resultado = $soma + 8;
} else if ($soma <= 20) {
    $resultado = $soma - 5;
}
?>

<html>
    <head>
        <title>Exercício 1</title>
    </head>
    <body>
    <?php
        echo "O resultado é " . $resultado;
    ?>
    </body>
</html>
