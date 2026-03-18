<?php

$num1 = 9;
$num2 = 8;
$num3 = 7;

$media= ($num1+$num2+$num3)/3;

if($media < 7){
    echo "Reprovado! | Média: $media";
}

else{
    echo "Aprovado! | Média: $media";
}

?>