<?php

/* 
Write a PHP program to check whether a given positive integer is a power of two.
Input : 4
Output :4 is power of 2

If $n = 8$, then the binary representation of $n$ is 1000.

To compute $n & (n-1)$, we first need to compute $n-1$, which is equal to 7 in this case. The binary representation of 7 is 0111.

Next, we perform the bitwise AND operation between 1000 and 0111, as follows:

    1000 (n)
&   0111 (n-1)
    ------
    0000
    ------
The result of the bitwise AND operation is 0, which means that $n & (n-1)$ is equal to 0.

Mathematically, we can interpret this as follows: the binary representation of $n$ has only one set bit, which is the fourth bit from the right (corresponding to the digit 8 in decimal notation). When we subtract 1 from $n$, we get a binary number that has all the bits to the right of this set bit flipped, and the set bit itself cleared. In this case, the resulting binary number is 0111, which has no bits in common with the binary representation of $n$. Therefore, the bitwise AND operation between $n$ and $n-1$ clears all the bits in $n$, leaving us with 0.

Since $n & (n-1) = 0$, we can conclude that 8 is a power of 2.
*/

function is_Power_of_two($n)
{
    if (($n & ($n - 1)) == 0) {
        return "$n is power of 2";
    } else {
        return "$n is not power of 2";
    }
}
print_r(is_Power_of_two(4) . "\n");
print_r(is_Power_of_two(36) . "\n");
print_r(is_Power_of_two(16) . "\n");
