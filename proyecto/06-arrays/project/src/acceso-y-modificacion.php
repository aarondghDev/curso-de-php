<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Acceso y modificacion de arrays</h1>
    <h2>Modificar un valor:</h2>
    <?php
    echo "Original";
        $array = ["valor1", "valor2", "valor3", "valor4", "valor5"];
        var_dump($array);
        echo"(Acceder a un valor:";
        echo "<br>.$array[2])";// acceder a un valor

        echo"<br><br>Valores modificados:";
        // modificar un valor
        $array[3] = $array[0];
        var_dump($array);

        $array[3] = "valor modificado";
        var_dump($array);

        echo "<h2>Contar elementos</h2>";
        // Contar elementos
        echo "numero de elementos en el array: ".count($array);

        echo "<h2>Eliminar elementos</h2>";
        //Eliminar elementos
        unset($array[2]);
        var_dump($array[2]);
    ?>

    <br>

    <a href='./index.php'>Go to index.php<br></a>
    <a href='./acceso-y-modificacion.php'>Go to acceso-y-modificacion.php<br></a>
    <a href='./recorrer_arrays.php'>Go to recorrer_arrays.php<br></a>
</body>
</html>