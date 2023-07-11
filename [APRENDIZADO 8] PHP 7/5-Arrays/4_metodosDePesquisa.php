<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        /*Métodos de pesquisa: 
        in_array(): true or false para a existencia do que está sendo procurado
        array_search(): retorna o indice do valor pesquisado caso ele exista
        */
        
        $lista_carros = []; 

        $lista_carros['Volkswagen'] = [
            'Voyage', 
            'Golf', 
            'Jetta', 
            'Polo',
            'Virtus',
            'T-cross'
        ];

        $lista_carros['Volkswagen'][6] = 'Nivus';

        echo '<pre>';
        print_r($lista_carros);
        echo '</pre>';

        $existe = in_array('T-cross', $lista_carros['Volkswagen']);
        //true -> texto = 1
        //false -> texto = vazio

        if($existe) {
            echo 'Sim, o valor existe no array <br>';
        } else {
            echo 'Não, o valor não existe no array <br>';
        }

        $existeArray = array_search('Golf', $lista_carros['Volkswagen']);
    
        if($existeArray != null) {
            echo 'Sim, o valor existe dentro do array';
        } else {
            echo 'Não, o valor não existe dentro do array';
        }


    ?>  
</body>
</html>