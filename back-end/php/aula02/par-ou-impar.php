<?php

$numeros = [1, 234, 38, 454, 567, 67, 79, 86, 59, 10];
$pares = 0;
$impares = 0;

foreach($numeros as $numero) {
    if($numero % 2 == 0){
       $pares = $pares + 1;
    }
    else{
        $impares = $impares + 1;
    }
}

echo "Dos números listados: " . implode(", ", $numeros) . "<br><br>";
echo "$pares são pares e $impares são impares.";

?>