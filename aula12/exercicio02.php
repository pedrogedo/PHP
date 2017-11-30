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
            $c = 10;
            do {
                echo "$c ";
                $c--;
            } while($c>=1);
            
        ?>
    </div>
  </body>
</html>
 