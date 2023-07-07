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
        $valor_compra = 90;

        $valor_frete = 50;
        $recebeu_desconto_frete = false;

        if ($usuario_possui_cartao == true && $valor_compra >= 100) {
            $valor_frete = 0;
            $recebeu_desconto_frete = true;
        }
    ?>

    <h1>Detalhes do pedido</h1>
    <p>Possui o cartão da loja? 
        <?php 
            if($usuario_possui_cartao == true) {
                echo 'Sim';
            } else {
                echo 'Não';
            }
        ?>
    </p>

    <p>Valor da compra: <?= $valor_compra ?></p>

    <p>Recebeu desconto no frete? 
        <?php 
            if($recebeu_desconto_frete == true) {
                echo 'Sim';
            } else {
                echo 'Não';
            }
        ?>
    </p>
        
    <p>Valor do frete: <?= $valor_frete ?></p>

</body>
</html>
