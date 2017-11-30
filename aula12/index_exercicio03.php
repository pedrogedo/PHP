<!DOCTYPE html>
<html>
	<head>
	  <link rel="stylesheet" href="../css/estilo.css"/>
	  <meta charset="UTF-8"/>
	  <title>Curso de PHP</title>
	</head>
	<body>
		<div>
			<form method="get" action="exercicio03.php">
			N&uacute;mero:
			<select name="num">
		    <?php
		        for($i=1; $i<=10; $i++) {
					echo "<option>$i</option>";
				}
		    ?>
			</select>
			<input type="submit" value="Tabuada"/>
			</form>
		</div>
	</body>
</html>
 