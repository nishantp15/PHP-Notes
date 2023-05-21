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

$grade = "B";

switch ($grade) {
    case "A":
        echo "You did Great!";
        break;
    case "B":
        echo "You did Well!";
        break;
    case "c":
        echo "You did Fine!";
        break;
    case "F":
        echo "You did Failed!";
        break;
    default:
    echo "invalid";
}
