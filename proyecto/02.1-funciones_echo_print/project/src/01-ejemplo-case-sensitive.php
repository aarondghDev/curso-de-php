<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejemplo de case sensitive</h1>
    <?php
        $color = "red";
        echo "My car is $color <br>"
        //estos ejemplode de abajo dan error, php es case sensitive
        //echo "My car is $Color <br>"
        //echo "My car is $COLOR <br>"
    ?>

    <a href="./index.php">go to index<br></a>
    <a href="./02-ejemplo-print.php">go to ejemplo 2 "print"<br></a>
    <a href="./02.1-ejemplo-print_r.php">go to ejemplo 2 "print_r"<br></a>
    <a href="./3-ejemplo-var-dump.php">go to ejemplo 'var dump'"</a>
</body>
</html>
