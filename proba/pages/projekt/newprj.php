<div>
 <form method="post" action="">
	<table style="width:500px;">		
			
		<tr><td><label> Projekt Neve: </label> </td>	  					 <td> <input type="text" id="pname" name="projektName"></td></tr>

		<tr><td><label> Projekt sorszáma: </label> </td>	 				 <td> <input type="text" id="pszam" name="projektszam"></td></tr>

		<tr><td><label> Megrendelő: </label> </td>	 						 <td> <input type="text" id="megrendelo" name="megrendelo"></td></tr>

		<tr><td><label> Munka típusa: </label> </td>	  				 	 <td>  <select name="munkatipus" size=”1”>
																					  <option value="">Villamostechnika</option>
																				   </select></td></tr>

		<tr><td><label> Projekt Manager: </label> </td>					 	 <td> <input type="text" id="prjm" name="prjmanager"></td></tr>

		<tr><td><label> Árajánlat szerinti kezdési dátum: </label></td> 	 <td> <input type="text" id="akezdatum" name="akezdatum"></td></tr>

		<tr><td><label> Árajánlat érvényessége: </label></td> 	  			 <td> <input type="text" id="aervenyes" name="aervenyes"></td></tr>

		<tr><td><label> Ajánlatban szereplő nettó összeg: </label></td> 	 <td> <input type="text" id="ano" name="ano"></td></tr>

		<tr><td><label> Ajánlatban szereplő bruttó összeg: </label></td>  	 <td> <input type="text" id="abo" name="abo"></td></tr>
		
		<tr><td><label> Valós nettó összeg: </label></td> 					 <td> <input type="text" id="ano" name="vno"></td></tr>

		<tr><td><label> Valós bruttó összeg: </label></td>  				 <td> <input type="text" id="abo" name="vbo"></td></tr>

		<tr><td><label> Tervezett anyagköltség: </label></td> 	  			 <td> <input type="text" id="tak" name="tak"></td></tr>

		<tr><td><label> Lesz-e mérföldkő: </label> </td>	  			   	 <td>  <select name="merfoldko" size=”1”>
																					  <option value="">Igen</option>
																					  <option value="">Nem</option>
																				   </select></td></tr>

		<tr><td><label> Mérföldkő száma: </label> </td>	 				 	 <td> <input type="text" id="msz" name="msz"></td></tr>
		
		<tr><td><label> Projekt aktuális fázisa: </label> </td>	  			 <td>  <select name="fazis" size=”1”>
																					  <option value="">Ajánlat</option>
																					  <option value="">Folyamatban</option>
																					  <option value="">Zárt</option>
																				   </select></td></tr>

		<tr><td><label> Megjegyzés: </label> </td>	 				 		 <td> <input type="text" id="msz" name="msz"></td></tr>


	</table>
	<br>  <input style="margin-left:170px;" type="submit" name="ok" value="Projekt hozzáadása">
   </form>
</div>

<?php
include("../../keret/sqlCon.php");

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if (isset($_POST['ok'])) {
    // Űrlapadatok lekérése
    $projektNeve = $_POST["projektName"];
    $projektSzam = $_POST["projektszam"];
    $megrendelo = $_POST["megrendelo"];
    $projektManager = $_POST["prjmanager"];
    $ajanlatKezdesDatuma = $_POST["akezdatum"];
    $ajanlatErvenyesseg = $_POST["aervenyes"];
    $ajanlatNettoOsszeg = $_POST["ano"];
    $ajanlatBruttoOsszeg = $_POST["abo"];
    $valosNettoOsszeg = $_POST["vno"];
    $valosBruttoOsszeg = $_POST["vbo"];
    $tervezettAnyagkoltseg = $_POST["tak"];
    $leszMerfoldko = $_POST["merfoldko"];
    $merfoldkoSzama = $_POST["msz"];
    $projektFazisa = $_POST["fazis"];
    $megjegyzes = $_POST["msz"];

    $sql =("INSERT INTO projektek (projektNeve, projektSzam, megrendelo, projektManager, ajanlatKezdesDatuma, ajanlatErvenyesseg, ajanlatNettoOsszeg,
    ajanlatBruttoOsszeg, valosNettoOsszeg, valosBruttoOsszeg, tervezettAnyagkoltseg, leszMerfoldko, merfoldkoSzama, projektFazisa, megjegyzes)
VALUES ($projektNeve, $projektSzam, $megrendelo, $projektManager, $ajanlatKezdesDatuma, $ajanlatErvenyesseg, $ajanlatNettoOsszeg,
    $ajanlatBruttoOsszeg, $valosNettoOsszeg, $valosBruttoOsszeg, $tervezettAnyagkoltseg, $leszMerfoldko, $merfoldkoSzama, $projektFazisa, $megjegyzes);");

}
?>
