<?php
// Palindrome Done
for ( $i = 100; $i < 10000; $i++ ) {
    $n = $i;
    $rev = 0;
    while ( $n > 0 ) {
        $rem = $n % 10;
        $rev = ( $rev * 10 ) + $rem;
        $n = ( $n - $rem ) / 10;
    }
    if ( $i == $rev ) {
        echo $i . " is a Palindrome number";
    }
}