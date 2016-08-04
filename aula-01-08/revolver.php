<html>
<body>
	<?php
		class Revolver{

			public $tambor, $qt_balas;

			function __construct($balas){
				$this->tambor   = 0; 
				$this->qt_balas = $balas;
			}

			function disparar(){
				if($this->tambor > 0){
					$this->tambor--;
					echo '<br><span style="color:blue">DISPAROU, POWW!!</span>';
				}else{
					echo '<br><span style="color:red"> Sem Munição, tente recarregar</span>';
				}
			}
			// echo (2 > 1) ? "foi" : "ñ foi"; exemplo if ternario.s

			function recarregar(){
				if($this->tambor === 7 || $this->qt_balas === 0){
					echo '<br><span style="color:red">Não foi possivel recarregar</span>';
				}else{
					echo '<br><span style="color:green">Recarregou</span>'; 
					$this->tambor++;
					$this->qt_balas--;
				}
			}

			function exibir(){
				echo '<br> <strong> Total de Balas: </strong> ' . $this->qt_balas;
				echo '<br> <strong> Total de Balas no Tambor: </strong> ' . $this->tambor;
			}
		}

			$fuzilada = new Revolver(27);
			$fuzilada->exibir();
			$fuzilada->disparar();
			$fuzilada->recarregar();			
			$fuzilada->recarregar();
			$fuzilada->recarregar();
			$fuzilada->disparar();
			$fuzilada->exibir();
			$fuzilada->disparar();
			$fuzilada->disparar();
			$fuzilada->disparar();
			$fuzilada->recarregar();
			$fuzilada->exibir();
		?>
</body>
</html?