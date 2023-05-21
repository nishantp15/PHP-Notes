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
        <label for="">Enter a number</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>

<?php
// $age = 16;

// if($age>18){
//     echo "You may enter the site";
// }
// elseif($age){
//     echo "You are not allowed to enter";
// }
// else{
//     echo "invalid age";

// }

// // logical operators
//   $temp = 25;
//   $cloudy = true;

//   if($temp>=0 && $temp<=33){
//     echo "Weather is good";
//   }else{
//     echo "weather is bad";
//   }

//   if(!$cloudy){
//     echo "It's sunny";
//   }

// // switch

// $grade = "B";

// switch ($grade) {
//     case "A":
//         echo "You did Great!";
//         break;
//     case "B":
//         echo "You did Well!";
//         break;
//     case "c":
//         echo "You did Fine!";
//         break;
//     case "F":
//         echo "You did Failed!";
//         break;
//     default:
//     echo "invalid";
// }

// $date = date("l");

// echo $date

// // loops

// for($i=0; $i<5; $i++){
//     echo $i . "<br>";
// };

// for($i=0; $i<5; $i+=2){
//     echo $i . "<br>";
// };

$counter = $_POST["counter"];

for($i = 0; $i < $counter; $i++){
    echo $i . "<br>";
}

?>
