<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        $arrayNumeros = [];

        while(count($arrayNumeros) < 6) {
            $numero = rand(1, 60);

            if(!in_array($numero, $arrayNumeros)) {
                $arrayNumeros[] = $numero;
            }
        }
        
        echo '<pre>';
            print_r($arrayNumeros);
        echo '</pre>';
    ?>  
</body>
</html>