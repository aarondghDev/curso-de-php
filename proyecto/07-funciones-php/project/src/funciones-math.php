<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de matematicas</title>
</head>
<body>
    <h1>Funciones matematicas:</h1>
    <h2>Valor de 'pi': pi()</h2>
    <?php
        echo "pi es igual a: ".pi();
    ?>
    <h2>Min y max:</h2>
    <?php
        $min = min(3, 6, 8, 90, -200);
        $max = max(3, 6, 8, 90, -200);
        echo "El minimo es: $min, y el max es: $max"
    ?>

    <h2>Valor absoluto: 'abs()'</h2>
    <?php
        $a = -89.9;
        echo "El valor absoluto de $a es igual a= ".abs($a);
        ?>

    <h2>Redondear un numero: 'round()'</h2>
    <?php
        $a = -89.9;
        echo "El valor redondeado de $a es igual a= ".round($a);
        ?>

    <h2>Numeros aleatorios: 'rand()'</h2>
    <?php
        $a = -89.9;
        echo "Un numero aleatorio = ".rand()."<br>";

        echo "Numero aleatorio con parametros, entre 20 y 50 en este caso: ".rand(20, 50)."<br>"; // un numero aleatorio entre 20 y 50
        ?>
<br/>
<a href='./index.php'>Go to index.php<br></a>
<a href='./funciones-string.php'>Go to funciones-string.php<br></a>
<a href='./funciones-numeros.php'>Go to funciones-numeros.php<br></a>
<a href='./date-time.php'>Go to date-time.php<br></a>

</body>
</html>