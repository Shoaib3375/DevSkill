<?php
function check_prime( $num )
{
    if ( $num == 1 ) {
        return 0;
    }
    for ( $i = 2; $i <= $num / 2; $i++ ) {
        if ( $num % $i == 0 ) {
            return 0;
        }
    }
    return 1;
}

$num = readline( "Enter a positive number: " );

$flag_val = check_prime( $num );
if ( $num < 0 ) {
    echo "Enter a positive integer Number";
} else if ( $num == 0 || $num == 1 ) {
    echo "$num is not a prime number";
} else if ( $flag_val == 0 ) {
    echo "$num is not a prime number";
} else {
    echo "$num is a prime number";
}