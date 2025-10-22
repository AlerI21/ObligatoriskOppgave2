<?php /*dynamiske funksjoner*/

function listeboksKlassekode()
{
    include("db-tilkobling.php")  /*tilkobling til database-serveren utført og valg av database foretatt*/

    $sqlSetning="SELECT * FROM klassekode";
    $sqlResultat=mysqli_query($db, $sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
    
}