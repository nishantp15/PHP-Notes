<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="get">
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
        <label for="">password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="login">
    </form>

    <form action="index.php" method="post">
        <label for="">Username</label><br>
        <input type="text" name="username1"><br>
        <label for="">password</label><br>
        <input type="password" name="password1"><br>
        <input type="submit" value="login">
    </form>
</body>

</html>

<?php
// echo "test";

//$_GET, $_POST = Used to collect data from HTML form
// data is sent to the file in the action attribute of foem

// $_GET = Data is appended to the url >not secure >char limit
// bookmark is possible w/ values
// better for search page
//$+POST = Data is packed inside the body of the HTTP Request
//        More secure, No data limit, better for credentials, no caching

    echo $_GET["username"] . "<br>"; //use this string concat to give break
    echo $_GET["password"] . "<br>";

    //another way to do it

    echo "{$_GET["username"]} <br>";
    echo "{$_GET["password"]} <br>";

    // POST

    echo "{$_POST["username1"]} <br>";
    echo "{$_POST["password1"]} <br>";



?>