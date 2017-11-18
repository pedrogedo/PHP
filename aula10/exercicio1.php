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
				$num = isset($_GET["num"])?$_GET["num"]:0;
				$oper = isset($_GET["oper"])?$_GET["oper"]:1;

				switch($oper) {
					case 1:
						$resultado = $num * 2;
						echo "O dobro de $num = <span class='foco'>$resultado<span>";
						break;
					case 2:
						$resultado = pow($num, 3);
						echo "$num<sup>3</sup> = <span class='foco'>$resultado<span>";
						break;
					case 3:
						$resultado = sqrt($num);
						echo "A raiz quadrada de $num = <span class='foco'>$resultado<span>";
				}
			 ?>
			 <a href="exercicio1.html">Voltar</a>
		</div>
		
	</body>
</html>