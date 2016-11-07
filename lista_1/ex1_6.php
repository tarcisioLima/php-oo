<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exericio 1.6</title>
    </head>
    <body>
        <?php
            class Triangulo {
                private $lado, $perimetro, $area;
                
                public function __construct($l){
                    $this->lado = $l;
                }
                public function calcArea(){
                    $this->area = round($this->getLado() * (sqrt(3)/2),4);
                }
                public function calcPerimeto(){
                    $this->perimetro = 3 * $this->getLado();
                }
                // Getters
                public function getLado(){
                    return $this->lado;
                }
                public function getPerimetro(){
                    return $this->perimetro;
                }
                public function getArea(){
                    return $this->area;
                }
            }
            $equilatero = new Triangulo(13);
            $equilatero->calcArea();
            $equilatero->calcPerimeto();
            
            echo "<br>";
            echo "Area: " . $equilatero->getArea();
            echo "<br>";
            echo "Perimetro: " . $equilatero->getPerimetro();
        ?>
 <body>
</html>