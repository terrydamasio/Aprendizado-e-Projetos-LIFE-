<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
       $num1 = 4;
       $num2 = 2;

       echo "A soma entre $num1 e $num2 é igual a " . ($num1 + $num2) . '<br>';
       echo "A subtração entre $num1 e $num2 é igual a " . ($num1 - $num2) . '<br>';
       echo "A multiplicação entre $num1 e $num2 é igual a " . ($num1 * $num2) . '<br>';
       echo "A divisão entre $num1 e $num2 é igual a " . ($num1 / $num2) . '<br>';
       echo "O resto entre $num1 e $num2 é igual a " . ($num1 % $num2) . '<br>';
       
       //operadores aritmeticos na atribuição
       $num1 += 2;

       echo $num1;
    ?>
</body>
</html>