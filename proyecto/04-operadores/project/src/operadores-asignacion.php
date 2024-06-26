<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>Operador de asignacion</h1>

    <?php 
        $a = 3;
        $b = $a;
        echo $a." - ".$b."<br>";

        // Suma y asigna el resultado directamente a la variable
        $b = 6;
        $b += 3;
        var_dump($b)."<br>";

        //// Resta y asigna el resultado directamente a la variable
        $b = 6;
        $b -= 3;
        echo $b."<br>";

        //Multiplica y asigna el resultado directamente a la variable
        $b = 6;
        $b *= 3;
        echo $b."<br>";

        //Divide y asigna el resultado directamente a la variable
        $b = 6;
        $b /= 3;
        echo $b."<br>";

        //Divide y asigna el resultado directamente a la variable
        $b = 6;
        $b %= 3;
        echo $b."<br>";

        //Eleva y asigna el resultado directamente a la variable
        $b = 6;
        $b **= 3;
        echo $b."<br>";

        //Contatena y asigna el nuevo valor a la variable, '.'
        $a = 'Hola'.' ';
        // $b = $a.' ';
        $a .= "Mundo";
        echo $a."<br>";

        // &, 
        $a = 6;
        $b = &$a;
        echo "$a + $b + (6+1) = ".($a+$b+$a+1)."<br>";

        $c = $a++;
        echo "$a + $b + $c =".($a + $b + $c)."<br>";
    ?>
    <a href='./index.php'>Go to index<br></a>
    <a href='./operador-punto.php'>Go to operador-punto.php<br></a>
    <a href='./operadores-aritmeticos.php'>Go to operadores-aritmeticos.php<br></a>
    <a href='./operadores-comparacion.php'>Go to operadores-comparacion.php</a>
</body>
</html>