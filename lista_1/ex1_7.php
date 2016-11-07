<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exericio 1.7</title>
    </head>
    <body>
        <?php
            class Cliente {
                public $nome, $cpf, $telefone;
                
                 public function __construct($nome, $cpf){
                    $this->nome  = $nome;
                    $this->cpf   = $cpf;
                }
                
                public function mostrarDados(){
                    echo "Nome: " . $this->nome . " CPF: " . $this->cpf . 
                    " Telefone: (". $this->telefone->obterDDD() .") " . $this->telefone->obterNumero();
                    
                }
                public function adicionarTelefone(Telefone $t){
                    $this->telefone = $t;
                }
            }
           class Telefone {
               private $ddd, $numero;
                
                public function __construct($ddd, $numero){
                    $this->ddd    = $ddd;
                    $this->numero = $numero;
                }
                public function obterNumero(){
                    return $this->numero;
                }
                public function obterDDD(){
                    return $this->ddd;
                }
           }
           $c = new Cliente("Anonymous", "587.321.988-50");
           $c->adicionarTelefone(new Telefone("022", "40048922"));
           $c->mostrarDados();
        ?>
 <body>
</html>