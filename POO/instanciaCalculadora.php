<?php
    require 'calculadora.php';
    $numero1 = 10;
    $numero2 = 20;
    $calcular = new Calculadora($numero1 , $numero2);
    $calcular -> SomaNumeros();
    $calcular -> SubNumeros();
    $calcular -> DivNumeros();
    $calcular -> MultNumeros();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>