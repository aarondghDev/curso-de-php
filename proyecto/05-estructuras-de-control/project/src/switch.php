<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>Estructuras de control: switch</h1>

    <?php
        $i = 50;
        switch($i){
            case 0:
                echo 'i es igual a 0<br>';
                break;
            case 1:
                echo 'i es igual a 1<br>';
                break;
            case 2:
                echo 'i es igual a 2<br>';
                break;
            case 3:
                echo 'i es igual a 3<br>';
                break;
            default:
            echo 'i no es un numero aplicable<br>';
            break;

        }
    ?>



    <a href='./condicionales.php'>Go to condicionales.php<br></a>
    <a href='./switch.php'>Go to switch.php</a><br>
    <a href='./bucles.php'>Go to bucles.php</a><br>
</body>
</html>