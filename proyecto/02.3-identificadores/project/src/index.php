<!DOCTYPE html>
<html lang="en">
</head>
<body>
    <h1>Comentarios</h1>
    <?php 
        echo "Inicio comentarios de una linea<br>";
        // Comentario de una sola linea
        # Otro tipo de comentario de una sola linea
        echo "Fin de comentarios de una linea<br>";
        echo "Inicio de comentario multilinea<br>";
        /* Esto es un comentario 
        multilinea (como en html)*/
        echo "Fin de comentario multilinea<br>";

        $x = 5 /* +5 */ + 5;
        echo $x."<br>";
    ?>
</body>
</html>