<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recorrer un array</h1>
    <?php
        $array = ["valor0", "valor1", "valor2", "valor3", "valor4", "valor5"];

        for($i = 0; $i < count($array); $i++){
            echo $array[$i]."<br>";
        }
        //tambien podemos usar while para recorrer un array
        echo"<h3>O tambien podemos usar while para recorrer un array:</h3>";
        $z = 0;
        while($z < count($array)){
            echo $array[$z]."<br>";
            $z++;
        }

        //tambien podemos usar do while para recorrer un array
        echo"<h3>O tambien podemos usar do while para recorrer un array:</h3>";
        $z = 0;
        do{
            echo $array[$z]."<br>";
            $z++;
        }while($z < count($array));

        //tambien podemos usar foreach para recorrer un array (dos formas)
        echo"<h3>O tambien podemos usar foreach (de dos manera) para recorrer un array:</h3>";
        foreach($array as $valor){
            echo $valor."<br>";
        }

        echo "<br>La otra forma:<br>";
        foreach($array as $clave => $valor){
            echo $array[$clave]." ".$valor."<br>";
        }
    ?>

    <h1>Recorrer un array multidimensional</h1>
    <?php
    foreach($array as list($a, $b)){
        echo "A: $a; B: $b\n";
    }
    ?>

    <br>

    <a href='./index.php'>Go to index.php<br></a>
    <a href='./arrays.php'>Go to arrays.php<br></a>
    <a href='./acceso-y-modificacion.php'>Go to acceso-y-modificacion.php<br></a>
    <a href='./manejando-arrays.php'>Go to manejando-arrays.php<br></a>
</body>
</html>