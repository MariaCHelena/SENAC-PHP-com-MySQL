<!DOCTYPE html>
<!--
TIPOS DE DADOS
Trabalhando com Array
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trabalhando com Array</title>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <?php
                $alunos = ['Maria Helena', 'Tiago', 'Diogo', 'Geisa', 'Wendell', 'Matheus', 'Victor'];
            
            echo "| ";
            
            for ($i = 0; $i < count($alunos); $i++) {
                echo "$alunos[$i] | ";
            }
            
            echo "...FIM.";
            echo "<br><br>";
            
            var_dump($alunos);
        ?>
    </body>
</html>
