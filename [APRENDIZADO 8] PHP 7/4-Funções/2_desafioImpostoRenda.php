<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        function calcularImpostoRenda($salario) {
            if($salario <= 1903.98) {
                echo 'Isento';
            } else if($salario >= 1903.99 && $salario <= 2826.65) {
                echo $salario * 7.5/100;
            } else if($salario >= 2826.66 && $salario <= 3751.05) {
                echo $salario * 15/100;
            } else if($salario >= 3751.06 && $salario <= 4664.68) {
                echo $salario * 22.5/100;
            } else {
                echo $salario * 27.5/100;
            }
        }

        echo calcularImpostoRenda(5000);
    ?>
</body>
</html>