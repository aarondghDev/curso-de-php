<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>Estructuras de control: bucles</h1>
    <h2>While:</h2>
    <?php
    // while
    $num = 1;
    while ($num <= 100){
        echo $num.", ";
        $num++;
    }
    echo'<br>';
    echo'<br>';
    echo'<h2>Otro ejemplo de while</h2>';
    $x = 0;
    while ($x <= 100){
        echo "<br>El numero es: $x";
        $x += 10;
    }
    ?>
    
    <br>
    <h2>Do while</h2>
    <?php 
    // do while
    $num = 1;
    do{
        echo $num.", ";
        $num++;
    }while($num <= 100);
    echo'<br>';
    echo'<br>';
    echo'<h2>Otro ejemplo de do while</h2>';

    $num = 0;
    do{
        echo "<br>El numero es: $num";
        $num += 10;
    }while($num <= 100);
    ?>   
    <br>
    <h2>For</h2>
    <?php
    // for: for (expresion1(inicializacion); expresion2(condicion); expresion3(actualizacion de variable inicial){codigo};
    for($x = 0; $x <= 10; $x++){
        echo "El numero es:$x<br>";
    }

    echo'<br>';
    echo'<h2>Otro ejemplo de for</h2>';
    echo'<br>';
    for($x = 0; $x <= 100; $x+=50){
        echo "El numero es:$x<br>";
    }

    echo'<br>';
    echo'<h2>Otro ejemplo de for</h2>';
    for($i = 1, $j = 0; $i <= 10; $j += $i, print $i.'<br>', $i++);

    echo'<br>';
    echo'<h2>Otro ejemplo de for</h2>';

    $personas = [
    [
        "nombre" => "pedro",
        "salt" => 1234556
    ],
    [
        "nombre" => "olga",
        "salt" => 9234326
    ]
];
    for($i = 0; $i < count($personas); ++$i){
        $personas[$i]['salt'] = mt_rand(0000000, 9999999);
        var_dump($personas);
    }


    echo'<h2>Otro ejemplo de for</h2>';
    for($i = 0, $size = count($personas); $i < $size; ++$i){
        $personas[$i]['salt'] = mt_rand(0000000, 9999999);
        var_dump($personas);
    }
    ?>
    <h2>Foreach</h2>
    <?php
    //foreach
    $array = [1, 2, 3, 4];
    foreach($array as $valor) {
        $valor = $valor*2;
        var_dump($valor);
    }
    var_dump($array);


    echo'<h2>Otro ejemplo de foreach</h2>';

    unset($valor);
    foreach($array as $clave => $valor){
        echo "Clave: $clave - Valor: $valor<br>";
    }
    ?>
    <br>
    <h2>Break y continue:</h2>
    <?php
    echo"<h2>Break:</h2>";
        //break
        for($i = 0; $i < 10; ++$i){
            echo $i." ";
            if($i == 2) {
                break;
            }
        }
        echo"<br>";
        echo"<h2>Continue:</h2>";
        //Continue
        for($i = 0; $i < 10; ++$i){
            echo $i." ";// esta si muestra los 5
            if($i % 5 == 0) {
                continue;
            }
            echo $i." "; //Esta no mostrara los 5, ya que el continue hace que se salte la iteracion de los multiplos de 5 (pudiera ser cualquier caso)
        }
        ?>


    <br><a href='./condicionales.php'>Go to condicionales.php<br></a>
    <a href='./switch.php'>Go to switch.php</a><br>
    <a href='./bucles.php'>Go to bucles.php</a><br>
</body>
</html>