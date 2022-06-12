<?php

$ext = 4;
$arr=array();
for ($i=0; $i <= $ext; $i++) { 
    $in = readline("Enter a num ");
    $ab = $in;
    if ($ab <0 ) {
        $ab *= -1;
    }
    if (ord($ab)>=48 && ord($ab)<=57) {   
        array_push($arr,$in);
        
       
    }else{
        echo "Enterr a valid number\n"; 
        $ext++;
    }
}

sort($arr);
// print_r($arr);
// echo "\n";

$b = max($arr);
echo "Max Number is $b  \n";

foreach ($arr as $val) {
  echo $val;
  echo ' ';
}
 

// for ($j=1; $j <= 4; $j++) { 
//    if ( $arr[$j] < $arr[$j-1]) {
//     $term = $arr[$j];
//     $arr[$j] = $arr[$j-1];
//     $arr[$j-1] = $term;
//    }
// }

// $max = $arr[0];

// for ($k=1; $k <=4; $k++) { 
//     if ($max < $arr[$k]) {
//         $max = $arr[$k];
//     }
// }
// echo "Max ". $max;

