<!DOCTYPE html>
<html>
	<head>
		<title>Curso de PHP</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<style type="text/css">
			span.valor{
				font-weight: bold;
				color: red;
			}
		</style>
	</head>
	<body>
		<div>
			<?php 
				$nota1 = $_GET["n1"];
				$nota2 = $_GET["n2"];
				$media = ($nota1+$nota2)/2;

				echo "A média entre <span class='valor'>$nota1</span> e <span class='valor'>$nota2</span> é igual a <span class='valor'>$media</span><br>";

				if ($media < 5) {
					$resultado = "REPROVADO";
				}
				elseif ($media>=5 && $media<7) {
					$resultado = "RECUPERAÇÃO";
				}
				else {
					$resultado = "APROVADO";
				}

				echo "Situação do Aluno: <span class='valor'>$resultado</span><br><br>";
			?>
			 <a href="exercicio3.html">Voltar</a>
		</div>
	</body>
</html>