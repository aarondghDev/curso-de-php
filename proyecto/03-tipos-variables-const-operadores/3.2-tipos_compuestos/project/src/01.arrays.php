<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>Tipos arrays</h1>
    <?php 
        $array = array("foo" => "bar", "bar" => "foo");
        var_dump($array);
        $array_a = ["foo" => "bar", "bar" => "foo"];
        var_dump($array_a);
        //////////
        $array = [
            "foo" => "bar",
            "bar" => "foo",
            100 => -100,
            -100 => 100
        ];
        var_dump($array);
        //////////
        $frutas = [
            "frutas" => [
                "a" => "naranja",
                "b" => "platano",
            ],
            "numeros" => [1, 2, 3]
        ];
        var_dump($frutas);
    ?>

    <a href=".\index.php">Go to index<br></a>
    <a href=".\02.objetos.php">Go to 02.objetos.php<br></a>
</html>
