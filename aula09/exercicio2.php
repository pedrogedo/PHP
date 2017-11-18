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
				$ano = isset($_GET["ano"])?$_GET["ano"]:"Não informado";
				$idade = date("Y") - $ano;
				echo "Você nasceu em $ano tem $idade anos.<br>";
				
				if ($idade < 16) {
					$voto = "não é obrigatório";
				}
				elseif (($idade>=16 && $idade<18) || ($idade>65)) {
					$voto = "é opicional";
				}
				else {
					$voto = "é obrigatório";
				}
				echo "Com essa idade o seu voto $voto";
			 ?>
			 <a href="exercicio2.html">Voltar</a>
		</div>
	</body>
</html>