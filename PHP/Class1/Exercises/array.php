<?php

$ext = 4;
$arr=array();
for ($i=0; $i <= $ext; $i++) { 
    $in = readline("Enter a num ");
    
    if (is_numeric($in)==1) {   
        array_push($arr,$in);
        
       
    }else{
        echo "Enterr a valid number\n"; 
        $ext++;
    }
}

sort($arr);


$b = max($arr);
echo "Max Number is $b  \n";
echo "Shorted array : ";
foreach ($arr as $val) {
  echo $val;
  echo ' ';
}
 

