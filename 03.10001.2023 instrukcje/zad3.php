<?php
$kategoria = "odziez";

$cena_elektroniki = 1000;
$cena_odziezy = 50;
$cena_pieczywa = 5;

$podatek_elektroniki = 0.23;
$podatek_odziezy = 0.08;
$podatek_pieczywa = 0.05;

switch ($kategoria) {
    case "elektronika":
        $cena_z_podatkiem = $cena_elektroniki * (1 + $podatek_elektroniki);
        echo "Cena elektroniki z podatkiem: " . $cena_z_podatkiem;
        break;
        
    case "odziez":
        $cena_z_podatkiem = $cena_odziezy * (1 + $podatek_odziezy);
        echo "Cena odzieży z podatkiem: " . $cena_z_podatkiem;
        break;

        
    case "pieczywo":
        $cena_z_podatkiem = $cena_pieczywa * (1 + $podatek_pieczywa);
        echo "Cena pieczywa z podatkiem: " . $cena_z_podatkiem;
        break;
    default:
        echo "Nieznana kategoria produktu: " . $kategoria;
}
?>
