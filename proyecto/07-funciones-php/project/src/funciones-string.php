<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de strings</title>
</head>
<body>
    <h1>Funciones de strings:</h1>
    <h2>Longitud de la cadena: 'strlen()'</h2>
    <?php
    // Longitud de la cadena
    $txt = "Helloxx world";
    echo "La cadena de ejemplo es: '$txt'<br/>";
    $strlength = strlen($txt);
    echo "strlen() = " .$strlength;
    ?>

<h2>Numero de palabras de la cadena: 'str_word_count()'</h2>
    <?php
    // Numero de palabras
    $txt = "Helloxx world";
    echo "La cadena de ejemplo es: '$txt'<br/>";
    $str_word_count = str_word_count($txt);
    echo "str_word_count() = " .$str_word_count;
    ?>

<h2>Invetir un string: 'strrev()'</h2>
    <?php
    // Invetir un string
    $txt = "Helloxx world";
    echo "La cadena de ejemplo es: '$txt'<br/>";
    $strrev = strrev($txt);
    echo "strrev() = " .$strrev;
    ?>

<h2>Buscar una coincidencia: 'strpos()'</h2>
<p>ESta necesita dos argumentos, la cadena que vamos a revisar y lo que queremos que consiga/coincida</p>
    <?php
    // Invetir un string
    $txt = "Helloxx world";
    echo "La cadena de ejemplo es: '$txt'<br/>";
    $str_pos = strpos($txt, "w");
    echo "strpos() = " .$str_pos;
    ?>

<h2>Reemplazar un contenido: 'strreplace()'</h2>
<p>ESta necesita tres argumentos, lo que queremos cambiar, por lo que queremos que lo cambie y por ultimo donde hacer le cambio(la variable)</p>
    <?php
    // Reemplazar un contenido
    $txt = "Helloxx world";
    echo "La cadena de ejemplo es: '$txt'<br/>";
    $str_replace = str_replace("world", "place", $txt);
    echo "str_replace() = " .$str_replace;
    ?>

<br/>
<a href='./index.php'>Go to index.php<br></a>
<a href='./funciones-numeros.php'>Go to funciones-numeros.php<br></a>

</body>
</html>