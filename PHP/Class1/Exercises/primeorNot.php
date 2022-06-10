<?php
$num = readline("Enter a number: ");
$Count = 0;
for ($i=2; $i < $num; $i++) { 
    if($num % $i == 0){
        
        break;
    }
}if ($Count ==0) {
    echo "Prime Number";
}else{
    echo "Not Prime";
}