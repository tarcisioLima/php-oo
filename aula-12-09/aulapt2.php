<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Polimorfismo (Duck Typing)</title>
    </head>
    <body>
        <?php 
            // Não necessidade de ter herança na passagem(TYPE HINT)
            // basta que o objeto passado tenha os métodos que serão executados.
            
            class Humano{
                
                public function voar(){
                    echo "ser humano voou no avião";
                }
            }
            
            class Pato{
                public function voar(){
                    echo "o pato voou";
                }
            }
            
            class foo{
                public function acao($p){
                    $p->voar();
                }
            }
            
            $a = new Foo();
            $a->acao(new Pato);
            echo '<br>';
            $a->acao(new Humano)
        ?>
</body>
</html>