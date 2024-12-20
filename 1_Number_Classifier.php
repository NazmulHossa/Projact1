<?php 

// Input a number
$number = readline("Enter a number: ");

// Classify the number
if ($number > 0) {
    echo "The number is positive.";
} elseif ($number < 0) {
    echo "The number is negative.";
} else {
    echo "The number is zero.";
}

