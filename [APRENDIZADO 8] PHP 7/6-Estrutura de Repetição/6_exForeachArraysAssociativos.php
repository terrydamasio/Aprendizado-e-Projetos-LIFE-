<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        $funcionarios = [
            ['Nome' => 'João', 'Salario' => 1500, 'Data Nascimento' => '05/09/2003'],
            ['Nome' => 'Maria', 'Salario' => 4500, 'Data Nascimento' => '05/09/2003'],
            ['Nome' => 'Julia', 'Salario' => 2200, 'Data Nascimento' => '05/09/2003']
        ];
        
        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';
         
        //incluir uma variável de índice separado por um token (=>) entre o array e o valor que queremos percorrer
        foreach($funcionarios as $idx => $funcionario) {
            
            //OBS: Cuidado com a sobreposição de variável 
            foreach($funcionario as $idx2 => $valor) {
                echo "$idx2 - $valor <br>";
            }
            echo '<hr>';
        }
    ?>  
</body>
</html>