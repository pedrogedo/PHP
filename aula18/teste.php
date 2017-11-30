<!DOCTYPE html>
<html>
	<head>
		<title>TEste</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	</head>
	<body>
		<div>
			<?php 
				function f($v, $n) {
					if ($n <= 0) return 1;
					else
					return $v[$n-1] * f($v, $n-2) + 1;
				}

				$a = array(0,1,2,3);
				print (f($a, 2));
			

				$x = 4;
				$y = &$x;
				$z = $y++;
				echo "<br>X=$x Y=$y Z=$z<br>";


				
			 ?>
		 </div>
	</body>
</html>