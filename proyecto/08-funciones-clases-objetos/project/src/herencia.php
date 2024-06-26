<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herencia</title>
</head>
<body>
    <?php
        class Coche {
            public $marca;
            protected $velocidad_maxima;

            function __construct($marca, $velocidad_maxima){
                $this->marca = $marca;
                $this->velocidad_maxima = $velocidad_maxima;
            }

            function arrancaMotor() {
                echo "BRUM..!!!<br>";
            }
        }

        class CocheF1 extends Coche{
            public function rompeMotor(){
                echo "el motor ".$this->marca." esta roto, y dice adios al llegar a los ".$this->velocidad_maxima."Km/h<br>";
            }
        }

        $coche = new CocheF1("mcClaren", 90);
        $coche -> arrancaMotor();
        $coche->rompeMotor();
    ?>

    <a href='./index.php'>Go to index.php<br></a>
    <a href='./introduction-funciones.php'>Go to introduction-funciones.php<br></a>
    <a href='./namespace.php'>Go to namespace.php<br></a>
</body>
</html>