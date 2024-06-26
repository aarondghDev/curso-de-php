<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>Tipos integer</h1>
    <?php 
        $a = 1.23456789;
        $b = 1.23456780;
        $c = $a - $b;
        $epsilon = 0.00001;
        if(abs($a - $b) < $epsilon){
            echo true;
        }
        echo "<br>".$c;


    ///////////
        $a = 1.234;
        var_dump($a);
        $b = 1.2e3;
        var_dump($b);
        $c = 7E-10;
        var_dump($c);
    // Desbordamiento en sistema
    $numero_grande = 200147483647;
    var_dump($numero_grande);
    
    $numero_grande = 200147483648;
    var_dump($numero_grande);

    $numero_grande = 9223372036854775007;
    var_dump($numero_grande);

    $numero_grande = 9223372036854775808;
    var_dump($numero_grande);
    ?>
<br>
    <a href=".\index.php">Go to index<br></a>
    <a href=".\01.boolean.php">Go to 01.boolean.php<br></a>
    <a href=".\02.integer.php">Go to 02.integer.php<br></a>
    <a href=".\03.float.php">Go to 03.float.php<br></a>
    <a href=".\04.cadena-caracteres.php">Go to 04.cadena-caracteres.php<br></a>
</body>
</html>
