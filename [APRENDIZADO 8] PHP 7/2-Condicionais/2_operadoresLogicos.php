<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <script>
        
        
    </script>
</head>
<body>
    <?php  
        /* Operadores Lógicos
        - E (And ou &&)  
        - OU (OR ou ||)
        - XOR (XOR) > Verdadeiro se apenas uma das expressões for verdadeira )(V, F)
        - Negação (!)
        */

        //OBS: () estabelece precedencia na execução do código         

        if(!(5 == 3 xor 10 > 3)) {
            echo 'verdadeiro'; 
        } else {
            echo 'falso';
        }

    ?>
</body>
</html>
