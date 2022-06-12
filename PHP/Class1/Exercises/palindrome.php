<?php
// Palindrome Done
for ( $i = 100; $i < 10000; $i++ ) {
    $n = $i;
    $reverse = 0;
    while ( $n > 0 ) {
        $remainder = $n % 10;
        $reverse = ( $reverse * 10 ) + $remainder;
        $n = ( $n - $remainder ) / 10;
    }
    if ( $i == $reverse ) {
        echo $i . " is a Palindrome number \n";
    }
}