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
				$d = isset($_GET["ds"])?$_GET["ds"]:0;

				switch ($d) {
					case 2:
					case 3:
					case 4:
					case 5:
					case 6:
						echo "Mais um dia de trabalho";
						break;
					case 7:
					case 8:
						echo "Dia de descanso";
						break;
					default:
						echo "Dia da semana inválido";
						break;
				}
			 ?>
			 <br><a href="javascript:history.go(-1)">Voltar</a>
		</div>
	</body>
</html>