<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de fecha y hora</title>
</head>
<body>
    <h1>Funciones de fecha y hora:</h1>
    <h2>Fecha:</h2>
    <?php
    /*
     *Formato de fecha:
     * 'd' -> dia
     * 'm' -> mes
     * 'y' -> year
     * 'l' -> dia de la semana
     */
        $today = date("d/m/y"); // hay que definir los parametros de dia mes y año d/m/y
        var_dump($today);
        var_dump("y/m/d");
        var_dump("y");// Se puede definir con un solo argumentos de los tres, y existen mas, podemos investigar en internet
    ?>
    <h1>Simbolo 'c'(&copy) con año anterior y año actual:</h1>
    &copy; 2020-<?php echo date("y");?>

    <h2>Hora:</h2>
    <?php
        /*
     *Formato de hora:
     * 'H' -> hora en 24
     * 'h' -> hora en 12
     * 'i' -> minutos
     * 's' -> segundos
     * 'a' -> meridiano
     */
        echo "La hora es: ".date("h:i:s")."<br>";
    ?>
    <h4>Timezones</h4>
    <?php
        //Timezone:
        date_default_timezone_set("Europe/Madrid");
        echo "La hora en Madrid es ".date("h:i:sa")."<br>";

        date_default_timezone_set("America/New_York");
        echo "La hora en New York es ".date("h:i:sa")."<br>";
    ?>

    <h2>Crear una fecha: mktime("hora: minuto:segundo mes-dia-año")</h2>
    <?php
        $d = mktime(11, 12, 54, 8, 12, 2012);
        echo "La fecha de creacion es: ".date("y-m-d h:i:sa", $d);// luego tenemos que pasarle el orden de la fecha y la hora y la variable en la que hemos creado nuestra fecha
    ?>

    <h2>Convertir un string a una fecha: strtotime("hora: minuto:segundo mes-dia-año")</h2>
    <?php
        $h = strtotime("2:00pm 15 April 2026");
        echo "El string se cambio a: ".date("h:i:sa d-m-y", $h);// luego tenemos que pasarle el orden de la fecha y la hora y la variable en la que hemos creado nuestra fecha
    ?>


<br/>
<a href='./index.php'>Go to index.php<br></a>
<a href='./funciones-string.php'>Go to funciones-string.php<br></a>
<a href='./funciones-numeros.php'>Go to funciones-numeros.php<br></a>
<a href='./funciones-math.php'>Go to funciones-math.php<br></a>
<a href='./include.php'>Go to include.php<br></a>

</body>
</html>