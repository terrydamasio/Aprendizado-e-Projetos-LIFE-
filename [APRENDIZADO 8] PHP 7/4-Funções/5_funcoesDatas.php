<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        /*Funções nativas para manipulação de datas
        - date(formato) > Recupera a data atual
        - date_default_timezone_get(timezone) > Recupera o timezone default da aplicação
        - date_default_timezone_set(timezone) > Atualizar o timezone default da aplicação
        - strtotime(data) > Transformar datas textuais em segundos
        */  

        //Recuperação da data e hora atual
        echo date('d/m/y ' . ' H:i');
        echo '<br>';

        //Recupera o timezone default
        echo date_default_timezone_get();
        echo '<br>';
        echo date_default_timezone_set('America/Sao_Paulo');
        echo '<br>';
        echo date('d/m/y ' . ' H:i:s');
        echo '<br>';
        //Transformar datas textuais em segundos
        //timestamp

        $dataInicial = '2018-04-24';
        $dataFinal = '2018-05-15';

        $timeInicial = strtotime($dataInicial);
        $timeFinal = strtotime($dataFinal);

        echo $dataInicial . ' - ' . $timeInicial;
        echo '<br>';
        echo $dataFinal . ' - ' . $timeFinal;

        $diferencaTime = abs($timeFinal - $timeInicial); //retorna o valor positivo caso ele seja negativo
        echo '<br>';
        echo 'A diferença de segundos entre a data inicial e final é ' . $diferencaTime . ' segundos';

        $diferencaDias = $diferencaTime / 86400;
        echo '<br>';
        echo 'A diferença de dias entre a data inicial e final é ' . $diferencaDias . ' dias';
    ?>
</body>
</html>