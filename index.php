<?php
    // echo "<hr>";
    // print_r(array_keys($_SERVER));
    // echo "<hr>";
    // echo $_SERVER['REQUEST_METHOD'];
    // echo "<hr>";
    // if (isset($_GET['name'])) {
    //     echo $_GET['name'];
    // } else {
    //     echo "nera ka spausdinti";
    // };

    $color = 'fff111';

    if (isset($_GET['color'])) {
        $color = $_GET['color'];
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
        background-color: #<?=$color?>;
    }  
</style>

<body>

<!-- <a href="./index.php">linkas, kur nuves ten pat</a> -->
<a href="./">Black</a>
<!-- <a href="?color=1">Red</a> -->

<form action="" method="get">
    <input type="text" name="color">
    <button type="submit">Dažyk</button>
</form>

</body>
</html>