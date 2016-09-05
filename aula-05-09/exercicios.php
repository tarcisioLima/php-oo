<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicios</title>
    </head>
    <body>
        <?php
            /*
                Faca uma classe Quadrilatero que contenha um atributo
                lado1. Sabe-se que Quadrados e Retangulos sao Quadrilateros.
                É possível calcular área e perímetro de ambos Quadriláteros.
                
                AreaQuadrado = lado1*lado1
                PerimQuadrado = 4*lado1
                AreaRet = lado1*lado2
                PerimRet = 2*(lado1+lado2)
            */
            class Quadrilatero {
                private $lado1;
                public function __construct($lado1){
                   $this->lado1 = $lado1;
                }
                public function getLado1(){
                    return $this->lado1;
                }
                
            }
            class Quadrado extends Quadrilatero {
                    public function __construct($l1){
                        parent::__construct($l1);
                    }
                    public function areaQuadrado(){
                        return $this->getLado1() * $this->getLado1();
                    }
                   public function perimetroQuadrado(){
                        return 4 * $this->getLado1();
                    }
                }
            class Retangulo extends Quadrilatero {
                 private $lado2;
                
                 public function getLado2(){
                    return $this->lado2;
                }
                
                public function __construct($l1,$l2){
                    parent::__construct($l1);
                    $this->lado2 = $l2;
                }
                public function areaRetangulo(){
                    return $this->getLado1() * $this->getLado2();
                }
                public function perimetroRetangulo(){
                    return 2 * ($this->getLado1() + $this->getLado2());
                }
            }
                
                
             $q = new Quadrado(2);
            echo $q->areaQuadrado();
            echo '<br>';
            echo $q->perimetroQuadrado();
            echo '<br>';
            
            $r = new Retangulo(2,4);
            echo $r->areaRetangulo();
            echo '<br>';
            echo $r->perimetroRetangulo();
        ?>
 </body>
</html>