<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . " oraz pierwiastek z " . $i . " to " . sqrt($i) . "<br>";
}

echo "<br>";

$i = 1;
while ($i <= 10) {
    echo $i . " oraz pierwiastek z " . $i . " to " . sqrt($i) . "<br>";
    $i++;
}

echo "<br>";

$i = 1;
do {
    echo $i . " oraz pierwiastek z " . $i . " to " . sqrt($i) . "<br>";
    $i++;
} while ($i <= 10);
?>
