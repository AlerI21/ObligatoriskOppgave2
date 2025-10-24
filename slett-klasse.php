<?php /*slett-klasse*/
/*
/* Programmet lager et skjema for å velge en klasse som skal slettes
/* Programmet sletter det valgte poststedet*/
?>

<script src="funksjoner.js"> </script>

<h3>Slett klasse</h3>

<form method="post" action="" id="slettKlasseSkjema" name="slettKlasseSkjema" onSubmit="return bekreft()">
 Klassekode
<select name="klassekode" id="klassekode">
    <option value ="">velg klassekode</option>
    <?php
    include("db-tilkobling.php");
    $sqlSetning="SELECT * FROM klasse;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
        while ($rad = mysqli_fetch_array($sqlResultat))
            {
                $kode=$rad["klassekode"];
                print("<option value='$kode'>$kode</option>");
            }
            ?>
</select>
<input type="submit" value="Slett klasse" name="slettKlasseKnapp" id="slettKlasseKnapp" /> 
</form>

<?php
if (isset($_POST ["slettKlasseKnapp"]))
{
    $klassekode=$_POST ["klassekode"];
    

    if (!$klassekode)
    {
        print ("Det er ikke valgt noen klassekode");
    }

    else
    {
        include("db-tilkobling.php"); /*Tilkobling til databaseserveren er etablert, og ønsket database er valgt*/

        $sqlSetning="DELETE FROM klasse where klassekode='$klassekode';";
        mysqli_query($db, $sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
        /*SQL-setning sendt til database-serveren*/

        print("F&oslash;lgende klasse er n&aring; slettet: $klassekode");

    }

}








?> 
