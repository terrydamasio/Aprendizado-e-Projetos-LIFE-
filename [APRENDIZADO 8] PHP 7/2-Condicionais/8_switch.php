<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        //SWITCH: comparação de igualdade com o case, diferentemente da comparação de indentidade como o js

        $parametro = 1;
        switch ($parametro) {
            case 1: //Início do case
                echo 'Entrou no case 1';
                break; //Parada(fim) do case

            case 2:
                echo 'Entrou no case 2';
                break;

            case 3:
                echo 'Entrou no case 3';
                break;

            default: //Mesma função do else
                echo 'Entrou no default';
                break;    
        }

    ?>
</body>
</html>