<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <body>
        <?php
            class Endereco{
                public $logradouro, $bairro, $cidade;
                
                public function __construct($logradouro, $bairro, $cidade){
                    $this->logradouro = $logradouro;
                    $this->bairro     = $bairro;
                    $this->cidade     = $cidade;
                }
                public function mostrarDados(){
                    echo '<p>Logradouro: ' . $this->logradouro . '</p>' . '<p>Bairro: ' . $this->bairro . '</p>' . '<p> Cidade: ' . $this->cidade . '</p>';
                }
                
            }
            class Aluno{
                public $nome, $endereco;
               
                    public function __construct($nome, Endereco $endereco){
                      $this->nome     = $nome;
                      $this->endereco = $endereco;
                    }
                 
                 /*
                   //Sem Injeção de dependencia pois ela é fixada como Endereco.
                    public function __construct($nome, $logradouro, $bairro, $cidade){
                        $this->nome     = $nome;
                        $this->endereco =  new Endereco($logradouro, $bairro, $cidade);
                    }
                */
                public function mostrarDados(){
                    echo '<p> Nome: ' . $this->nome . '</p>';
                    $this->endereco->mostrarDados(); 
                 }
            }
                 /*
                 // 2° Forma de Fazer sem injeção de dependencia.
                    $ed = new Aluno('Edilson', 'Rua da Alegria', 'Parque Vida', 'São Viselva');
                    $ed->mostrarDados();
                */
                
                $t = new Aluno('Tarcisio', new Endereco('Rua da Alegria', 'Parque Vida', 'São Viselva'));
                $t->mostrarDados();
                
                
             
        ?>
    </body>    
</html>