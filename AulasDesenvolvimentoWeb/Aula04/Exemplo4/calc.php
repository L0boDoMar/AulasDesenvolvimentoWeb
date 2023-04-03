<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
   <?php
   
   $number1 = floatval($_POST["number1"]);
   $number2 = floatval($_POST["number2"]);
   
   $soma = $number1 + $number2;

    echo "O valor da soma é " .$soma;

   ?>
</body>
</html>