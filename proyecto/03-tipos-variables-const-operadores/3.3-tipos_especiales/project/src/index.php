<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tipos especiales</h1>
    <?php 

        $file = fopen("test.txt", "r");

        // Output
        while (!feof($file)){
            $line = fgets($file);
            echo $line.'<br>';
        }

        fclose($file);
    ?>

    <a href="./01.arrays.php"> ir a 01.arrays.php<br></a>
    <a href=".\02.integer.php">Go to 02.integer.php<br></a></body>
    <a href=".\03.float.php">Go to 03.float.php</a></body>
</html>

