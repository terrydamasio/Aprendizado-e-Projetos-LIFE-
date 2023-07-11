<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        //Arrays Multidimensionais: são arrays dentro de arrays

        $lista_compras = [];

        $lista_compras['Carnes'] = [
            1 => 'Picanha',
            2 => 'Maminha', 
            3 => 'Charque', 
            4 => 'Carne de Sol'];
        
        
        echo '<pre>';
        print_r($lista_compras);
        echo '</pre>';
    ?>  
</body>
</html>