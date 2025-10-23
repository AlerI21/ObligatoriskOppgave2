<?php /* dynamiske funksjoner */

function listeboksKlassekode()
{
    include("db-tilkobling.php"); // kobler til database

    $sqlSetning = "SELECT klassekode FROM klasse;"; 
    $sqlResultat = mysqli_query($db, $sqlSetning) 
        or die("ikke mulig &aring; hente data fra databasen");

    while ($rad = mysqli_fetch_array($sqlResultat)) {
        $klassekode = $rad["klassekode"];
        print("<option value='$klassekode'>$klassekode</option>");
    }
}
?>