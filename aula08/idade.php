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
				$nome = isset($_GET["nome"])?$_GET["nome"]:"Nome não informado";
				$ano = isset($_GET["ano"])?$_GET["ano"]:"Ano não informado";
				$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"Sexo não informado";
				$idade = date("Y") - $ano;

				echo "$nome é $sexo e tem $idade anos.";

			 ?>
			 <a href="exercicio2.html">Voltar</a>
		</div>
	</body>
</html>