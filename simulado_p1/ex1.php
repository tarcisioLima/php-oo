<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 1</title>
    </head>
    <body>
        <?php
            abstract class Produto{
                protected $preco, $qt_prod,$promocao;
                public function __construct($preco, $qt){
                    $this->preco = $preco;
                    $this->qt_prod = $qt;
                }
                
                public function addPromocao(){
                    $this->preco = $this->preco - ($this->preco * $this->promocao);
                }
                public function imposto($imp){
                    $this->preco += $imp;
                }
                public function vender(){
                    if($this->qt_prod > 0){
                        $this->qt_prod--;
                        echo "vendeu <br>";
                    }else {
                        echo "Sem estoque <br>";
                    }
                }
            }
            class Eletrodomestico extends Produto{
                public function __construct($p,$qt){
                     parent::__construct($p,$qt);
                     $this->promocao = 0.2;
                }
                public function getPreco(){
                    echo $this->preco . "<br>";
                }
                
            }
            class Roupa extends Produto{
                public function __construct($preco, $qt){
                    parent::__construct($p,$qt);
                    $this->promocao = 0.15;
                }
            }
            class Movel extends Produto{
                public function __construct($preco, $qt){
                    parent::__construct($p,$qt);
                    $this->promocao = 0.125;
                }
            }
            
            $eletro = new Eletrodomestico(120, 3);
            $eletro->vender();
            $eletro->vender();
            $eletro->vender();
            $eletro->getPreco();
            $eletro->vender();
            $eletro->imposto(2);
            $eletro->getPreco();
            $eletro->addPromocao(0.4);
            $eletro->getPreco();
        ?>
 <body>
</html>