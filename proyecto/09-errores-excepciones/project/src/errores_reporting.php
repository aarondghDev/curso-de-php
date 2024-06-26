<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error reporting</title>
</head>
<body>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    const PULGADAS = 26;

    function desplazar(){
        echo "mi mtb me desplaza sin contaminar";
    }

    class Bici{
        static function tamao_ruedas(){
            echo "Ruedas de: ".PULGADAS."<br>";
        }
    }

    desplazar();
    Bici::tamaño_ruedas();

    echo PULGADAS."<br>";
    ?>
</body>
</html>