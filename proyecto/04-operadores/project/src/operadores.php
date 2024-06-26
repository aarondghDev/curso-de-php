<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>Operadores</h1>

    <?php 
        $a = 2 + 3 * 8;
        var_dump($a);
        $b = (2 + 3) * 8;
        var_dump($b);
        $c = 2 + (3 * 8);
        var_dump($c);

        ////// Otro ej:
        $a = 2;
        $b = 3;
        $c = 8;
        var_dump ($a - $b - $c).'<br>';
        var_dump (($a - $b) - $c).'<br>';
        var_dump ($a - ($b - $c));

        // Operador de asignacion, '=':
        $a = 8;
        echo $a = $b = $c.'<br>';
    ?>
    <a href='./index.php'>Go to index<br></a>
    <a href='./operador-punto.php'>Go to operador-punto.php<br></a>
    <a href='./operadores-aritmeticos.php'>Go to operadores-aritmeticos.php</a>
</body>
</html>