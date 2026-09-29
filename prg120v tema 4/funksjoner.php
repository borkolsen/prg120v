<?php
function validerPostnr($postnr) {
    if (!$postnr) return false;
    if (strlen($postnr) != 4) return false;
    if (!ctype_digit($postnr)) return false;
    return true;
}

function validerKlassekode($kode) {
    if (!$kode) return false;
    if (strlen($kode) != 3) return false;

    $del1 = substr($kode,0,2);
    $del2 = substr($kode,2,1);

    if (!ctype_alpha($del1)) return false;
    if (!ctype_digit($del2)) return false;

    return true;
}
?>

