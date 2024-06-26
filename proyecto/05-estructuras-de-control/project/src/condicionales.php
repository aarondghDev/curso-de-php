<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Estructuras de control: condicionales</h1>

    <?php
    //if y else
    $a = 30;
    $b = 20;
    if($a > $b){
        echo'A es mayor que B<br>';
        var_dump(true);
        $a = $b;
    }else{
        echo'A no es mayor que B<br>';
        var_dump(false);
    }
    echo $a.'<br>'.$b.'<br>';

    //if y else if
    $a = 20;
    $b = 20;
    if($a > $b){
        echo'A es mayor que B<br>';
        var_dump(true);
    }else if($a == $b){
        echo'Son iguales<br>';
        var_dump(true);
    }else{
        echo 'A es menor que B<br>';
    }   
    ?>

    <h2>Sintaxis alternativa para estructuras de control</h2>
    <?php
     /// Sintaxis alternativa
        //if y else
        $a = 40;
        $b = 40;
        if($a > $b):
            echo'A es mayor que B<br>';
            var_dump(true);
        else:
            echo'A no es mayor que B<br>';
            var_dump(false);
        endif;
    ?>

    <h2>Ejemplo de aplicacion</h2>
    <?php
    $usuario_logueado = true;
    ?>
    <?php
        if($usuario_logueado): ?> <span>Muestra username y boton de perfil<br></span>
    <?php
        else:?> <span>Muestra boton de login o registro</span>;
    <?php endif; ?>

    <a href='./index.php'>Go to index.php</a><br>
    <a href='./switch.php'>Go to switch.php</a><br>
    <a href='./bucles.php'>Go to bucles.php</a><br>
</body>
</html>