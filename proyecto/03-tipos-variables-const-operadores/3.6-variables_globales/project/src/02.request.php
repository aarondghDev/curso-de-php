<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>$_REQUEST</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">  
    <input submit type="submit" >  
</form> 
    
<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_REQUEST['fname'];
        // if(empty($name)){
        if(empty($name)){
            echo 'Name is empty<br>';
        }else {
            echo $name.'<br>';
        }
        }
?>
<a href='./index.php'>Go to index<br></a>
<a href='./01.server.php'>Go to 01.server.php</a>
</body>
</html>