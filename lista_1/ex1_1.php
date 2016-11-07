<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exericio 1.1 </title>
    </head>
    <body>
        <?php
            class Pessoa {
                public $nome, $sexo, $idade, $veg;
                
                public function __construct($nome, $sexo, $idade, $veg){
                    $this->nome        = $nome;
                    $this->sexo        = $sexo;
                    $this->idade       = $idade;
                    $this->veg         = $veg;
                }
            }
            class Churrasco {
                private $qtdCarne;
                
                public function __construct(){
                    $this->qtdCarne = 0.0;
                }
                public function verificarConsumo(Pessoa $p){
                   if(!($p->idade <= 3) && !($p->veg)){
                      		if($p->idade <= 12){  
                      			$this->qtdCarne = $this->qtdCarne + 1.0;                   			
                      		}else {
                      			$this->qtdCarne = $this->qtdCarne + 2.0;
                      		}
                      }
                      return "<strong> Carne Consumida: </strong>" . $this->qtdCarne . "Kg.<br>";
                }
            }
            
            $c = new Churrasco();
            echo $c->verificarConsumo(new Pessoa("Tyrel Wellic", "M", 30, false));
            echo $c->verificarConsumo(new Pessoa("Elliot", "M", 25, true));
            echo $c->verificarConsumo(new Pessoa("Random Child", "F", 3, false));
            echo $c->verificarConsumo(new Pessoa("Another Random Child", "F", 7, false));
        ?>
 <body>
</html>