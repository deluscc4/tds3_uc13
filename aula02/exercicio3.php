<?php
$salario = 1000;

if ($salario <= 1500) {
    $novo_salario = $salario * 1.15;
} else if ($salario > 1500 && $salario <= 3000) {
    $novo_salario = $salario * 1.10;
} else {
    $novo_salario = $salario * 1.05;
}
?>

<html>
    <head>
        <title>Exercício 3</title>
    </head>
    <body>
    <?php
        echo "O salário do funcionário é de R$ " . number_format($salario, 2, ',', '.') . "<br>Seu novo salário é R$ " . number_format($novo_salario, 2, ',', '.') . ".";
    ?>
    </body>
</html>