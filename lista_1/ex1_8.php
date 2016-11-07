<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exericio 1.8</title>
    </head>
    <body>
        <?php
            class Adinhador {
                private $sorteado;
                
                public function sortear(){
                    $this->sorteado = rand(0,99);
                    echo "sortiado <br>";
                }
                
                public function adivinhar(){
                    return $this->sorteado;
                }
            }
            $a = new Adinhador();
            $a->sortear();
            echo $a->adivinhar();
        ?>
 <body>
</html>