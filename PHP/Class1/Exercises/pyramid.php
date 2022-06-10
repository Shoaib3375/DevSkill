<?php

<<<<<<< HEAD
$in = readline("Enter number");
=======
$in = readline( "Enter a Number : " );
>>>>>>> 7f9983b577d5bc1cee7fcad84d109836aab954f9
for ( $i = 0; $i < $in; $i++ ) {

    for ( $j = 0; $j < $in - $i - 1; $j++ ) {
        echo "&nbsp;&nbsp;";
    }

    for ( $k = 0; $k < 2 * $i + 1; $k++ ) {
        echo "*";
    }
    echo "<br>";
}