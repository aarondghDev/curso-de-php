<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>Clases:</h1>

    <?php
        
    class Coche {
        public $marca;
        public $velocidad_maxima;

        function __construct($marca, $velocidad_maxima){
            $this->marca = $marca;
            $this->velocidad_maxima = $velocidad_maxima;
        }

        function __destruct(){
            echo "the car is broken";
        }

        function getMarca(){
            return $this->marca;
        }

        function setMarca($marca) {
            $this->marca = $marca;
        }
    }

    // Instanciamos la clase
    $auto = new Coche('Renault', 50);
    $auto2 = new Coche('Renault', 50);
    // Le seteamos el valor a $marca
    $auto2 ->setMarca("Fiat");
    var_dump($auto);
    var_dump($auto->getMarca( ));
    echo $auto->getMarca()."<br>";
    echo $auto2->getMarca()."<br>";
    ?>

    <h1>Modificadores de acceso:</h1>

    <?php
    /*  Modificadores de acceso:
        -public
        -private
        -protectec
    */
    class Vehiculo {
        public $marca;
        protected $velocidad_maxima;
        private $seguridad_ncap;

        function __construct($marca, $velocidad_maxima, $seguridad_ncap){
            $this->marca = $marca;
            $this->velocidad_maxima = $velocidad_maxima;
            $this->seguridad_ncap = $seguridad_ncap;
        }

        function __destruct(){
            echo "the car is broken";
        }

        function getMarca(){
            return $this->marca;
        }

        function setMarca($marca) {
            $this->marca = $marca;
        }
    }

        // Instanciamos la clase
        $carro = new Vehiculo('Renault', 50, 'none');
        $carro2 = new Vehiculo('Renault', 50, 'none');
        // Le seteamos el valor a $marca
        $carro2 ->setMarca("Fiat");
        var_dump($auto);
        var_dump($auto->getMarca( ));
        echo $carro->getMarca()."<br>";
        echo $carro2->getMarca()."<br>";
        // var_dump($carro->velocidad_maxima);
        // var_dump($carro->seguridad_ncap);dan error 

    ?>

    <a href='./index.php'>Go to index.php<br></a>
    <a href='./introduction-funciones.php'>Go to introduction-funciones.php<br></a>
    <a href='./herencia.php'>Go to herencia.php<br></a>
</body>
</html>
