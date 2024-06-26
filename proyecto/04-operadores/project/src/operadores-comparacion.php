<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>Operador de comparacion</h1>

    <?php 
        // Igual 
        $x = 100;
        $y = '100';
        var_dump ($x == $y);

        // Identico
        $x = 100;
        $y = '100';
        var_dump ($x == $y);

        // Diferente, hay tres formas (!=diferente, !==no identico, <>diferente)
        $x = 100;
        $y = '100';
        var_dump ($x != $y);

        $x = 100;
        $y = '100';
        var_dump ($x !== $y);

        $x = 100;
        $y = '100';
        var_dump ($x <> $y);

        // Menor que 
        $x = 100;
        $y = 5;
        var_dump ($x < $y);

        // Mayor que 
        $x = 100;
        $y = 5;
        var_dump ($x > $y);

        // Menor o igual que 
        $x = 100;
        $y = 5;
        var_dump ($x <= $y);

        // Mayor o igual que 
        $x = 100;
        $y = 5;
        var_dump ($x >= $y);

        //Nave espacial '<=>', seria como un true o false si es mayor o no pero la respuesta la da en 1=true -1=false y 0=iguales
        $a = 5;
        $b = 10;
        echo ($a <=> $b).'<br>';// Retorna -1 porque $a es menor que $b

        $a = 10; 
        $b = 10;
        echo ($a <=> $b).'<br>';// en este caso daria 0 porque los valores son iguales

        $a = 15; 
        $b = 10;
        echo ($a <=> $b).'<br>';// Retorna 1 porque $a es mayor que $b

        // Fusion de null
        $var = isset($_GET['foo'])? $_GET['foo'] : "valor_por defecto";
        echo $var.'<br>';
    ?>
    <a href='./index.php'>Go to index<br></a>
    <a href='./operador-punto.php'>Go to operador-punto.php<br></a>
    <a href='./operadores-aritmeticos.php'>Go to operadores-aritmeticos.php<br></a>
    <a href='./operadores-asignacion.php'>Go to operadores-asignacion.php</a>
    <a href='./operador-ternario.php'>Go to operador-ternario.php</a>
</body>
</html>