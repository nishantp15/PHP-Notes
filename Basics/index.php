<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="">x:</label>
        <input type="text" name="x"> <br>
        <label for="">y:</label>
        <input type="text" name="y"> <br>
        <label for="">z:</label>
        <input type="text" name="z"><br>
        <input type="submit" name="calculate">
    </form>
</body>

</html>

<?php

    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];

    $value = null;
    // $value = abs($x);
    // $value = round($x);
    // $value = floor($x);
    // $value = ceil($x);
    // $value = round($x);
    // $value = pow($x, $y);
    // $value =sqrt($x);
    // $value =max($x, $y, $z);
    // $value =sqrt($x, $y, $z);
    // $value =pi();
    // $value =rand(1,8);
    echo $value;


    $circumference = null;
    $circumference = 2*pi()*$x;
    $circumference = round($circumference, 2);
    echo $circumference







?>