<!DOCTYPE html>
<html>
	<head>
		<title>Curso de PHP</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	</head>
	<body>
		<h1>Operadores de Atribuição</h1>
		<div>
			<?php 
				$preco = $_GET["x"];
				echo "<h2>O valor do produto é <span>R$ ".number_format($preco,2,",",".")."</span></h2>";
				$preco += $preco*10/100;
				echo "<h2>O valor do produto com 10% de desconto é <span>R$ ".number_format($preco,2,",",".")."</span></h2>";
			 ?>
		</div>
	</body>
</html>