<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays</h1>
    <h2>Arrays indexados</h2>
    <?php
        $cosas = array("Lapiz", "Goma");
        print_r($cosas);

        echo '<h3>Otra forma de expresarlo</h3>';

        $cosas = ["Lapiz", "Goma"];
        print_r($cosas);
    ?>
    <br>
    <h2>Arrays asociativos</h2>
        <?php
            $paises = array(
                "España" => "Madrid",
                "Francia" => "Paris",
                //...
            );
            print_r($paises);

        echo '<h3>Otra ejemplo de tipos de "keys"</h3>';
        $arrays = [
            "clave" => "valor1",
            3 => "valor2",
            NULL => "valor3",
            TRUE => "valor4"
        ];
        var_dump($arrays);
        ?>

    <a href='./index.php'>Go to index.php</a>
    <a href='./acceso-y-modificacion.php'>Go to acceso-y-modificacion.php</a>
</body>
</html>