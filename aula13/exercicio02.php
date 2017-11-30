<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP</title>
</head>
<body>
    <div>
        <form method="get" action="exercicio02_tabuada.php">
            <select name="num">
                <?php
                    for ($c=1; $c<=10; $c++) {
                        echo "<option>$c</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Tabuada"/>
        </form>
    </div>
  </body>
</html>
 