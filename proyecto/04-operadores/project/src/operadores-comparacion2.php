<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores de comparacion 2</h1>

    <?php 
        // and - &&
        $x = 100;
        $y = 50;
        if($x == 100 and $y == 50) {
            echo 'Es igual<br>';
        }else{
            echo 'Son diferentes<br>';
        }

        $x = 100;
        $y = 50;
        if($x == 100 && $y == 50) {
            echo 'Es igual<br>';
        }else{
            echo 'Son diferentes<br>';
        }

        //or - ||
        if($x == 100 or $y == 50){
            echo 'Alguno o ambos son igual<br>';
        }else{
            echo 'Alguno es diferente<br>';
        }

        if($x == 100 || $y == 50){
            echo 'Alguno o ambos son igual<br>';
        }else{
            echo 'Alguno es diferente<br>';
        }

        // xor - 
        if($x == 100 xor $y == 50){
            echo 'Alguno o ambos son igual<br>';
        }else{
            echo 'Alguno es diferente<br>';
        }

        // Negacion
        $a = true;
        if(!$a){
            echo 'Es false<br>'
        }else{
            echo 'Es true<br>'
        }

    ?>


    <a href='./operadores.php'>Go to operadores.php<br></a>
    <a href='./operador-punto.php'>Go to operador-punto.php<br></a>
    <a href='./operadores-aritmeticos.php'>Go to operadores-aritmeticos.php</a>
    <a href='./operador-incremento.php'>Go to operador-incremento.php</a>
</body>
</html>