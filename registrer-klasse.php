<?php /*registrer-klasse*/
/*
/* Programmet lager et html-skjema for å registrere klasse
/* Programmet lar brukeren registrere data (klassekode, klassenavn og studiumkode)
/*
*/
?> 

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

        if (!$klassekode || $klassenavn || $studiumkode)
        {
            print ("Du må fylle ut klassekode, klassenavn og studiumkode");
        }
        else
        {
            print ("SKOLE");
        }

    }

