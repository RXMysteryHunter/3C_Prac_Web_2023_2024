<?php
for ($i = 100; $i <= 125; $i += 5) {
    echo $i . ",";
}

echo "<br>";

// Pętla while
$i = 100;
while ($i <= 125) {
    echo $i . ",";
    $i += 5;
}

echo "<br>";

$i = 100;
do {
    echo $i . ",";
    $i += 5;
} while ($i <= 125);
?>
