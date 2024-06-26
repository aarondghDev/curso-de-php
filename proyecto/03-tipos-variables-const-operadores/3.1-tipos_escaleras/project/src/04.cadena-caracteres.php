<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>Tipos string</h1>
    <?php 
        echo "hello world<br>";
        echo 'Hello world<br>';
        echo "Hello
        worl<br>";
        echo 'L\'antañon<br>'; // Si queremos añadir comillas deberemos poner un \  que es una caracter de ruptura y lo usamos para que no lo interprete como un cierre de cadena.
        echo"Con comillas dobles tengo mas secuencias \n \r \t \v \e \" \f<br>";

        $a = 1.234;
        echo "Esto es un float $a <br>"
        //otra forma de hacerlo -> echo "Esto es un float".$a."<br>";
    ?>
<br>
<a href=".\index.php">Go to index<br></a>
    <a href=".\01.boolean.php">Go to 01.boolean.php<br></a>
    <a href=".\02.integer.php">Go to 02.integer.php<br></a>
    <a href=".\03.float.php">Go to 03.float.php<br></a>
</body>
</html>
