<?php
$salario = 3.000;

if ($salario <= 1.500) {
    $novo_salario = $salario * 1.15;
} else if ($salario > 1.500 && $salario <= 3.000) {
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
        echo "O salário do funcionário é de R$ " . $salario . "<br>Seu novo salário é R$ " . $novo_salario . ".";
    ?>
    </body>
</html>