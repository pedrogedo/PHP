<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP</title>
</head>
<body>
<div>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1+$nota2)/2;
        echo "A media entre $nota1 e $nota2 e $m <br/>";
        echo "A situacao do aluno e " . (($m<6)?"REPROVADO":"APROVADO");
    ?>
</div>
</body>
</html>
 