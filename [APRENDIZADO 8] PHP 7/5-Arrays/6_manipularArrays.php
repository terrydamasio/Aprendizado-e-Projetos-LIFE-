<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        /*Funções nativas para manipular arrays:
        - is_array(array) > verifica se o parâmetro é um array;
        - array_keys(array) > retorna todas as chaves de um array;
        - sort(array) > ordena em ordem alfabética um array e reajusta seus indices;
        - asort(array) > ordena um array preservando seus indices;
        - count(array) > conta a quantidade de elementos de um array;
        - array_merge(array) > funde um ou mais arrays;
        - explode(array) > Divide uma string baseada em um delimitador;
        - implode(array) > Junta elementos de um array em uma string;
        */

        //is_array
        $array = ['Carro', 'Moto']; 

        $retorno = is_array($array);

        if($retorno) {
            echo 'Sim, é um array';
        } else {
            echo 'Não, não é um array';
        }

        echo '<hr>';

        //array_keys
        $array1 = [1 => 'a', 2 => 'b', 3 => 'c'];

        $retorno1 = array_keys($array1);
        echo '<pre>';
            print_r($retorno1);
        echo '</pre>';

        echo '<hr>';

        //sort() e asort()
        $array2 = ['Carro', 'Moto', 'Bicicleta', 'Ônibus', 'Scooter']; 
        echo '<pre>';
            print_r($array2);
        echo '</pre>';

        sort($array2); //retorno true or false
        echo '<pre>';
            print_r($array2);
        echo '</pre>';

        echo '<hr>';

        //count()
        $array3 = ['Carro', 'Moto', 'Bicicleta', 'Ônibus', 'Scooter']; 
        echo '<pre>';
            print_r($array3);
            echo count($array3);
        echo '</pre>';

        echo '<hr>';

        //array_merge()
        $array4 = ['Carro', 'Ônibus'];
        $array5 = ['Moto', 'Bike'];
        
        $novo_array = array_merge($array4, $array5);
        echo '<pre>';
            print_r($novo_array);
        echo '</pre>';

        echo '<hr>';

        //explode()
        $explode = '26/04/2023';
        $array_retorno = explode('/', $explode);
        echo '<pre>';
            echo $explode;
            print_r($array_retorno);
        echo '</pre>';

        echo '<hr>';

        //implode()
        $implode = ['a', 'b', 'x', 'y'];
        $string_retorno = implode(',', $implode);

        echo $string_retorno;
    ?>  
</body>
</html>