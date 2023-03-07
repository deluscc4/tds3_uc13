<?php
    $valor_ingresso = 55.00;
    $idade = 3;

    if ($idade < 6 || $idade > 65) {
        $resultado = "Pessoa não paga ingresso.";
    } else if ($idade >= 6 && $idade <= 10) {
        $resultado = "Ingresso de R$ " . $valor_ingresso . " reais custa a metade do preço: R$ " . $valor_ingresso / 2 . ".";
    } else {
        $resultado = "Valor do ingresso é integral: R$ " . $valor_ingresso . ".";
    }
?>

<html>
    <head>
        <title>Exercício 4</title>
    </head>
    <body>
    <?php
        echo $resultado;
    ?>
    </body>
</html>