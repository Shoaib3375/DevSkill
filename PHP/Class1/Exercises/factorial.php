<?php
// Solved done
$num = readline( "Enter a number: " );
$fact = 1;

if ( is_numeric( $num ) == false ) {
    echo "Not a Positive Integer Number";
}elseif ($num < 0) {
    echo "Not a Positive Integer Number";
} 
else if ( $num >= 0 ) {
    for ( $i = $num; $i >= 1; $i-- ) {
        $fact *= $i;
    }
    echo "Factorial of $num is $fact";
}