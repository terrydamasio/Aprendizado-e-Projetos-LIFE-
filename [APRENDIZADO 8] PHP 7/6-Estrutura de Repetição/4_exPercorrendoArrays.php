<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php  
        //Percorrendo arrays com while, do while e for

        $registros = [
            ['Título' => 'Título Noticia 1', 'Conteúdo' => 'lorem ipsum 1...'],
            ['Título' => 'Título Noticia 2', 'Conteúdo' => 'lorem ipsum 2...'],
            ['Título' => 'Título Noticia 3', 'Conteúdo' => 'lorem ipsum 3...'],
            ['Título' => 'Título Noticia 4', 'Conteúdo' => 'lorem ipsum 4...']
        ];
        
        //usamos print_r pq o echo não tem inteligencia para fazer impressão de arrays
        echo '<pre>';
            print_r($registros);
        echo '</pre>';
         
        //atribuindo uma variável para o índice
        //$idx = 0;

        //verificamos se idx é menor que três por que a cada vez que o laço é executado recuperamos um dos elementos desse array
        /*while($idx < count($registros)) {

            echo '<h3>' . $registros[$idx]['Título'] . '</h3>';
            echo '<p>' . $registros[$idx]['Conteúdo'] . '</p>';
            echo '<hr>';

            $idx++;
        }

        do {
            echo '<h3>' . $registros[$idx]['Título'] . '</h3>';
            echo '<p>' . $registros[$idx]['Conteúdo'] . '</p>';
            echo '<hr>';

            $idx++;
        } while($idx < count($registros));
        */

        for($idx = 0; $idx < count($registros); $idx++){
            echo '<h3>' . $registros[$idx]['Título'] . '</h3>';
            echo '<p>' . $registros[$idx]['Conteúdo'] . '</p>';
            echo '<hr>';
        }
    ?>  
</body>
</html>