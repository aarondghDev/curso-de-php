<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>Tipos integer</h1>
    <?php 
        $num = 22;
        echo $num;
        var_dump($num);

        $num1 = -22;
        echo $num1;
        var_dump($num1);

        $num2 = 022; //octal
        echo $num2;
        var_dump ($num2);
        
        $num3 = 0x10; //hexadecimal
        echo $num3;
        var_dump ($num3);

        $num4 = 0b10110; //binario
        echo $num4;
        var_dump ($num4);
    ?>

<a href=".\index.php">Go to index<br></a>
    <a href=".\01.boolean.php">Go to 01.boolean.php<br></a>
    <a href=".\03.float.php">Go to 03.float.php<br></a>
    <a href=".\04.cadena-caracteres.php">Go to 04.cadena-caracteres.php<br></a>
</html>
