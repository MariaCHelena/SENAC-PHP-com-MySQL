<!DOCTYPE html>
<!--
TIPOS DE DADOS
Trabalhando com Objetos
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trabalhando com Objetos</title>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <?php
        
            class Carros {
                
                public $cor;
                public $fabricante;
                
                public function __construct($cor , $fabricante){
                    $this -> cor = $cor;
                    $this -> fabricante = $fabricante;
                }
                
                public function message(){
                    return "Meu carro é ". $this->cor. ", do fabricante ". $this->fabricante;
                }
            }
            
            $meuCarro = new Carros ('Preto', 'Volvo');
        
            var_dump($meuCarro);
            echo "<br>";
            echo $meuCarro->message();
            echo "<br>";
        
            $carroNovo = new Carros ('Branco', 'Fiat');
        
            var_dump($carroNovo);
            echo"<br>";
            echo $carroNovo->message();
        ?>
    </body>
</html>
