<?php /*slett-klasse*/
/*
/* Programmet lager et skjema for å velge en klasse som skal slettes
/* Programmet sletter det valgte poststedet*/

<script src="funksjoner.js"> </script>

<h3>Slett klasse</h3>

form method="post" action="" id="slettKlasseSkjema" name="slettKlasseSkjema" onSubmit="return bekreft()">
Klassekode
<select name="klassekode" id="klassekode">
    <option value="">velg klasse</option>
    <?php include("dynamiske-funksjoner.php"); listeboksKlassekode(); ?>
</select> <br/>
<input type="submit" value="Slett klasse" name="slettKlasseKnapp" id="slettKlasseKnapp" /> 
</form>

<?php
if (isset($_POST ["slettKlasseKnapp"]))
{
    
}







?> 
