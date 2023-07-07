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
        $nome = 'Jorge';
        $cor = 'verde';
        $idade = 29;
        $hobby = 'jogar video game';

        //usar o . para concatenar
        echo 'Olá '. $nome . ', vi que sua cor preferida é' . $cor . ', estou vendo que você possui '. $idade . ' anos e que gosta de ' . $hobby . '.';

        //podemos usar também aspas duplas
        echo '<br>';
        echo '<br>';
        
        echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo que você possui $idade anos e que gosta de $hobby."
    ?>
</body>
</html>