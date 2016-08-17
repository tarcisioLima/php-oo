<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <body>
        <?php /*
            Faça uma classe chamada Pneu
            que possua um atributo de durabilidade
            (um inteiro). A classe carro possui
            uma marca e quatro Pneus como atributo.
            Um carro pode acelerar se todos os Pneus
            tiverem um valor de durabilidade acima
            de 0. Cada vez que um carro acelera os
            quatro Pneus perdem 10 pontos de durabilidade.
            Faça quatro métodos de troca de Pneu,
            um para cada posição. Os construtores das
            classes também devem ser implementados
            assim como os testes. */
            
            class Pneu{
                public $durabilidade;
                public function __construct($d){
                    $this->durabilidade = $d;
                }
            }
            
            class Carro{
               public $marca, $p1, $p2, $p3, $p4;
               
               public function __construct($marca, Pneu $p1, Pneu $p2, Pneu $p3, Pneu $p4){
                   $this->marca = $marca;
                   $this->p1    = $p1->durabilidade;
                   $this->p2    = $p2->durabilidade;
                   $this->p3    = $p3->durabilidade;
                   $this->p4    = $p4->durabilidade;
               }
               
               public function acelerar(){
                  if($this->p1 > 0 && $this->p2 > 0 && $this->p3 > 0 && $this->p4 > 0){
                        $this->p1 -= 10;
                        $this->p2 -= 10;
                        $this->p3 -= 10;
                        $this->p4 -= 10;
                        echo '<br>Acelerou!!';
                    }else{
                       echo '<br>Incapaz de acelerar';
                    }
                 }
                 
                 public function trocaP1(Pneu $newP){
                     $this->p1 = $newP->durabilidade;
                     echo '<br> Pneu 1 Trocado.';
                 }
                  public function trocaP2(Pneu $newP){
                     $this->p2 = $newP->durabilidade;
                     echo '<br> Pneu 2 Trocado.';
                 }
                  public function trocaP3(Pneu $newP){
                     $this->p3 = $newP->durabilidade;
                     echo '<br> Pneu 3 Trocado.';
                 }
                  public function trocaP4(Pneu $newP){
                     $this->p4 = $newP->durabilidade;
                     echo '<br> Pneu 4 Trocado.';
                 }
                 
            }
            $pn1        = new Pneu(50);
            $pn2        = new Pneu(50);
            $pn3        = new Pneu(50);
            $pn4        = new Pneu(50);
            $pneudoDoce = new Pneu(20);
            $carro      = new Carro('Camaro Amarelo', $pn1, $pn2, $pn3, $pn4);
            
            $carro->acelerar();
            $carro->acelerar();
            $carro->acelerar();
            $carro->acelerar();
            $carro->acelerar();
            $carro->acelerar();
            
            $carro->trocaP1($pneudoDoce);
            $carro->trocaP2($pneudoDoce);
            $carro->trocaP3($pneudoDoce);
            $carro->trocaP4($pneudoDoce);
            
            $carro->acelerar();
            $carro->acelerar();
            $carro->acelerar();
            
            
            
        ?>
    </body>
</html>