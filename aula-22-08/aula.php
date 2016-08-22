<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pokemon</title>
    </head>
    <body>
        <?php
        
            #   Não fazer uso de acomplamento alto.
            #   Relação de 01 classe com N objetos de outra classe.
            #   No exemplo 01 Treinador tem N Pokebolas e 01 Pokebola tem 01 Pokemon.
            
            class Pokemon{
                
                public $nome, $tipo, $numero;
                
                public function __construct($nome, $tipo, $numero){
                    $this->nome   = $nome;
                    $this->tipo   = $tipo;
                    $this->numero = $numero;
                }
                
                public function status(){
                    echo  "<hr>";
                    echo  "<h4>Pokemon: </h4>"  . $this->nome   .   "<h4>Numero: </h4>" .   $this->tipo .   "<h4>Tipo: </h4>"   .   $this->numero; 
                }
                
            }
            
            class PokeBola{
                
                public $pokemon;
                
                public function guardarPokemon(Pokemon $pokemon){
                       $this->pokemon = $pokemon;
                }
            }
            
            class Treinador{
                
                public $nome, $pokeBag;
                
                public function __construct($nome){
                    $this->nome     = $nome;
                    $this->pokeBag  = array();
                }
                
                public function capturar(Pokemon $novoPokemon){
                    foreach($this->pokeBag as $pokebola){
                            if($pokebola->pokemon == null){
                                $pokebola->guardarPokemon($novoPokemon);
                                break;
                            }else{
                                echo "<br><br>Sem Pokebolas Disponiveis";
                            }
                    }
                }
                
                public function listarPokemons(){
                    foreach($this->pokeBag as $pokebola){
                        if($pokebola->pokemon != null){
                            $pokebola->pokemon->status();    
                         }
                    }
                }
                
                public function ganharPokebolas(){
                    $this->pokeBag[] = new Pokebola();
                }
                
                public function pokebolasVazias(){
                    $i = 0;
                    foreach ($this->pokeBag as $pokebola) {
                       if($pokebola->pokemon == null){
                           $i++;
                       }
                    }
                    echo '<br><br><strong>Você tem ' . $i . ' pokebola(s) vazia(s).</strong>';
                }
            }
             #   Testar aplicação: 01 Treinador, 03 Pokebolas, 02 Pokemons capturados
             $treinador = new Treinador("Tarcisio");
             $treinador->pokebolasVazias();
             
             $treinador->ganharPokebolas();
             $treinador->ganharPokebolas();
             $treinador->ganharPokebolas();
             $treinador->pokebolasVazias();
             
             $treinador->capturar(new Pokemon("Charmander", "Fogo"     ,  100));
             $treinador->capturar(new Pokemon("Kadabra"   , "Psiquico" ,  200));
              
             $treinador->listarPokemons();
             $treinador->pokebolasVazias();
             
        ?>
    </body>
</html>