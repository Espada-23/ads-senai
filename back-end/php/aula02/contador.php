<?php

$i = 1;

while ($i <= 30) {
    if($i % 3 == 0 && $i % 5 == 0){
        echo "BUM-CLAP<br>";
    }
    elseif($i % 3 == 0){
        echo "BUM<br>";
    }
    elseif($i % 5 == 0){
        echo "CLAP<br>";       
    }
    else{
        echo "$i<br>";     
    }
    $i++;
}
?>