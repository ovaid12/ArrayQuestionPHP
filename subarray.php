<?php

$arr = array(1,4,8,9,2,5,7,-1, -7, 17);
for($i=0; $i<count($arr); $i++){
	$curr=$arr[$i];
	for($j=$i+1; $j<count($arr); $j++){

        	if($curr+$arr[$j]==10){
                echo  "[" . $curr ."," . $arr[$j]."]" ;
                echo "\n";
            }
        
	}
}


?>