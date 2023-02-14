<?php
/*
Write a PHP program to check whether a given positive integer is a power of three. 
Input : 9
Output : 9 is power of 3


*/
function is_power_of_three($number)
{
    $x = $number;
    while ($x % 3 == 0) {
        $x /= 3;
    }

    if ($x == 1) {
        return "$number is power of 3";
    } else {
        return "$number is not power of 3";
    }
}
print_r(is_Power_of_three(9) . "\n");
print_r(is_Power_of_three(81) . "\n");
print_r(is_Power_of_three(21) . "\n");
