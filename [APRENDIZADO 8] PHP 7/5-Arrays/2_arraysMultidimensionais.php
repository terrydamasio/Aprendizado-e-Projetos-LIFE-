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

        $lista_compras['mercearia'] = array(
            1 => 'Arroz',
            2 =>  'Feijão', 
            3 => 'Açucar', 
            4 =>  'Café');

        $lista_compras['limpeza'] = [
            1 => 'Sabonete', 
            2 => 'Sabão em Pó', 
            3 => 'Detergente', 
            4 => 'Desinfetante'];
        
        $lista_compras['limpeza'][5] = 'Água Sanitária'; //adicionando um item no array limpeza

        echo '<pre>';
        print_r($lista_compras);
        echo '</pre>';
        
        echo '<hr>';
        echo $lista_compras['mercearia'][4]; //selecionando um item específico do array mercearia
    ?>  
</body>
</html>