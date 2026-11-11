<?php

include ("db-tilkobling.php");

if (isset($_POST["klassekode"]))
{
    $klassekode = $_POST["klassekode"];
    $klassenavn = $_POST["klassenavn"];
    $studiumkode = $_POST["studiumkode"];

    $sqlSetning="INSERT INTO klasse VALUES('$klassekode','$klassenavn','$studiumkode')";
    
    mysqli_query($db,$sqlSetning);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrer klasse</title>
</head>
<body>

<h1>Registrer klasse</h1>

<form method="post">

Klassekode: <input type="text" name="klassekode">

<br><br>

Klassenavn: <input type="text" name="klassenavn">

<br><br>

Studiumkode: <input type="text" name="studiumkode">

<br><br>

<input type="submit" value="Registrer">

</form>

<br> 

<a href="index.php">Tilbake til hovedmeny</a>
    
</body>
</html>