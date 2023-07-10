<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        //
        $usuario_possui_cartao = true;
        $valor_compra = 150;

        $valor_frete = 50;
        $recebeu_desconto_frete = true;

        if ($usuario_possui_cartao && $valor_compra >= 400) {
            $valor_frete = 0;
        } else if($usuario_possui_cartao && $valor_compra >= 300) {
            $valor_frete = 10;
        } else if($usuario_possui_cartao && $valor_compra >= 100) {
            $valor_frete = 25;
        } else {
            $valor_frete = 50;
            $recebeu_desconto_frete = false;
        }
    ?>

    <h1>Detalhes do pedido</h1>
    <p>Possui o cartão da loja? 
        <?php 

            //OPERADORES TERNÁRIOS: <condicao> ? true : false 

            $possuiCartao = $usuario_possui_cartao ? 'Sim' : 'Não';
            
            echo $possuiCartao;
            
            /*  
            if($usuario_possui_cartao == true) {
                echo 'Sim';
            } else {
                echo 'Não';
            }
            */
        ?>
    </p>

    <p>Valor da compra: <?= $valor_compra ?></p>

    <p>Recebeu desconto no frete? <?= $recebeu_desconto_frete ? 'Sim' : 'Não'?> </p>
        
    <p>Valor do frete: <?= $valor_frete ?></p>

</body>
</html>
