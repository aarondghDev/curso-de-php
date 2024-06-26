<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variables GLOBALES</h1>
    <?php 
    // PHP ofrece una serie de variables globales predefinidas
    // var_dump($_GLOBALS);
    // var_dump($_SERVER);
    // var_dump($_REQUEST);
    // var_dump($_POST);
    // var_dump($_GET);
    // var_dump($_FILES);
    // var_dump($_ENV);
    // var_dump($_COOKIE);
    // var_dump($_SESSION); DEBE ESTAR DEFINIDA LA SESION PARA QUE SIRVA

    $x = 75;
    $y = 25;

    function addition() {
        echo $GLOBALS['x'] + $GLOBALS['y'];
    }
    addition();


    ?>
    <a href='./01.server.php'>Go to 01.server.php<br></a>
    <a href='./02.request.php'>Go to 02.request.php</a>
</html>

