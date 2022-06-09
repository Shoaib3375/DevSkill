<?php
$input = 0;
$i = 0;
$input = readline( "Enter a number: " );
if ( $input == 0 || $input == 1 ) {
    echo "$input is not a prime number";
} else if ( $input % 2 == 0 ) {
    echo "Prime number";
} else if (  ( $input ) == false ) {
    echo "Not a positive Integers";
} else {
    echo "$input is not a prime number";
}