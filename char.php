<?php

$str = "i am a string";
$arr = array();

for($i=0; $i<strlen($str); $i++){
    $count=1;
    $curr=$str[$i];
    if(in_array($curr, $arr)){
       continue;
}
else{
    array_push($arr, $curr);

    for($j=$i+1; $j<strlen($str); $j++){
        
        if($curr == $str[$j]){
            $count++;
        }
    }
}
    
    print_r("Count of  ".$curr." => ".$count);
    echo "\n";
}



?>