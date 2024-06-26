<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>Interfaces</h1>

    <?php
        interface Animal{
            public function haganSonido();
        }

        class Gato implements Animal{
            public function haganSonido(){
                echo "Miauuu<br>";
            }
        }

        $animal = new Gato();
        $animal->haganSonido();
    ?>

    <a href='./index.php'>Go to index.php<br></a>
    <a href='./introduction-funciones.php'>Go to introduction-funciones.php<br></a>
    <a href='./herencia.php'>Go to herencia.php<br></a>
    <a href='./traits.php'>Go to traits.php<br></a>
</body>
</html>
