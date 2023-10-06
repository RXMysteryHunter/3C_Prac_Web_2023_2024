<?php 
$liczba1 = 2;
$liczba2 = 3;
$liczba3 = 4;

$najmniejsza = $liczba1;

if ($liczba2 < $najmniejsza) {
    $najmniejsza = $liczba2;
}

if ($liczba3 < $najmniejsza) {
    $najmniejsza = $liczba3;
}

echo "najmniejsza liczba to " . $najmniejsza;
?>