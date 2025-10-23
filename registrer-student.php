<?php /*registrer-student*/
    /*
    /* Programmet lager et html-skjema for å registrere student
    /* Programmet lar brukeren registrere data (brukernavn, fornavn, etternavn og velge klassekode)
    /*
    */
    ?> 

    <h3>Registrer student</h3>

    <form method="post" action="" id="registrerStudentSkjema" name="registrerStudentSkjema">
        Brukernavn <input type="text" id="brukernavn" name="brukernavn" required /> <br/>
        Fornavn <input type="text" id="fornavn" name="fornavn" required /> <br/>
        Etternavn <input type="text" id="etternavn" name="etternavn" required /> <br/>
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
        <br/>
        <input type="submit" value="Registrer student" id="registrerStudentKnapp" name="registrerStudentKnapp" /> 
        <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
    </form>


    <?php
        if (isset($_POST ["registrerStudentKnapp"]))
        {
            $brukernavn=$_POST ["brukernavn"];
            $fornavn=$_POST ["fornavn"];
            $etternavn=$_POST ["etternavn"];
            $klassekode=$_POST ["klassekode"];

            include("db-tilkobling.php"); /*Tilkobling til databaseserveren er etablert, og ønsket database er valgt*/

        $sqlSetning = "SELECT * FROM student WHERE brukernavn = '$brukernavn';";
        $sqlResultat = mysqli_query($db, $sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
        $antallRader = mysqli_num_rows($sqlResultat);

        if($antallRader !=0) 
        {
            print ("Studenten finnes fra f&oslashr");
        }
        else
        {
            $sqlSetning="INSERT INTO student VALUES ('$brukernavn', '$fornavn', '$etternavn', '$klassekode');";
            mysqli_query($db, $sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
            /*SQL-setningen er sendt til database-serveren*/
            print("Denne studenten har n&aring; blitt registrert: $brukernavn, $fornavn, $etternavn, $klassekode");
        }

    }

    ?>



