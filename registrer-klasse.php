    <?php /*registrer-klasse*/
    /*
    /* Programmet lager et html-skjema for å registrere klasse
    /* Programmet lar brukeren registrere data (klassekode, klassenavn og studiumkode)
    /*
    */
    ?> 
    
    
    <button onclick="window.location.href='index.html'">Tilbake til forsiden</button>

    <h3>Registrer klasse</h3>

    <form method="post" action"" id="registrerKlasseSkjema" name="registrerKlasseSkjema">
        Klassekode <input type="text" id="klassekode" name="klassekode" required /> <br/>
        Klassenavn <input type="text" id="klassenavn" name="klassenavn" required /> <br/>
        Studiumkode <input type="text" id="studiumkode" name="studiumkode" required /> <br/>
        <input type="submit" value="Registrer klasse" id="registrerKlasseKnapp" name="registrerKlasseKnapp" /> 
        <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
    </form>

    <?php
        if (isset($_POST ["registrerKlasseKnapp"]))
        {
            $klassekode=$_POST ["klassekode"];
            $klassenavn=$_POST ["klassenavn"];
            $studiumkode=$_POST ["studiumkode"];

            include("db-tilkobling.php"); /*Tilkobling til databaseserveren er etablert, og ønsket database er valgt*/

        $sqlSetning = "SELECT * FROM klasse WHERE klassekode = '$klassekode';";
        $sqlResultat = mysqli_query($db, $sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
        $antallRader = mysqli_num_rows($sqlResultat);

        if($antallRader !=0) 
        {
            print ("Klassekoden finnes fra f&oslashr");
        }
        else
        {
            $sqlSetning="INSERT INTO klasse VALUES ('$klassekode', '$klassenavn', '$studiumkode');";
            mysqli_query($db, $sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
            /*SQL-setningen er sendt til database-serveren*/
            print("Denne klassen har n&aring; blitt registrert: $klassekode, $klassenavn, $studiumkode");
        }

    }

