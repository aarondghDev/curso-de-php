<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Constantes</h1>
    <?php 
        const NOMBRE2 = "un valor";
        var_dump(NOMBRE2);

        define("NOMBRE1", "Otro valor");
        var_dump(NOMBRE1);

    //PHP ofrece una serie de constantes predefinidas:
    var_dump(__LINE__);
    var_dump(__FILE__);
    var_dump(__DIR__);
    var_dump(__FUNCTION__);
    ?>
</html>

