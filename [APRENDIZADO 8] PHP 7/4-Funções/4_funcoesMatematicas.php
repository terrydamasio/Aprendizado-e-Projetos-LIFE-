<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        /*Funções nativas para manipulação matematica
        - ceil($numero) > Arredonda o valor para cima 
        - floor($numero) > Arredonda o valor para baixo
        - round($numero) > Arredonda o valor com base nas casas decimais
        - rand() > Gera um valor aleatório
        - sqrt($numero) > Retorna a raiz quadrada
        */

        $num1 = 10;
        $num2 = 9.90;
        $num3 = 9.10;

        //arredonda para cima
        echo ceil($num2) . '<br>';

        //arredonda para baixo
        echo floor($num2) . '<br>';
    
        //Arredonda com base nas casas decimais
        echo round($num2) . '<br>';
        echo round($num3) . '<br>';

        //Gera um valor aletatório
        echo rand(1, 10) . '<br>';
        
        //Retorna raiz
        echo sqrt($num1);
    ?>
</body>
</html>