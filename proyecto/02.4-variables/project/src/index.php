<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>Variables</h1>

    <?php 
        $txt = 'Hola Mundo';
        $x = 5;
        $y = 10.5 + $x;
        echo "$txt <br>$x<br>$y";

        // Una variable puede tener un nombre corto o un nombre largo
        $nombre_del_coche = "toyota";

        // Scope de variable local
        $x = 5;
        echo "El valor de $x es ".$x;

        function myTest(){
            $x = 4;
            echo"<p>Variable x dentro de funcion es: $x</p>";
        }
        myTest();

        // Scope de variable global

        function myTest1() {
            global $x, $y;
            $y = $x * $y;
            echo $y."<br>";
        }
        myTest1();

        function myTest2() {
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
            echo $GLOBALS['y'];
        }
        myTest2();

        // Scope de variable static
        function myTest3() {
            static $x = 0;
            echo $x.'<br>';
            $x++;
        }
        myTest3();
        myTest3();
        myTest3();
        myTest3();
    ?>
    <a href='./01.server.php'>Go to 01.server.php</a>
</body>
</html>