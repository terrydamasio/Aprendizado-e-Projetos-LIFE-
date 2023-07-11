<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  

        $num = 1;
        //Operadores de comparação / lógicos
        echo '-- Início do loop -- <br>';
        while(true) { //condição 
            echo "$num <br>";
            
            $num++; //critério de parada

            if($num > 10) {
                break; //força a interrupção do laço
            }
        }
        echo '-- Fim do loop --';

        //continue / break tem que estar depois do critério de parada para não causar bugs

    ?>  
</body>
</html>