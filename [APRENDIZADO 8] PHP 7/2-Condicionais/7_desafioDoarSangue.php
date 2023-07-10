<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        $idade = 19; 
        $peso = 50; 

        if($idade >= 16 && $idade <= 69 && $peso >= 50) {
            echo 'Atende aos requisitos.';
        } else {
            echo 'Não atende aos requisitos';
        }
    ?>
</body>
</html>