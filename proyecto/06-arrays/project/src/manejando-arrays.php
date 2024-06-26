<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Manejando arrays</h1>

    <?php
    $a = ["1", "2", "3"];
    var_dump($a);
    $b = ["primero del segundo", "5", "6"];
    var_dump($b);

    $c = array_merge($a, $b);
    var_dump($c);


    $d = ["a" => "b", "5", "6"];
    var_dump($d);

    $g = array_merge($a, $d);
    var_dump($g);

    // Ordenar arrays
    echo "<h2>Ordenar arrays de manera alfabetica A-z:</h2>";

    $frutas = ["limon", "naranja", "banana", "albaricoque", "manzana"];
    sort($frutas);
    echo print_r($frutas, 1);

    echo "<h2>Otro ejemplo de manera alfabetica invertida z-A:</h2>";
    rsort($frutas);
    echo print_r($frutas, 1);

    echo "<h2>Ordenar numeros de < a >:</h2>";
    $age = [
        "peter" => 35, 
        "Ben" => 27, 
        "Joe" => 43
    ];
    asort($age);
    var_dump($age);

    echo "<h2>Ordenar numeros de > a <:</h2>";
    arsort($age);
    var_dump($age);

    // Segun la clave (orden alfabetico en este caso):
    echo "<h4>Ordenar numeros segun la clave(orden alfabetico en este caso):</h4>";
    ksort($age);
    var_dump($age);

    //Segun la clave (orden alfabetico invertido en este caso):
    echo "<h4>Ordenar numeros segun la clave(orden alfabetico invertido en este caso):</h4>";
    krsort($age);
    var_dump($age);
    
    echo "<h2>Diferencia entre arrays:</h2>";
    // Diferencias entre arrays
    $frutas1 = ["limon", "naranja"];
    $frutas2 = ["limon", "mandarina"];
    var_dump( $frutas);
    var_dump( $frutas2);
    echo print_r(array_diff($frutas1, $frutas2), 2);

    echo "<h4>Elementos en comun de los arrays:</h4>";
    // Elementos en comun:
    echo print_r(array_intersect($frutas1, $frutas2), 2);

    //Convertir array en string
    echo "<h2>Convertir array en string:</h2>";
    echo print_r(implode(" ", $frutas1)."<br>", 1);
    echo "<h3>Otra forma (guardando en otra variable):</h3>";
    $arrayToString = implode(" ", $frutas);
    echo $arrayToString;
    echo "<h4>Convertir string en un array:</h4>";

    echo print_r(explode(" ", $arrayToString), 1);

    echo "<h4>Eliminar elementos duplicados:</h4>";
    // Eliminar elementos duplicados
    $frutas = array_merge($frutas1, $frutas2);
    echo "frutas (repetidas y no)";
    var_dump($frutas);
    echo print_r($frutas = array_unique($frutas), 1);
    ?>

    <br>

    <a href='./index.php'>Go to index.php<br></a>
    <a href='./arrays.php'>Go to arrays.php<br></a>
    <a href='./acceso-y-modificacion.php'>Go to acceso-y-modificacion.php<br></a>
    <a href='./recorrer_arrays.php'>Go to recorrer_arrays.php<br></a>
</body>
</html>