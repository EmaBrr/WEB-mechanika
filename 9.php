<?php
$color = 'black';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = 'white';
    echo count($_POST['a']);
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
        background-color: <?=$color?>;
    }
</style>

<body>
<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>
    <form action="" method="POST">

    <?php 
        for ($i=0; $i < rand(3, 10); $i++) { 
            echo "<input type='checkbox' name='a[]' id=''>";
        }
    ?>
        <button type="submit">count boxes</button>
    </form>

<?php } ?>
</body>
</html>