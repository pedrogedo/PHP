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
				$estado = $_GET["estado"];

				switch ($estado) {
					case "AC":
					case "AP":
					case "AM":
					case "PA":
					case "RO":
					case "RR":
					case "TO":
					echo "Você mora na <span class='foco'>Região Norte</span><br>";
					break;

					case "AL":
					case "BA":
					case "CE":
					case "MA":
					case "RN":
					case "PB":
					case "PE":
					case "PI":
					case "SE":
					echo "Você mora na <span class='foco'>Região Nordeste</span><br>";
					break;

					case "GO":
					case "MT":
					case "MS":
					echo "Você mora na <span class='foco'>Região Centro-Oeste</span><br>";
					break;

					case "ES":
					case "RG":
					case "RJ":
					case "SP":
					echo "Você mora na <span class='foco'>Região Sudeste</span><br>";
					break;

					case "PR":
					case "RS":
					case "SC":
					echo "Você mora na <span class='foco'>Região Sul</span><br>";
				}

			 ?>
			 <a href="exercicio3.html" class="botao">Voltar</a>
		</div>
	</body>
</html>