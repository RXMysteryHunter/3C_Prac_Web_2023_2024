<?php
function funkcja($x)
{
    
    return $x * $x - 4; 

function sekcja($funkcja, $poczatek, $koniec, $dokladnosc)
{
    $start = $poczatek;
    $end = $koniec;

    while (($end - $start) >= $dokladnosc) {
        $srodek = ($start + $end) / 2;

        if ($funkcja($srodek) == 0.0 || abs($end - $start) < $dokladnosc) {
            return $srodek;
        }

        if ($funkcja($srodek) * $funkcja($start) < 0) {
            $end = $srodek;
        } else {
            $start = $srodek;
        }
    }

    return ($start + $end) / 2;
}

$wynik = sekcja("funkcja", -2, 2, 0.0001);
echo "Przybliżona wartość miejsca zerowego: " . $wynik;
?>
