<?php
    $ano = 2005;

    if(($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 4 == 0 && $ano % 100 == 0 && $ano % 400 == 0)){
        $resultado = "O ano é bissexto.";
    } else {
        $resultado = "O ano não é bissexto.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <?php
    echo $resultado;
    ?>
</body>
</html>