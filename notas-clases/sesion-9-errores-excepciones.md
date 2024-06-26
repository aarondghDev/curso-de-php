errores-excepciones: ver en 'proyecto\09-errores-excepciones\project\src\errores.php'

Se pueden capturar los errores de distintas formas, una de ellas son los 'logs' que estaria en una carpeta en "proyecto\09-errores-excepciones\log" al entrar en esta carpeta entramos en "nginx"->"error.log", y aqui ya podriamos ver el error/errores generados (tendrias que buscarlo en este archivo).

Otra forma de ver estos errores seria atraves de los contenedore, en la terminar(dentro de la carpeta en la que estamos trabajando) ponemos "docker ps ^C"-> "docker logs --tail 1000 -f php_8_app" el "php_8_app" es el nombre que le dimos a nuestra imagen en "proyecto\09-errores-excepciones\docker-compose.yaml" y esto varia dependiendo de el nombre qu ele pongamos alli.

Otra forma de hacerlo (en desarrollo, nunca en produccion) seria con "error_reporting"
---------------------------------------------------
error-reporting: es un metodo que informa sobre el error producido, tiene una variable que define el tipo de errores que estamos mostrando

ver en 'proyecto\09-errores-excepciones\project\src\errores_reporting.php'
---------------------------------------------------
try catch: excepciones.
Que son las excepcions, son objetos que describen un error o comportamiento inesperado dentro del script de php, hay que tener en cuenta que las excepciones serian llamadas por muchas funciones y clases fuera de nuestro codigo.

Las funciones y las clases definidas por los usuarios pueden lanzar excepcions y esto es lo ideal para evitar sorpresas.
---------------------------------------------------
## Jerarquía de errores

* Throwable
  * ​Error
    * Arithmetic Error
  * DivisionByZeroError
* ParseError 
  * Exception

```php
class Exception
{
    protected $message = 'Unknown exception';   // mensaje de excepción
    private   $string;                          // caché de __toString
    protected $code = 0;                        // código de excepción definido por el usuario
    protected $file;                            // nombre de archivo fuente de la excepción
    protected $line;                            // línea fuente de la excepción
    private   $trace;                           // determinación del origen
    private   $previous;                        // excepción previa si la excepción está anidada

    public function __construct($message = null, $code = 0, Exception $previous = null);

    final private function __clone();           // Inhibe la clonación de excepciones.

    final public  function getMessage();        // mensaje de excepción
    final public  function getCode();           // código de excepción
    final public  function getFile();           // nombre de archivo fuente
    final public  function getLine();           // línea fuente
    final public  function getTrace();          // un array de backtrace()
    final public  function getPrevious();       // excepción anterior
    final public  function getTraceAsString();  // string formateado del seguimiento del origen

    // Sobrescribible
    public function __toString();               // string formateado para mostrar
}
```

sentencia `throw` que lanzaría la excepción.

sintaxis 
```php
try{
  // código a ejecutar
}catch(Exception $e){
  // instrucciones a ejecutar en caso de fallo del proceso
}finally {
  // instrucciones a ejecutar siempre al finalizar el proceso (falle o no)
}
```

## El objeto Exception

```php
new Exception(mensaje, código, anterior)
```

### Parámetros

| Parámetro  | Descripción |
|------------|-------------|
| `message`  | _opcional_ una cadena que describe por que se lanzó la excepción |
| `code`     | _opcional_ un número entero que puede utilizarse para distinguir facilmente esta excepción de otras del mismo tipo |
| `previous` | _opcional_ si esta excepción fue lanzada en un bloque `catch` de otra excepción, se recomienda pasar esa excepción en este otro parámetro |


### Métodos de los que disponemos

| Métodos    | Descripción |
|------------|-------------|
| `getMessage()`  | 
---------------------------------------------------------------
throw: seria la encargada de lanzar la excepcion

ver en 'proyecto\09-errores-excepciones\project\src\try_catch.php' y tambien estara el ejemplo de try catch
---------------------------------------------------------------


---------------------------------------------------------------
documentacion de la clase
https://github.com/Open-Bootcamp/PHP/tree/master/09.errores_y_excepciones

31.29