<?php

/***
 * Desciption:Finding nearest number/numbers to Zero
 * Date:27th September,2019
 * Added By : Neha Khemchandani
 ***/

$number_arr = array(1,-1,-2,3,4,-3);
$curr = 0;                              //assigning 0 to $curr variable whose nearest number we need to find
$nearest = $number_arr[0];             // temporary assigning the array's first element to $nearest variable
sort($number_arr);                    // sorting the given input array
for($i=0;$i<count($number_arr);$i++){
    $curr = $number_arr[$i] * $number_arr[$i];  // calculating the new value of $current variable
    if($curr<=($nearest*$nearest)){             // comparing the current number value and nearest number value
        $negative_nearest = $nearest;           // getting the negative nearest number to 0
        $nearest = $number_arr[$i];             // getting the nearest number to 0
    }
}

// printing the output
if($nearest==$negative_nearest){
    echo "Nearest Number to zero is ". $nearest;
}else{
    echo "Nearest Numbers to zero are ". $nearest." , ".$negative_nearest;
}


?>