<?php
// Fibonacci Done
$limit = readline( "Enter a number: " );
$n1 = 0;
$n2 = 1;
$num = 0;
for ( $i = 0; $i < $limit; $i++ ) {
    echo $n1;
    $n1 = $n1 + $n2;
    $n2 = $num;
    $num = $n1;
}