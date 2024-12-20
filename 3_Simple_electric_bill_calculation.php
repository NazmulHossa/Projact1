<?php

$units = (float)readline("Enter the number of units consumed: ");
$bill = 0;


if ($units > 200) {
    $bill = ($units - 200) * 15 + 100 * 10 + 100 * 5;
} elseif ($units > 100) {
    $bill = ($units - 100) * 10 + 100 * 5;
} else {
    $bill = $units * 5;
}


echo "The total electricity bill is: $" . $bill;

