<?php
$age = (int) "10"; // Type Casting
$age1 = readline( "Please Enter your Age:" ); // Type Casting
// echo $age1;

$i = $age1 / 2;
var_dump( $i );

// echo $age;

// Array
$age_list = array( 18, 43, 56, 543, 'jamal', 54, null );
foreach ( $age_list as $item ) {
    echo $item;
}
// With Value
$age_list2 = array( 18, 43, 56, 543, 'jamal', 54, null );
$age_list2[7] = "li"; // We use array_push();
array_push( $age_list2, "with push" );
foreach ( $age_list2 as $key => $item2 ) {
    echo $key . " => " . $item2 . "<br>";
}
$person = [[
    'name'    => "Shakib",
    'age'     => 32,
    'run'     => 43453453,
    'economy' => 6.4,
],
    [
        'name'    => "fd",
        'age'     => 33,
        'run'     => 43,
        'economy' => 44,
    ]];

foreach ( $person as $p ) {
    echo $p["name"];
    echo $p["age"];
    echo $p["run"];
    foreach ( $p['economy'] as $e ) {
        echo "Economy -> " . $e;
    }
    echo "\n";
}