<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Herança</title>
    </head>
    <body>
        <?php
            class Potion {
                public function uso(Pokemon $p){
                    $p->tomarDano(-10);
                }
            }
            class Pokemon {
                
                public $forca,$hp,$tipo,$item;
                
                public function __construct($forca, $hp){
                    $this->forca = $forca;
                    $this->hp    = $hp;
                }
                
                public function mostrarStatus(){
                    echo "<p> Força: " . $this->forca . "</p>";
                    echo "<p> HP:    " . $this->hp    . "</p>";
                    echo "<p> Tipo:  " . $this->tipo  . "</p>";
                }
                
                public function estaVivo(){
                    return $this->hp > 0;
                }
                
                public function tomarDano($fator){
                    $this->hp = $this->hp - $fator;
                }
                
                 public function comprarItem(Potion $potion){
                    $this->item = $potion;
                }
                
                public function usarItem(){
                    if($this->item == null){
                        echo "Sem itens";
                    }else{
                        $this->item->uso($this);
                    }
                }
            }
            
            class Squirtle extends Pokemon {
                
                public function __construct($forca,$hp){
                    $this->tipo = "Agua"; // fixa tipo
                    parent::__construct($forca, $hp);
                }
                
                public function jatoDagua(Pokemon $p){
                    if($p->estaVivo()){
                    
                    if($p->tipo === "Fogo"){
                        $p->tomarDano($this->forca * 0.2);
                        
                    }else if($p->tipo === "Agua"){
                         $p->tomarDano($this->forca * 0.4);
                    }
                }else{
                    echo "Pokemon fainted";
                }
            }
        }
            class Arcam9 extends Pokemon {
                
                public function __construct($forca,$hp){
                    $this->tipo = "Fogo";
                    parent::__construct($forca,$hp);
                }
                
                public function chamas(Pokemon $p){
                    if($p->estaVivo()){
                    
                    if($p->tipo === "Fogo"){
                        $p->tomarDano($this->forca * 0.3);
                        
                    }else if($p->tipo === "Agua"){
                        $p->tomarDano($this->forca * 0.5);
                    }
                }else {
                    echo "Pokemon fainted";
                }
                
              }
            }
            
            //forca, hp
            
            $squirtle = new Squirtle(100, 100);
            $arcam    = new Arcam9(100, 100);
            
            $squirtle->jatoDagua($arcam);
            $arcam->chamas($squirtle);
            
            $squirtle->comprarItem(new Potion());
            $squirtle->usarItem();
            
            $arcam->mostrarStatus();
            $squirtle->mostrarStatus();
           
            
        ?>
    </body>
</html>