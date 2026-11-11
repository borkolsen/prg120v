<?php

include ("db-tilkobling.php");

$sqlSetning="SELECT * FROM klasse;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig å hente data fra databasen");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vis klasser</title>
</head>
<body>

<h1>Vis klasser</h1>

<?php

while ($rad=mysqli_fetch_array($sqlResultat)) 
{
    print($rad["klassekode"]);
    print(" "); 
    print($rad["klassenavn"]);
    print(" "); 
    print($rad["studiumkode"]); 
    print("<br>");
}

?>

<a href="index.php">Tilbake til hovedmeny</a>

</body>
</html>