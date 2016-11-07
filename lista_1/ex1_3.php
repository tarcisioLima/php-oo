<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exericio 1.3 </title>
    </head>
    <body>
        <?php
            class Complexo{
                public $real, $imaginario;
                
                public function __construct($real, $imaginario){
                    $this->real         = $real;
                    $this->imaginario   = $imaginario;
                }
                
                public function soma(Complexo $c){
                    $this->real +=  $c->real;
                    $this->imaginario += $c->imaginario;
                }
                
                public function multiplica(Complexo $c){
                    $x = ($this->real + $c->imaginario) * ($c->real + $this->imaginario);
                    return $x;
                }
                public function toString(){
                    
                }
                public function modulo(){
                    
                }
                public function  argumentoPrincipal(){
                    
                }
            }
            
        ?>
 <body>
</html>