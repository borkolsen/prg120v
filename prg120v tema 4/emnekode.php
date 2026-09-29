<?php
$kode = $_POST["emnekode"];
$lovlig = true;

if (!kode) {
    $lovlig = false;
    print ("Emnekode er ikke fylt ut<br>");
}
else if (strlen($kode) != 7) {
    $lovlig = false;
    print ("Emnekode må være 7 tegn<br>");
}
else {
    $del1 = substr($kode,0,3); // bokstaver
    $del2 = substr($kode,3,3); // siffer
    $del3 = substr($kode,6,1); // bokstav eller siffer

    if (!ctype_alpha($del1)) {
        $lovlig = false;
        print ("De tre første tegnene må være bokstaver<br>");
    }

    if (!ctype_digit($del2)) {
        $lovlig = false;
        print ("De tre neste tegnene må være siffer");
    }

    if (!ctype_alnum($del3)) {
        $lovlig = false;
        print ("Siste tegn må være bokstav eller siffer");
    }
}

if ($lovlig) {
    print ("Emnekode er gyldig!");
}
?>


