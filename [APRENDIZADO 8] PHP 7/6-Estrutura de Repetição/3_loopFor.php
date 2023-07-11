<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        /* Estruturas:
        //WHILE
        while(condição) {
            ...
        }
        
        //DO WHILE
        do {}
            ...
        } while(condição);
        
        //FOR
        for(variável; condição; incremento){ ... }
        */
        
        //
        for($num = 1; true; $num++) {

            if($num >= 20) {
                break;
            }

            echo "X = $num <br>";
        }
    ?>  
</body>
</html>