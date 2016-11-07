<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exericio 1.10</title>
    </head>
    <body>
        <?php
            class Porta {
                public $isOpen; 
                public static $numAberturas;
                
                public function __construct(){
                    $this->isOpen = false;
                    $this->numAberturas = 0;
                }
                public function abrir(){
                    $this->isOpen = true;
                    $this->numAberturas++;
                }
                public function fechar(){
                    $this->isOpen = false;
                }
            }
            $door = new Porta();
            $door->abrir();
            $door->fechar();
        ?>
 <body>
</html>