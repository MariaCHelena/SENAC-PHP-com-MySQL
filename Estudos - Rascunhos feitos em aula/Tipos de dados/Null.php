<!DOCTYPE html>
<!--
TIPOS DE DADOS
Trabalhando com NULL ou valores nulos
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trabalhando com NULL ou valores nulos</title>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <?php
            $x = "Valor em dinheiro: R$ 10.000";
            $x = null;
            
            var_dump($x);
            $y = [1, 2, 3, Null];
            
            for ($i = 1; $i < count($y); $i++){
                echo "<br>";
                var_dump($y[$i]);
            }
        ?>
    </body>
</html>
