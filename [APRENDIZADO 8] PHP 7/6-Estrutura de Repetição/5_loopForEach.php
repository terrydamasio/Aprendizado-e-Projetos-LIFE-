<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        /* ForEach > ele para quando não existem mais arrays para serem percorridos. Sintaxe:

            foreach(array as variavel) {
                //Conteúdo executado para cada um dos elementos percorridos dentro do array 
            }
        */
        $itens = [
            'Sofá', 
            'Mesa',
            'Cadeira', 
            'Fogão',
            'Geladeira'
        ];

        echo '<pre>';
        print_r($itens);
        echo '</pre>';

        foreach($itens as $item) {
            echo "$item";
            
            if($item == 'Mesa') {
                echo ' (*Compre uma mesa e ganhe 25% de desconto)';
            }

            echo '<br>';
        }


        
    ?>  
</body>
</html>