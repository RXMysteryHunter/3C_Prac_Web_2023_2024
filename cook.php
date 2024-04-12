
<?php
$cookie_name = "username";
$cookie_value = "Maks Frelik";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

echo "Imię i nazwisko: " . $cookie_value;
?>

<br>
<?php
$cookie_name = "username";
$cookie_value = "Krzys Krzys";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

echo "Imię i nazwisko: " . $cookie_value;
?>

<br>


<?php
$cookie_name = "username";
$cookie_value = "Krzys Krzys";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

echo "Imię i nazwisko: " . $cookie_value;
?>

<br>


<?php
$cookie_name = "username";
$cookie_value = "Krzys Krzys";
setcookie($cookie_name, $cookie_value, time() + (-86400 * 30), "/");

echo "Imię i nazwisko: " . $cookie_value;
?>

<br>

<?php
$cookie_name = "visits";
$visits = 1;

if(isset($_COOKIE[$cookie_name])) {
    $visits = $_COOKIE[$cookie_name] + 1;
}

setcookie($cookie_name, $visits, time() + (86400 * 30), "/");

echo "Liczba odwiedzin: " . $visits;

if($visits >= 10) {
    echo " Gratulacje! Osiągnąłeś/aś 10 odwiedzin!";
}
?>

<br>

<?php
$cookie_name = "visit_count";

if(!isset($_COOKIE[$cookie_name])) {
    $visit_count = 1;
    setcookie($cookie_name, $visit_count, time() + (86400 * 30), "/");
} else {
    $visit_count = $_COOKIE[$cookie_name] + 1;
    setcookie($cookie_name, $visit_count, time() + (86400 * 30), "/");
}

echo "Liczba odwiedzin: " . $visit_count;
?>


