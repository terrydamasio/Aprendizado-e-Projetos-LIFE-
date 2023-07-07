<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Detalhes do Pedido</h1>
    <script>
        var possuiCartaoLoja = true;
        var valorCompra = 90;

        var valorFrete = 50; 
        var recebeuDescontoFrete = false;

        if(possuiCartaoLoja == true && valorCompra >= 100) {
            valorFrete = 0;
            recebeuDescontoFrete = true;
        } 
     
        document.write('Possui o cartão da loja? ');
    
        if(possuiCartaoLoja == true ) {
            document.write('Sim  <br>');
        } else {
            document.write('Não  <br>');
        }

        document.write('Valor da compra: ' + valorCompra + '<br>');

        document.write('Recebeu desconto no frete? ') 
        
        if(recebeuDescontoFrete == true) {
            document.write('Sim <br>');
        } else {
            document.write('Não <br>');
        }

        document.write('Valor do frete: ' + valorFrete) 
    </script>
</body>
</html>
