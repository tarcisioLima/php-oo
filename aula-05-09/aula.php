<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modificadores de Acesso</title>
    </head>
    <body>
        <?php
        
            class Trainner {
                public function algumAlgoritmo(Pokemon $p){
                    $p->setAtk(-10);
                    $p->setNome("PIKABUG");
                }
            }
        
            class Pokemon {
                private $hp, $atk, $nome, $tipo;
                
                public function __construct($hp, $atk, $nome, $tipo){
                    $this->hp   = $hp;
                    $this->atk  = $atk;
                    $this->nome = $nome;
                    $this->tipo = $tipo;
                }
                
                public function levelup(){
                    $this->hp += 20;
                    $this->atk += 5;
                }
                public function setHp($novoHp){
                    $this->hp = $novoHp;
                }
                public function setTipo($novoTipo){
                    $this->tipo = $novoTipo;
                }
                 public function setAtk($novoAtk){
                    $this->atk = $novoAtk;
                }
                 public function setNome($novoNome){
                    $this->nome = $novoNome;
                }
                
                public function mostrar(){
                    echo "<p> HP: " . $this->hp . "</p>";
                    echo "<p> ATK: " . $this->atk . "</p>";
                    echo "<p> NOME: " . $this->nome . "</p>";
                    echo "<p> TIPO: " . $this->tipo . "</p>";
                }
            }
            
            $pikachu = new Pokemon(300, 100, "Pikachu", "CHOQUE");
            $pikachu->setHp(9999999); // esse set estraga a regra de negócio.
            $pikachu->mostrar();
            $t = new Trainner();
            echo "<hr>";
            $t->algumAlgoritmo($pikachu); // another mistake cause Trainner class is modifying Pokemon class.
            $pikachu->mostrar();
            
            
        ?>
    </body>
</html>