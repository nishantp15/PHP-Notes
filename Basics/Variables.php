<?php
    //variable =a reusable container that holds data like integer, string
    // float, boolean
    $name = "Nishant";
    $food = "Apple";
    echo $name;
    echo"<br>"; 
    echo "Hello {$name} <br>"; //br is line break
    echo "I like {$food} <br>";

    //integers
    $age = 22;
    echo "You are {$age} years old <br>";
    

    //floats

    $gpa = 4.8;
    echo "Your gpa is {$gpa} <br>";

    $price = 20.8;
    echo "Your food is \${$price} <br>"; // to show doolar as output we need a escape sequence and backslash is used to do that

    //booleans
    $employed = true;

    echo "Online status: {$employed} <br>"; // for true output is 1 and for false output is nothing

    $x = 5;
    $y = 8;
    $mult = null;
    $mult = $x * $y;
    echo"{$mult} <br>";


    ///////////////////////////////////////////////////////////////

    //Arithmatic operators
    //+ - * / ** %

    //Increment/decrement operators
    // ++, -- same as java

    // Operator Precedence sequence:
    //()
    //**
    // * / %
    //+ -

    $a = 10;
    $b = 2;
    $z = null;
    //for power
    $z = $a ** $b;
    echo $z;
    echo"<br>";
    $z = $a % $b;
    echo $z; // previous value overwritten

    // increment
    $z+=5;
    echo "<br> new increment = {$z}";

    //operator precedence

    $total = 1 + 2 - 3 * 4 / 5 ** 6;

    echo "<br> TOTAL: {$total}";

?>