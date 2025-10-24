<?php /*vis-alle-studenter*/
/*
/* Programmet skriver ut alle registrerte studenter*/
	
include("db-tilkobling.php"); /*Tilkobling til databaseserveren er etablert, og ønsket database er valgt*/

$sqlSetning="SELECT * FROM student;";

$sqlResultat=mysqli_query($db, $sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
/*SQL-setning sendt til database-serveren */

$antallRader=mysqli_num_rows($sqlResultat); /*Beregner antall rader i resultatet*/

print ("<h3>Registrerte studenter</h3>");
print ("<table border=1>");
print ("<tr><th align=left>brukernavn</th> <th align='left'>fornavn</th> <th align=left>etternavn</th><th align=left>studiumkode</th></tr>");

for ($r=1;$r<=$antallRader;$r++)
{
    $rad=mysqli_fetch_array($sqlResultat); /*ny rad hentet fra spørringsresultatet*/
    $brukernavn=$rad ["brukernavn"];
    $fornavn=$rad ["fornavn"];
    $etternavn=$rad ["etternavn"];
    $klassekode=$rad ["klassekode"];

    print ("<tr> <td> $brukernavn </td> <td> $fornavn </td> <td> $etternavn </td> <td> $klassekode </td> </tr>");

}

print("</table>");

?> 
