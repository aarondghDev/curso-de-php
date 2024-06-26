<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>Operador de ternario</h1>

    <?php 
        // (expresion1)? expresion2 : expresion3;
        // $user = 'a'; // si definimos esta variable ya entraria por 'logged us', si no entra por 'anonymous' ya que $user no esta definida.
        echo $status = (empty($user))? 'anonymous<br>' : 'logged us'.'<br>';
    ?>
    <a href='./index.php'>Go to index<br></a>
    <a href='./operador-punto.php'>Go to operador-punto.php<br></a>
    <a href='./operadores-aritmeticos.php'>Go to operadores-aritmeticos.php<br></a>
    <a href='./operadores-asignacion.php'>Go to operadores-asignacion.php<br></a>
    <a href='./operadores-comparacion.php'>Go to operadores-comparacion.php<br></a>
    <a href='./operador-incremento.php'>Go to operador-incremento.php</a>
</body>
</html>