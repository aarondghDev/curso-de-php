<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errores</title>
</head>
<body>
    <?php
    const PULGADAS = 26;

    function desplazar(){
        echo "mi mtb me desplaza sin contaminar";
    }

    class Bici{
        static function tamaño_ruedas(){
            echo "Ruedas de: ".PULGADAS."<br>";
        }
    }

    desplazar();
    Bici::tamaño_ruedas();

    echo PULGADAS."<br>";
    ?>
</body>
</html>