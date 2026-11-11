<?php

include ("db-tilkobling.php");

if (isset($_POST["brukernavn"]))
{
    $brukernavn = $_POST["brukernavn"];

    $sqlSetning="DELETE FROM student WHERE brukernavn='$brukernavn'";
    
    mysqli_query($db,$sqlSetning) or die ("ikke mulig å slette data fra databasen");
}

$sqlSetning="SELECT * FROM student";

$sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig å hente data fra databasen");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slett student</title>
</head>
<body>

<h1>Slett student</h1>

<form method="post">

<select name="brukernavn">

<?php

while ($rad=mysqli_fetch_array($sqlResultat)) 
{
    print("<option value='".$rad["brukernavn"]."'>");
    print($rad["fornavn"]);
    print(" ");
    print($rad["etternavn"]);
    print("</option>");
}

?>

</select>

<br><br>

<input type="submit" value="Slett">

</form>

<a href="index.php">Tilbake til hovedmeny</a>

</body>
</html>