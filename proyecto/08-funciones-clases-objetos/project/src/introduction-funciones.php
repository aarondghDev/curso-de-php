<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions:</title>
</head>
<body>
    <h1>Functions</h1>
    <h2>Definir una funcion</h2>
    <?php
        function suma($num1, $num2){
            return $num1 + $num2;
        }

        $a = 2;
        $b = 5;
        echo "El valor de la suma es igual a: ".suma(2, 4);
        echo "<h3>O con variables predefinidas:</h3>";
        echo "El valor de la suma de $a y $b es igual a: ".suma($a, $b);
    ?>

    <h1>Modificar cadenas</h1>
    <?php
        function modificar_cadena(&$str){
            $str .= "-Modificado";
        }
        $texto = "texto inicial";
        echo $texto."<br>";
        modificar_cadena($texto);
        echo $texto;
    
    echo "<h3>Otro ejemplo dandole un valor por defecto a el parametro:</h3>";
        function mostrar_comida($comida = "pollo"){
            echo "Hoy tenemos $comida para comer";
        }
        echo"Por defecto: ";
        mostrar_comida();
        echo"<br>con parametro escrito: ";
        mostrar_comida("lentejas");
    ?>

    <h1>Funciones con variables (declarado como string los nombres de las funciones)</h1>
    <?php
    function suma2($num1 = 2, $num2 = 1){
        return $num1 + $num2;
    }

    $function1 = "suma2";
    echo $function1(2, 5)."<br>";
    $function2 = "mostrar_comida";
    echo $function2()."<br>";
    ?>

<a href='./index.php'>Go to index.php<br></a>
<a href='./clases.php'>Go to clases.php</a>

</body>
</html>