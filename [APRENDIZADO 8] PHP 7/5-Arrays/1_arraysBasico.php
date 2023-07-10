<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        //Arrays Básico

        //Sequenciais (numérios)
        //$lista_frutas = array('banana', 'morango', 'maça', 'uva');
        $lista_frutas = ['banana', 'morango', 'maça', 'uva'];
        $lista_frutas[] = 'Abacate';

        echo '<pre>';
        var_dump($lista_frutas); //retorna uma string 
        echo '</pre>';
         
        echo '<hr>';

        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';

        //Associativos
        $lista_frutas1 = array(
            '1' => 'banana', 
            '2' =>'morango', 
            '3' =>'maça', 
            '4' =>'uva');

        $lista_frutas1['5'] = 'Abacate';
        echo '<pre>';
        var_dump($lista_frutas1);
        echo '</pre>';
    ?>
</body>
</html>