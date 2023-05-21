<?php

// array = variable that can hold more than one value at a time

$foodsArray = array("Apple", "Orange", "Banana", "kiwi", "Berry");

echo $foodsArray[0] . "<br>"; // we can not directly print an array, we acces them by index

// indexing starts from 0 and goes upto n-1;

// to change the elemnt of array
$foodsArray[0] = "Pineapple";

// push
array_push($foodsArray, "coconut");
array_pop($foodsArray);
array_shift($foodsArray);
$revered = array_reverse($foodsArray); //reverse returns an array
echo count($foodsArray); // to count array size

foreach($foodsArray as $ele){
    echo $ele ."<br>";
};


?>