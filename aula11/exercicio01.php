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
				$c = 1;

				while($c<=10){//Enquanto o valor contido na variável $c for menor que 10.
					echo $c."<br>";//Ele apresenta o valor da variável antes de acrescentar + 1.
					$c++;//A variável $c recebe ela mesma + 1, até que seja alcançado o valor 10.
				}
			 ?>
		</div>
	</body>
</html>