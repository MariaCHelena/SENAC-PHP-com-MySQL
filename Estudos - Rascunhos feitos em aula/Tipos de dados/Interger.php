<!DOCTYPE html>
<!--
TIPOS DE DADOS
Trabalhando com Intergers
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trabalhando com Interger</title>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <?php
            $x = 10;
            $y = 8;
            $sub = $x - $y;
            
            $res = $sub < 0? "$x é menor que $y" : "$x é maior que $y";
            
            echo "$res";
            
            $x += $y;
            
            echo "<br>";
            
            echo $x;
            
            echo "<br>";
            
            $y++;
            $y += $x;
            
            echo $y;
            
            echo "<br><br>";
        
            $dado1 = 54846584570457;
            $dado2 = -54846584570457;
            
            var_dump($dado1);
            
            echo "<br>";
            
            var_dump($dado2);
        ?>
    </body>
</html>
