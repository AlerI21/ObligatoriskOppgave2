<h3>Registrer student</h3>

<form method="post" action="" id="registrerStudentSkjema" name="registrerStudentSkjema">
    Brukernavn <input type="text" id="brukernavn" name="brukernavn" required /> <br/>
    Fornavn <input type="text" id="fornavn" name="fornavn" required /> <br/>
    Etternavn <input type="text" id="etternavn" name="etternavn" required /> <br/>
    Klassekode
    <select name="klassekode" id="klassekode">
        <option value="">velg klassekode</option>
        <?php include("dynamiske-funksjoner.php"); listeboksKlassekode(); ?>
    </select>
    <br/>
    <input type="submit" value="Registrer student" id="registrerStudentKnapp" name="registrerStudentKnapp" /> 
    <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> 
</form>
