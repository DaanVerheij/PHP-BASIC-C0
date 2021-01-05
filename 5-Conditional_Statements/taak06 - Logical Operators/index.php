<!DOCTYPE html>
<html>
<body>

<?php
$test1 = 5;
$test2 = 10;

if($test1 < 10 && $test2 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!";
}
echo "<br>";
if($test1 == 5 || $test2 == 10) {
    echo "het getal is 5";
} else {
    echo "het getal is 10";
}
echo "<br>";
if($test1 < 5 xor $test2 == 10) {
    echo "het getal is 5";
} else {
    echo "het getal is 10";
}
?>

</body>
</html> 