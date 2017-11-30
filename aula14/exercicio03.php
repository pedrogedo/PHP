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
				function soma(){
					/*A função func_get_args() pega os argumentos e joga dentro de um vetor que neste caso
					chamamos de $parametro. Esse vetor vai receber os valores 3,5,2,5.*/
					$parametro = func_get_args(); 
					/*A função func_num_args() retorna a quantidade de argumentos que foram passados e adiciona	na variável que chamamos de $tot*/
					$tot = func_num_args();
					$soma = 0;

					for($i=0; $i<$tot; $i++){
						$soma += $parametro[$i];
					}
					return $soma;
				}

				$resultado = soma(3,5,2,5);
				echo "A soma dos valores é <span class='foco'>$resultado</span>";
			 ?>
		</div>
	</body>
</html>