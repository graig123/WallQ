<?php
session_start();
$_SESSION['wachtrij'] = $wr;
echo '<center>';
echo '<br>';
echo '<br>';
echo '<h3>Historisch overzicht:</h3>';
echo '<h2>VANDAAG</h2>';

$filename_0="../cms/tabel". $wr .".csv";
$values = array();
$handle = fopen($filename_0, "r");
while (!feof($handle)) {
	$values [] = str_replace("\r\n","",fgets($handle, 4096));
}
fclose($handle);

/*
echo "DEBUG - weergeven inhoud array values:<br><br>";
print_r($values);
echo "<br><br>";
*/

//Tellen aantal waarden die in array values zitten en dit aantal verminderen met 1 (omdat de eerste waarde van een array altijd in 0 staat
//Laatste waarde van array values verwijderen
$aantal_values=count($values)-1;
unset($values[$aantal_values]);
//Einde

/*
echo "DEBUG - weergeven inhoud array values:<br><br>";
print_r($values);
echo "<br><br>";
*/

echo "<table width=\"85%\" border=\"0\" cellspacing=\"0\">";
echo "<tr>";
echo "<td width=\"13%\" align=\"center\">Tijd";
echo "<td width=\"13%\" align=\"center\">Afgehandeld";
echo "<td width=\"13%\" align=\"center\">Gem. wachttijd";
echo "<td width=\"13%\" align=\"center\">Gem. gespreksduur";
echo "<td width=\"13%\" align=\"center\">Geannuleerd";
echo "<td width=\"14%\" align=\"center\">Gem. annuleringstijd";
echo "<td width=\"13%\" align=\"center\">Max. wachttijd";

//Controle waarden zetten om weergave eerste rij te kunnen controleren
$first_row="yes";
//Einde

while (list ($key, $val) = each ($values) ) {
		$tmp = explode(",",$values[$key]);

		echo "<tr>";
		//Indien controle waarde eerste rij op 'yes' staat, het woord totalen weergeven. Controle waarde daarna op 'no' zetten
		if ($first_row == "yes") {
			echo "<td width=\"14%\" align=\"center\">$tmp[0]"; //Weergeven woord "Totalen"
			$first_row="no";
		} else {
			echo "<td width=\"14%\" align=\"center\">$tmp[0] - $tmp[2]"; //Weergeven tijdstip
		}
		echo "<td width=\"14%\" align=\"center\">$tmp[3]"; //Weergeven aantal afgehandeld
		
		$gem_wachttijd = explode(":",$tmp[4]);
		if ($gem_wachttijd[0] == "") {
			echo "<td width=\"14%\" align=\"center\">0$tmp[4]"; //Weergeven gem. wachttijd met voorloop nul
		} else {
			echo "<td width=\"14%\" align=\"center\">$tmp[4]"; //Weergeven gem. wachttijd
		}

		$gem_gespreksduur = explode(":",$tmp[5]);
		if ($gem_gespreksduur[0] == "") {
			echo "<td width=\"14%\" align=\"center\">0$tmp[5]"; //Weergeven gem. gespreksduur met voorloop nul
		} else {
			echo "<td width=\"14%\" align=\"center\">$tmp[5]"; //Weergeven gem. gespreksduur
		}
		
		echo "<td width=\"14%\" align=\"center\">$tmp[6]"; //Weergeven aantal geannuleerd

		$gem_annuleringstijd = explode(":",$tmp[7]);
		if ($gem_annuleringstijd[0] == "") {
			echo "<td width=\"14%\" align=\"center\">0$tmp[7]"; //Weergeven gem. annuleringstijd met voorloop nul
		} else {
			echo "<td width=\"14%\" align=\"center\">$tmp[7]"; //Weergeven gem. annuleringstijd
		}

		$max_wachttijd = explode(":",$tmp[8]);
		if ($max_wachttijd[0] == "") {
			echo "<td width=\"14%\" align=\"center\">0$tmp[8]"; //Weergeven max. wachttijd met voorloop nul
		} else {
			echo "<td width=\"14%\" align=\"center\">$tmp[8]"; //Weergeven max. wachttijd
		}
}



echo "</table>";
echo '</center>';
?>
