<?php 
$wiek = 21

switch (true) {
    case $wiek <11:
        echo "jestes dzieckiem";
    case $wiek >=11 && $wiek <= 17:
        echo "jestes nastolatkiem";
        break;
    default:
        echo "jestes dorosly";    
}
?>