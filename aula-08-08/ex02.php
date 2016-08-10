<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <?php
        /* Crie uma classe Pessoa que possua os atributos nome e idade.
           Toda pessoa faz aníversario e toda Pessoa pode mudar o nome
           (mostre na tela a mensagem: "Nome antigo XXX" alterado para XXX");
           Crie uma forma para testar a classe Pessoa usando as URLs com query do método GET. 
        */
        
        class Pessoa {
            public $nome, $idade;
            
            public function __construct($nome, $idade){
                $this->nome  = $nome;
                $this->idade = $idade;
            }
            
            public function __call($n, $args){
                echo 'ação <em>' . $n . '</em> inexistente.';
            }
            public function fazerAniversario(){
                $this->idade++;
                echo 'fez aniversário, sua idade atual é: <em>'. $this->idade . '</em>';
            }
            
            public function alterarNome($nome){
                echo 'Nome antigo: ' . $this->nome . ', alterado para: ' . $nome;
                $this->nome = $nome;
            }
        }
        //Testando a Classe Atraves da URL
        $mrRobot  = new Pessoa($_GET['nome'], $_GET['idade']);
        $acao     = $_GET['acao'];
        $novoNome = $_GET['novoNome'];
        
        ($acao == 'alterarNome') ? $mrRobot->$acao($novoNome) : $mrRobot->$acao();
        //https://php-tarcisiolima.c9users.io/aula-08-08/ex02.php?idade=18&nome=Tarcisio&acao=alterarNome&novoNome=MrRobot
    ?>
</html>