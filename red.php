<?php

if(isset($_GET['redirect'])){
    header('location:./blue.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body{
        background-color: red;
    }
</style>

<body>
    <a href="?redirect=1">blue</a>
</body>
</html>