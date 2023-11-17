<?php
$bokA = 65;
$bokB = 1;
$bokC = 65;

if($bokC^2 == $bokB^2 + $bokA^2)
echo"jest prostokątny";

if($bokC^2 < $bokB^2 + $bokA^2)
echo"jest ostrokatny";

if($bokC^2 > $bokB^2 + $bokA^2)
echo"jest rozwartokatny";

if($bokA<=0|| $bokB<=0 || $bokC<=0){
    echo "Boki maja zle dlugosci";
}
?>