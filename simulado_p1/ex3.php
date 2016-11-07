<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 3</title>
    </head>
    <body>
        <?php
            class Jogador {
                public $nome, $camisa, $salario, $times;
                public function __construct($n,$c,$s,$t){
                    $this->nome = $n;
                    $this->camisa = $c;
                    $this->salario = $s;
                    $this->times = $t;
                }
            
                public function upSalario($p){
                    $this->salario = $this->salario + ($this->salario * ($p /100));
                }
            }
            
            class Time {
                public $nome, $listaj;
                public function __construct($nome){
                    $this->nome = $nome;
                    $this->listaj = array();
                }
                public function addJogador(Jogador $j){
                    $this->listaj[] = $j;
                }
                public function aumento($vl, Jogador $j){
                    foreach ($this->listaj as $value) {
                        if($value === $j){
                            $value->upSalario($vl);
                            echo "salario atualizado<br>";
                            break;
                        }
                    }
                }
                public function transferir(Jogador $j, Time $t){
                    unset($this->listaj[$j]);
                    $t->listaj[] = $j;
                    echo "transferido <br>";
                }
                
                public function listar(){
                    $total = 0;
                    foreach($this->listaj as $value){
                        $total += $value->salario;
                    }
                     foreach($this->listaj as $value){
                        echo $value->nome . " camisa: ". $value->camisa . "<br>";
                    }
                    echo "valor total de salarios: " .$total . "<br>";
                    
                }
            }
            $time = new Time("Framengo");
            $j1 = new Jogador("t","10",1200, null);
            $j2 = new Jogador("t2","12",12000, null);
            $j3 = new Jogador("t3","20",560, null);
            $time->addJogador($j1);
            $time->addJogador($j2);
            $time->addJogador($j3);
            $time->listar();
            $time->aumento(20, $j3);
            $time->listar();
            $santos = new Time("Santos");
            $time->transferir($j1, $santos);
            
        ?>
 <body>
</html>