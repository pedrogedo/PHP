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
                for ($i = 1; $i <= 10; $i++) {
                    echo "$i ";
                }
                echo "<br/>";
                for ($i = 10; $i >= 1; $i--) {
                    echo "$i ";
                }
                echo "<br/>";
                for ($i = 0; $i <= 50; $i+=5) {
                    echo "$i ";
                }
                echo "<br/>";
                for ($i=20; $i>=0; $i-=2) {
                    print "$i ";
                }
            ?>
        </div>
    </body>
</html>
 