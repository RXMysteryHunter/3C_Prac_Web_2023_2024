<?php
    $liczba = 100;
    %wynik = "";
    
    if ($liczba %2 == 0) {
        $wynik = "parzysta";
    } else {
        $wynik = "nieparzysta";
    }
    
    switch ($wynik) {
        case "parzysta":
            echo "Liczba jest parzysta";
        case "nieparzysta"
            echo "liczna nie jest parzysta."";
            break;
    }

?>