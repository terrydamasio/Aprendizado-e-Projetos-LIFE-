<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        /* Operadores de Incremento e Decremento
        Pré-incremento (++$a)
        Pós-incremento ($a++)
        Pré-decremento (--$a)
        Pós-decremento ($a--)
        */

        $num1 = 10;
        $num2 = 5;
        echo '<h1> Incremento </h1>';
        echo 'O valor contido com incremento é ' . $num1++ . ' <br>';
        echo 'O valor atualizado é ' . $num1 . ' <br>';
        
        echo '<h1> Decremento </h1>';
        echo 'O valor contido com decremento é ' . $num2-- . ' <br>';
        echo 'O valor atualizado é ' . $num2 . ' <br>';
        
    ?>
</body>
</html>