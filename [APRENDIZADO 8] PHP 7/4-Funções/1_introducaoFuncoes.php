<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        //Funções: return (espera um retorno), void (não tem retorno)

        function calcularAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area;
        }

        echo calcularAreaTerreno(3, 2);

    ?>
</body>
</html>