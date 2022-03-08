<!DOCTYPE html>
<!--
TIPOS DE DADOS
Trabalhando com booleanos
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trabalhando com booleanos</title>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <?php
            $x = true;
            $y = false;
            
            var_dump($x);
            
            echo "<br>";
            
            var_dump($y);
            
            echo "<br>";
            
            $a = 10;
            $b = 0;
            
            $analise = $a > $b? true : false;
            
            var_dump($analise);
        ?>
    </body>
</html>
