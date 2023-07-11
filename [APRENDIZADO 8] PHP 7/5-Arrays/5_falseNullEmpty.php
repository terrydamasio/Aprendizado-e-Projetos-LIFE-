<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        /*Extra: 
        - False (true/false): tipo de variável boolean 
        - Null e Empty: valores especiais 
        */

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        //valores null
        if(is_null($funcionario1)) {
            echo 'Sim, a variável é null';
        } else {
            echo 'Não, a variável não é null';
        }

        echo '<br>';
        
        if(is_null($funcionario2)) {
            echo 'Sim, a variável é null';
        } else {
            echo 'Não, a variável não é null';
        }

        echo '<hr>';

        //valores empty. OBS: o valor empty também pode ser null, mas o null é exclusivamente null. Assim como o false pode ser empty, mas não pode ser null.
        if(empty($funcionario1)) {
            echo 'Sim, a variável está vazia';
        } else {
            echo 'Não, a variável não está vazia';
        }

        echo '<br>';
        
        if(empty($funcionario2)) {
            echo 'Sim, a variável está vazia';
        } else {
            echo 'Não, a variável não está vazia';
        }

        echo '<br>';

        if(empty($funcionario3)) {
            echo 'Sim, a variável está vazia';
        } else {
            echo 'Não, a variável não está vazia';
        }
    ?>  
</body>
</html>