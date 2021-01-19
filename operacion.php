<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mayor o menor</title>
</head>
<body  style="background: url('949a4ab1d9fe846768c6d45a54a4143c.jpg') no-repeat; background-size: 500px;>
<?php
    $e=$_POST['edad'];
    if($e>=18){
        echo"es mayor de edad";
    }
    else{
        echo"es menor de edad";
    }

?>
</body>
</html>