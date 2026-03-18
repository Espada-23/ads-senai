<?php

$notas = [8.5, 7.0, 9.5, 6.0, 8.0, 5.5, 7.5, 9.0, 6.5, 8.0];

$maior_nota = max($notas);
$menor_nota = min($notas);

$media = array_sum($notas) / count($notas);

echo "A partir das notas listadas: " . implode(", ", $notas) . "<br><br>";
echo "A maior nota é: $maior_nota<br>";
echo "A menor nota é: $menor_nota<br>";
echo "A média da turma é: $media<br>";

?>