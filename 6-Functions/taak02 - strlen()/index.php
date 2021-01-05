<!DOCTYPE html>
<html>
<body>

<?php
function mijnNaamIsGroot(){
    $voornaam = "Daan";
    $achternaam = "Verheij";
    $geheleNaam = "Mijn naam is $voornaam $achternaam";
    $geheleNaam = strtoupper($geheleNaam);
        echo $geheleNaam;
}
mijnNaamIsGroot();

?>

</body>
</html> 