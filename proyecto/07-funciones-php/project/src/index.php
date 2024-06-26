<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>Include</h1>
    <p>Some text.</p>

    <?php
    include './include.php';
    echo "<br>"
    ?>
        <?php
    include './vars-include.php'; // podemos importar variables y de todo
    echo "<br>";
    echo "El coche $car es de color $color<br>";
    ?>

    <a href='./funciones-string.php'>Go to funciones-string.php<br></a>
    <a href='./funciones-numeros.php'>Go to funciones-numeros.php<br></a>
    <a href='./date-time.php'>Go to date-time.php<br></a>
</body>
</html>