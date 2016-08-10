<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <?php 
        /*  Crie uma classe chamada calculadora. Essa classe possui dois atributos $num1 e $num2.
            Seus métodos consistem nas quatro operações(lembrando que não há divisão por zero).
            Faça um porgrama que lê, via query string método GET, dois números e qual operação
            a ser realizada.
        */
        class Calculadora {
            public $num1, $num2;
            
            public function __construct($num1, $num2, $opr) {
                $this->num1 = $num1;
                $this->num2 = $num2;
                echo '<p>Resultado da Operação: </p>' . $this->$opr();
            }
            
            public function __call($name, $args){
                echo '<p>A operação <strong>'. $name .'</strong> é inválida </p>';
            }
            
            public function somar(){
                return $this->num1 + $this->num2;
            }
            
            public function subtrair(){
                return $this->num1 - $this->num2;
            }
            
            public function multiplicar(){
                return $this->num1 * $this->num2;
            }
            
            public function dividir(){
                return ($this->num2 != 0) ? $this->num1 / $this->num2 : "Divisão Inválida.";
            }
        }
        $conta = new Calculadora ($_GET['num1'], $_GET['num2'], $_GET['opr']);
        // exemplo: https://php-tarcisiolima.c9users.io/aula-08-08/ex01.php?num1=10&num2=2&opr=somar
        
    ?>
</html>




