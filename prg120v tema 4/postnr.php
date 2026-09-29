<?php
$postnr = $_POST["postnr"];
$lovlig = true;

if (!$postnr) {
    $lovlig = false;
    print ("Postnummer er ikke fylt ut<br>");
}
else if (strlen($postnr) != 4) {
    $lovlig = false;
    print ("Postnummer må være 4 tegn<br>");
}
else if (!ctype_digit($postnr)) {
    $lovlig = false;
    print ("Postnummer må kun inneholde siffer<br>");
}

if ($lovlig) {
    print ("Postnummer er gyldig!");
}
?>

