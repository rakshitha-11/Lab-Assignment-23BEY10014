<?php
function factorial($n) {
    $fact = 1;
    for($i=1; $i<=$n; $i++) {
        $fact *= $i;
    }
    return $fact;
}

function isPrime($num) {
    if($num < 2) return "Not Prime";
    for($i=2; $i<=sqrt($num); $i++) {
        if($num % $i == 0) return "Not Prime";
    }
    return "Prime";
}

function reverseString($str) {
    return strrev($str);
}

// Sample calls
echo "Factorial of 5: ".factorial(5)."<br>";
echo "7 is: ".isPrime(7)."<br>";
echo "Reverse of Hello: ".reverseString("Hello");
?>