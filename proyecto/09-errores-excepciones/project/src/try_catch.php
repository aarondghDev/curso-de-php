<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errores</title>
</head>
<body>
    <h1>Ejemplo 1 - throw</h1>
    <?php
    //throw - mostrar mensajes de excepcion
    function dividir($dividendo, $divisor){
        if($divisor == 0){
            throw new Exception ("Division por cero");
        }
        return $dividendo / $divisor."<br>";
    }

    echo dividir(1, 2);
    //el sig da error
    // echo dividir(1, 0);

    //try catch
    ?>

    <h1>Ejemplo 2 - try catch</h1>
        <?php
        //try catch
        try {
            echo dividir(1, 0);
        } catch (Exception $e) {
            echo "Deshabilitado metodo divide<br>";
        } finally {
            // codigo a realizar siempre al final de la ejecucion, falle o no falle
            echo "Proceso completado<br>";
        }
    ?>

    <h1>Ejemplo 3 - try catch</h1>

    <?php   
    function dividir2($dividendo, $divisor){
        if($divisor == 0){
            throw new Exception ("Division por cero", 1);
        }
        return $dividendo / $divisor."<br>";
    }
     //try catch
        try {
            echo dividir2(1, 0);
        } catch (Exception $e) {
            echo "Deshabilitado metodo divide<br>";
            $code = $e->getCode();
            $message = $e->getMessage();
            $file = $e->getFile();
            $line = $e->getLine();
            echo "Exception throw en archivo $file, linea [Code $code] $message<br>";
        } finally {
            // codigo a realizar siempre al final de la     ejecucion, falle o no falle
            echo "Proceso completado<br>";
        }
    ?>

    <a href='./index.php'>Go to index.php<br></a>
    <a href='./excepciones-personalizadas.php'>Go to excepciones-personalizadas.php<br></a>
    <a href='./funciones-math.php'>Go to funciones-math.php<br></a>

</body>
</html>