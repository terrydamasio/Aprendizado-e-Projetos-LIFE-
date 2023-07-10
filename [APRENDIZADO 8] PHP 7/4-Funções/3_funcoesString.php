<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        /*Funções nativas para manipulação de strings 
        - strtolower($texto) > transforma os caracteres para minúsculo 
        - strtoupper($texto) > transforma os caracteres para maiúsculo
        - ucfirst($texto) > transforma o primeiro caracter para maiúsculo
        - strlen($texto) > conta a quantidade de caracteres 
        - str_replace(<procura por>, <substitui por>, $texto) > substitui uma cadeira de caracteres por outra
        - substr($texto, <posição inicial>, <qntd caracteres>) > retorna parte de uma string
        */

        $texto = 'Curso Completo de PHP';
        
        //string em lowercase
        echo strtolower($texto) . '<br>';
        //string em uppercase
        echo strtoupper($texto) . '<br>';
        //primeira letra em uppercase
        echo ucfirst($texto) . '<br>';
        //length da string
        echo strlen($texto) . '<br>';
        //replace
        echo str_replace('PHP', 'JavaScript', $texto) . '<br>';
        //recupera parte da string
        echo substr($texto, 0, 5) . '<br>';
    ?>
</body>
</html>