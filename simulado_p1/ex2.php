<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 2</title>
    </head>
    <body>
        <?php
            class Usuario {
                private $login, $senha;
                public function __construct($l, $s){
                    $this->login = $l;
                    $this->senha = $s;
                }
            }
            class Administrador extends Usuario{
                
                public function painel(Usuario $u){
                    if($u instanceof Administrador){
                        echo "acesso permitido <br>";
                    }else {
                        echo "ecesso negado!<br>";       
                    }
                }
            }
            class Sistema {
                public function auth($l, $s){
                    if($l == "root" && $s == "root"){
                         echo "retornou um novo usuario com acesso<br>";
                         return new Usuario("root","root");
                    }else{
                        echo "não autorizado<br>";
                    }
                }
            }
            $ad = new Administrador("adm","adm");
            $us = new Usuario("t","t");
            $ad->painel($ad);
            $ad->painel($us);
            $s = new Sistema();
            $newUser = $s->auth($_POST['login'], $_POST['senha']);
        ?>
 <body>
</html>