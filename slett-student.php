<?php /*slett-student*/
/*
/* Programmet lager et skjema for å velge en student som skal slettes
/* Programmet sletter det valgte studenten*/
?>

<script src="funksjoner.js"> </script>

<!-- Knapp tilbake til index.html -->
<button onclick="window.location.href='index.html'">Tilbake til forsiden</button>

<h3>Slett student</h3>

<form method="post" action="" id="slettStudentSkjema" name="slettStudentSkjema" onSubmit="return bekreft()">
 Student
<select name="brukernavn" id="brukernavn">
    <option value ="">velg student</option>
    <?php
    include("db-tilkobling.php");
    $sqlSetning="SELECT * FROM student;";
    $sqlResultat = mysqli_query($db, $sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
        while ($rad = mysqli_fetch_array($sqlResultat))
            {
                $brukernavnKode=$rad["brukernavn"];
                print("<option value='$brukernavnKode'>$brukernavnKode</option>");
            }
            ?>
</select>
<br/>
<input type="submit" value="Slett student" name="slettStudentKnapp" id="slettStudentKnapp" /> 
</form>

<?php
if (isset($_POST ["slettStudentKnapp"]))
{
    $brukernavn=$_POST ["brukernavn"];
    
    if (!$brukernavn)
    {
        print ("Det er ikke valgt noen student");
	}

	else
	{
		include("db-tilkobling.php"); /*Tilkobling til databaseserveren er etablert, og ønsket database er valgt*/

		$sqlSetning="DELETE FROM student where brukernavn='$brukernavn';";
        mysqli_query($db, $sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
        /*SQL-setning sendt til database-serveren*/

        print("F&oslash;lgende student er n&aring; slettet: $brukernavn");

	}


}


