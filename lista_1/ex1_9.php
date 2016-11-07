<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exericio 1.9</title>
    </head>
    <body>
        <?php
            class Eq2Grau {
                public $a, $b, $c;
                
                public function __construct($a, $b, $c){
                    $this->a = $a;
                    $this->b = $b;
                    $this->c = $c;
                }
                public function delta(){
                    return ($this->b * $this->b) - (4 * $this->a * $this->c);  
                }
                
                public function raiz1(){
                    if($this->delta() >= 0){
                        return (($this->b * -1) + sqrt($this->delta())) / (2 * $this->a);
                    }else{
                        return "NaN";
                    }
                }
                
                public function raiz2(){
                    if($this->delta() >= 0){
                        return (($this->b * -1) - sqrt($this->delta())) / (2 * $this->a);
                    }else {
                        return "NaN";
                    }
                }
                
            }
            
            $eq = new Eq2Grau(1, 10, -119);
            echo "Raiz 1: " . $eq->raiz1();
            echo "<br>Raiz 2: " . $eq->raiz2();
        ?>
 <body>
</html>