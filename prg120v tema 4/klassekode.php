<?php
$kode = $_POST["klassekode"];
$lovlig = true;

if (!$kode) {
    $lovlig = false;
    print ("Klassekode er ikke fylt ut<br>");
}
else if (strlen($kode) != 3) {
    $lovlig = false;
    print ("Klassekode må være 3 tegn<br>");
}
else {
    $del1 = substr($kode,0,2);
    $del2 = substr($kode,2,1);

    if (!ctype_alpha($del1)) {
        $lovlig = false;
        print ("De to første tegnene må være bokstaver<br>");
    }

    if (!ctype_digit($del2)) {
        $lovlig = false;
        print ("Det siste tegnet må være et siffer<br>");
    }
}

if ($lovlig) {
    print ("Klassekode er gyldig!");
}
?>
