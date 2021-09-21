<?php
/*$arr = explode(' ', readline('enter the elements: '));

print_r($arr);
echo "\n";
print_r(count($arr));
echo "\n";*/




$n = (int)readline('enter the no of elements: ');
$arr = array();
for($i=0; $i<$n; $i++){
    $curr=(int)readline('Enter the value: ');
    array_push($arr, $curr);
}
//print_r($arr);
print_r(count($arr));
echo "\n";



?>