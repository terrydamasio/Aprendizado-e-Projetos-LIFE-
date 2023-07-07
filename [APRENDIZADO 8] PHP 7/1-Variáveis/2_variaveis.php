<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <script>
        
        
    </script>
</head>
<body>
    <?php 
        /* 
        Tipos de Variáveis em PHP:
        - string, int, float, boolean, array

        Regras de declaração de variáveis em PHP:
        - deve obrigatoriamente iniciar com o caracter "$"
        - PHP é uma linguagem case sensitive
        */

        //string
        $nome = 'João Pedro';

        //int
        $idade = 29;

        //float
        $peso = 80.5;

        //boolean
        $fumante = true;

        //sobrepondo o valor da idade
        $idade = '30';
    ?>

    <h1>Ficha Cadastral</h1>
    <br>
    <p>Nome: <?php echo $nome ?></p>
    <p>Idade: <?php print $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante ?></p>

</body>
</html>