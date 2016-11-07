<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exericio 1.2 </title>
    </head>
    <body>
        <?php
            class Lampada {
                private $estado, $qtdA;
                
                public function __construct(){
                    $this->estado = "apagada";
                    $this->qtdA   = 0;
                }
                
                public function click(){
                    if($this->estado === "apagada"){
                        $this->estado = "acesa";
                        $this->qtdAcendimentos();
                        }else{ 
                            $this->estado = "apagada";
                        }
                        
                }
                public function qtdAcendimentos(){
                    $this->qtdA++;
                }
                public function checaEstado(){
                    echo $this->estado . "<br>";
                }
            }
            
            $l = new Lampada();
            $l->checaEstado();
            $l->click();
            $l->checaEstado();
            $l->click();
            $l->checaEstado();
        
            
        ?>
 <body>
</html>