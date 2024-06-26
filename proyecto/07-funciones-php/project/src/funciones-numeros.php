<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de numeros</title>
</head>
<body>
    <h1>Funciones de numeros enteros:</h1>
    <h2>Constantes predefinidas en php para enteros: PHP_INT_MAX, PHP_INT_MIN, PHP_INT_SIZE. Estas nos indican el maximo, el minimo y el tamaño que podemos usar con PHP</h2>
    <?php
    echo'PHP_INT_MAX = '.PHP_INT_MAX.'<br/>';
    echo 'PHP_INT_MIN = '.PHP_INT_MIN .'<br/>';
    echo 'PHP_INT_SIZE = '.PHP_INT_SIZE.'<br/>';
    ?>

    <h2>Ver si es entero o no: 'is_int()':</h2>
    <p>Tiene otras dos alternativas a esta que serian 'is_integer()' y 'is_long()'</p>
        <?php
        // tiene otras dos alternativas a esta que serian 'is_integer()' y 'is_long()'
            $x = 5985;
            $is_int = is_int($x);
            echo "is_int() = ".$is_int;
            var_dump($is_int);
        ?>
    
    <h1>Funciones de numeros decimales:</h1>
    <h2>Constantes predefinidas en php para decimales: PHP_FLOAT_MAX, PHP_FLOAT_MIN, PHP_FLOAT_DIG. Estas nos indican el maximo, el minimo y el tamaño que podemos usar con PHP</h2>
    <?php
    echo'PHP_FLOAT_MAX = '.PHP_FLOAT_MAX.'<br/>';
    echo 'PHP_FLOAT_MIN = '.PHP_FLOAT_MIN .'<br/>';
    echo 'PHP_FLOAT_DIG = '.PHP_FLOAT_DIG.'<br/>';
    ?>

    <h2>Ver si es decimal o no: 'is_float()':</h2>
    <p>Tiene otra alternativa a esta que seria 'is_double()'</p>
    <?php
        $x = 1.2;
        $is_float = is_float($x);
        echo 'is_float() = '.$is_float;
        var_dump($is_float);
    ?>

    <h2>Ver si es infinito: 'is_float()':</h2>
    <?php
        echo PHP_FLOAT_MAX."<br>";
        $x = 1.9e411;
        var_dump($x);
    ?>

    <h2>NaN:</h2>
    <?php
        $x = acos(8); //coseno de 8
        var_dump($x);
    ?>

    <h2>Cadena de numeros:</h2>
    <?php
        $x = 5985;
        var_dump(is_numeric($x));
        //
        $x = '5985';
        var_dump(is_numeric($x));
        //
        $x = '59.85'+100;
        var_dump(is_numeric($x));
        //
        $x = 'Hello';
        var_dump(is_numeric($x));
    ?>

    <h2>Convertir desde cadenas y floats a enteros:</h2>
    <?php
        echo "<br/><p>Ejemplo de float a int:</p>";
        $x = 234365.777;
        $int_cast = (int)$x;
        var_dump($int_cast);

        echo "<br/><p>Ejemplo de String de numeros a int:</p>";
        $x = '234365.777';
        $int_cast = (int)$x;
        var_dump($int_cast);
    ?>

<br/>
<a href='./index.php'>Go to index.php<br></a>
<a href='./funciones-string.php'>Go to funciones-string.php<br></a>
<a href='./funciones-math.php'>Go to funciones-math.php<br></a>

</body>
</html>