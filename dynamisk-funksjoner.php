<?php /*dynamiske funksjoner*/

function listeboksKlassekode()
{
    include("db-tilkobling.php")  /*tilkobling til database-serveren utført og valg av database foretatt*/

    $sqlSetning="SELECT * FROM klasse;";
    $sqlResultat=mysqli_query($db, $sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
    /*SQL-setning sendt til database-serveren*/
    while ($rad=mysqli_fetch_array($resultat))
    {
        $kode=$rad["klassekode"];
        print("<option value='$kode'>$kode</option>");
    }

    /*$klassekode = $rad["klassekode"];*/
}