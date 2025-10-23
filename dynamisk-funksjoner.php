<?php /*dynamiske funksjoner*/

function listeboksKlassekode()
{
    include("db-tilkobling.php");  /*tilkobling til database-serveren utført og valg av database foretatt*/

    $sqlSetning="SELECT * FROM klasse;";
    $sqlResultat=mysqli_query($db, $sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
    /*SQL-setning sendt til database-serveren*/

    $antallRader = mysqli_num_rows($sqlResultat);

    for ($r=1;$r<=$antallRader;$r++)
    {
        $rad=mysqli_fetch_array($sqlResultat);
        $klassekode=$rad["klassekode"];

         print("<option value='$klassekode'>$klassekode</option>");
    }

    

}