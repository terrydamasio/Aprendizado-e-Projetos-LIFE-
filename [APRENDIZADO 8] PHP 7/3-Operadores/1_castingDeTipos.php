<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        /*  Casting de Tipos (transformar tipos): int, bool, float, string 
            gettype() => espera uma variável e retorna o tipo dela
        */

        $valor = 10;
        $valor2 = (float) $valor; //float, double, real 
        $valor3 = (string) $valor;  

        echo gettype($valor); //valor inteiro (int ou integer)
        echo '<br>';
        echo gettype($valor2); //valor float (float ou double)
        echo '<br>';
        echo gettype($valor3); //valor string

    ?>
</body>
</html>