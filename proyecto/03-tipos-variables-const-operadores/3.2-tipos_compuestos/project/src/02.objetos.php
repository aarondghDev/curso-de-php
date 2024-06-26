<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>Tipos objetos</h1>
    <?php 
    class coche{
        function contamina() {
            echo"arranco y contamino";
        ;}
    };

    $autoMovil = new coche;
    // print($autoMovil);
    var_dump ($autoMovil);
    $autoMovil ->contamina();
    ?>
<br>
<a href=".\index.php">Go to index<br></a>
    <a href=".\01.arrays.php">Go to 01.arrays.php<br></a>
</html>
