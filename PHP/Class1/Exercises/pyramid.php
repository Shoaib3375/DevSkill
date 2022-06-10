<?php

$in = readline( "Enter a Number : " );
for ( $i = 0; $i < $in; $i++ ) {

    for ( $j = 0; $j < $in - $i - 1; $j++ ) {
        echo "&nbsp;&nbsp;";
    }

    for ( $k = 0; $k < 2 * $i + 1; $k++ ) {
        echo "*";
    }
    echo "<br>";
}