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
				if ($idade >= 18) {
					$votar = "já pode votar";
					$dirigir = "já pode dirigir";
				}
				else {
					$votar = "não pode votar";
					$dirigir = "não pode dirigir";
				}
				echo "Com essa idade você $votar e $dirigir.";
			 ?>
			 <a href="exercicio1.html">Voltar</a>
		</div>
	</body>
</html>