<?php
for ($i = 100; $i >= 90; $i -= 2) {
    echo $i . ",";
}

echo "<br>";

echo "Odd numbers: ";
$i = 101;
while ($i > 90) {
    echo $i . ",";
    $i -= 2;
}

echo "<br>";

echo "Even numbers: ";
$i = 100;
do {
    echo $i . ",";
    $i -= 2;
} while ($i >= 90);
?>
