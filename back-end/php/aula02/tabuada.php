<?php

$numeros = [1, 2, 3, 4, 5];

foreach($numeros as $numero){
    
    echo "Tabuado do $numero:<br>";
    
    for($i = 1; $i <= 10; $i++){
        $tabuada = $numero * $i;
        echo "$numero x $i = $tabuada<br>";
    }
};

?>