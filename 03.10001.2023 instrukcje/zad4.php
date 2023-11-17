<?php
$year = 1901;
if (($rok % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo "Rok " . $year . " jest przestępny.";

} else {
    echo "Rok " . $year . " nie jest przestępny.";
    
    if($rok >0){
        echo"rok nie może byc ujemny";
    }
}
$Century = ceil($year / 100);
echo"stulecje". $Century;
?>