<!DOCTYPE html>
<html>
	<head>
		<title>Curso de PHP</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	</head>
	<body>
		<div>
			<?php
				$n = array(3,5,8,2);//Cria um vetor com as posições 0=3, 1=5, 2=8, 3=2.
				$n[] = 7;//Cria um indice novo com o valor 7: 4=7.
				print_r($n);
				var_dump($n);

				/*Com o foreach para cada elemento do nosso vetor $n, ele irá colocar um 
				elemento de $n em $valor.*/
				foreach ($n as $valor) {
					echo "$valor ";
				}

				/*Podemos também utilizar um array como este abaixo onde especificamos a posição
				e ou seu valor, não precisando estes estarem necessariamente na ordem correta.*/
				$r = array(0=>5,
						   1=>9,
						   2=>7,
						   3=>8,
						   4=>2);
				var_dump($r);

				$login = array("email"=>"pedro.ads@outlook.com",
							   "senha"=>123456);

				foreach($login as $campo => $valor){
					echo "$campo: $valor<br>";
				}

				echo "<br>";

				$cadastro = array("nome"=>"Pedro Henrique",
						          "cpf"=>"000.084.588-34",
						          "idade"=>25,
						          "peso"=>72,
						          "altura"=>1.70,
						          "rg"=>"45.304.207-0",
								  "endereco"=>"Domenico Lanzetti 600");

				foreach($cadastro as $campo => $valor){
					echo "$campo: $valor<br>";
				}

				
			?>
		</div>
	</body>
</html>