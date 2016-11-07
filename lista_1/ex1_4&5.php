<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exericio 1.4 e 1.5</title>
    </head>
    <body>
        <?php
            class Cliente{
                private $nome, $saldo, $limite;
                
                public function __construct($nome, $saldo, $limite){
                    $this->nome   = $nome;
                    $this->saldo  = $saldo;
                    $this->limite = $limite;
                }
                public function sacar($v){
                    if($this->checarSaldo() > $v){ 
                        $this->saldo -= $v;
                    } else{
                        echo "vc n tem todo esse dinheiro pra sacar <br>";
                    }
                }
                public function depositar($v){
                    $this->saldo += $v;
                    echo $v . "R$ foram depositados em sua conta. <br>";
                }
                
                public function checarSaldo(){
                    echo "Saldo: ". $this->saldo . "<br>";
                    return $this->saldo + $this->limite;
                    
                }
                
                public function obterNome(){
                    return $this->nome;
                }     
            
            }
            $c = new Cliente("Tarcisio", 1000, 2000);
            $c->obterNome();
            $c->checarSaldo();
            $c->depositar(50);
            $c->checarSaldo();
            $c->sacar(5000);
            $c->sacar(800);
            $c->checarSaldo();
            
            // Exercicio 1.5
            class Doc {
                public function transferir(Cliente $c1, Cliente $c2, $qt){
                    if($qt < $c2->checarSaldo()){
                        $c2->sacar($qt);
                        $c1->depositar($qt);
                        
                        echo "Transferencia de ". $qt ."R$ realizada com sucesso. " 
                             . "Quantia sacada da conta do cliente: ". $c2->obterNome()
                             . " e transferiada para o cliente: " . $c1->obterNome() . "<br>";
                    }else {
                        echo "conta com saldo inexistente. <br>";
                    }
                }
            }
            $c1 = new Cliente("E-Corp", 10000000, 10000000);
            $c2 = new Cliente("Elliot", 500, 500);
            $doc = new Doc();
            $doc->transferir($c2, $c1, 10000);
        ?>
 <body>
</html>