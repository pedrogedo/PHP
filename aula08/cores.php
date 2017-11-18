<!DOCTYPE html>
<html>
	<head>
		<?php 
			$txt = isset($_GET["t"])?$_GET["t"]:"Texto Genérico";
			$tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
			$cor = isset($_GET["cor"])?$_GET["cor"]:"#00000";
		 ?>
		<title>Curso de PHP</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<style type="text/css">
			span.texto{
				font-size: <?php echo $tam; ?>;
				color: <?php echo $cor; ?>;
			}
		</style>
	</head>
	<body>
		<div>
			<?php
				echo "<span class='texto'>$txt</span>";
			?>
			<a href="exercicio3.html">Voltar</a>
		</div>
	</body>
</html>