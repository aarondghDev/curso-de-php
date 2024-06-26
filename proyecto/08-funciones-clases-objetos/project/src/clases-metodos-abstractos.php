<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>clases-metodos-abstractos</h1>

    <?php
    //clase padre
abstract class Car{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro(): string;
}

    // clase hijo
class Audi extends Car{
    public function intro(): string{
        return "Elige calidad alemana! Yo soy un $this->name";
    }
}

class Seat extends Car{
    public function intro(): string{
        return "Elige calidad española! Yo soy un $this->name";
    }
}

$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";

$seat = new Seat("Seat");
echo $seat->intro();
echo "<br>";
    
    ?>

    <a href='./index.php'>Go to index.php<br></a>
    <a href='./introduction-funciones.php'>Go to introduction-funciones.php<br></a>
    <a href='./herencia.php'>Go to herencia.php<br></a>
    <a href='./interfaces.php'>Go to interfaces.php<br></a>
</body>
</html>
