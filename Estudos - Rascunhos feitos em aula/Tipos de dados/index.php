<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aula 02</title>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <?php
            $remuneração = 10000.00;
            $nome = "Ricardo";
            $valor = 10;
            
            echo "O salário é $valor vezes maior". "<br><br>";
            echo "O nome do funcionário é $nome <br><br>";
            echo "Salário do funcionário $nome é R$". number_format($remuneração, 2 , ',', '.') . '<br><br>';
            echo "O salário normal de um funcionário é R$". number_format(($remuneração/$valor), 2 , ',', '.') . "<br><br>";
            
            $num1 = 7;
            $num2 = 5;
            $adição = $num1 + $num2;
            $subtração = $num1 - $num2;
            $multiplicação = $num1 * $num2;
            $divisão = $num1 / $num2;
            $modulo = $num1 % $num2;
            
            echo "<br><br>";
            echo "Operações com os números $num1 e $num2 <br><br>";
            echo "Adição: $adição <br><br>";
            echo "Subtração: $subtração <br><br>";
            echo "Divisão: $divisão <br><br>";
            echo "Multiplicação: $multiplicação <br><br>";
            echo "Módulo: $modulo", "<br><br>";
            
            $x = 2.4;
            $y = 7.8;
            
            echo "<br><br>";
            echo $x + $y;
            echo "<br><br>";
            echo $x - $y;
            echo "<br><br>";
            echo $x / $y;
            echo "<br><br>";
            echo $x * $y;
            echo "<br><br>";
            echo $x % $y;
            echo "<br><br>";
            $r = $x > $y? "true" : "false";
            echo "$x > $y? $r";
            echo "<br><br>";
            $s = $x < $y? "true" : "false";
            echo "$x? < $y? $s";
        ?>
    </body>
</html>
