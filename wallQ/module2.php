<?php
session_start();

echo '<a class="one" href="overzicht_vandaag.php">';
echo '<div class="tabelbox">';
echo '<div class="ptabel">';

$filename_0="../cms/tabel". $_SESSION['wachtrij'] . ".csv" or die;
$values = array();
$handle = fopen($filename_0, "r");
while (!feof($handle)) {
	$values [] = str_replace("\r\n","",fgets($handle, 4096)) or die;
}
fclose($handle);

$tabel = explode(",",$values[0]);
$gem_wachttijd = explode(":",$tabel[4]);
$gem_gespreksduur = explode(":",$tabel[5]);
$gem_annuleringstijd = explode(":",$tabel[7]);
$max_wachttijd = explode(":",$tabel[8]);



echo '<table width="95%" border="0" cellspacing="0">';
echo '<tr>';
echo '<td width="16%">Afgehandeld';
echo '<td width="16%">Gem. Wachttijd';
echo '<td width="16%">Gem. Gesprks.duur';
echo '<td width="16%">Geannuleerd';
echo '<td width="16%">Gem. Annu.tijd';
echo '<td width="16%">Max. Wachttijd';
echo '<tr>';
echo '<td width="16%">', $tabel[3];
echo '<td width="16%">';
$gem_wachttijd = explode(":",$tabel[4]);
if ($gem_wachttijd[0] == "") {
	echo "0$tabel[4]";
} else {
	echo $tabel[4];
}
echo '<td width="16%">';
$gem_gespreksduur = explode(":",$tabel[5]);
if ($gem_gespreksduur[0] == "") {
	echo "0$tabel[5]";
} else {
	echo $tabel[5];
}
echo '<td width="16%">', $tabel[6];
echo '<td width="16%">';
$gem_annuleringstijd = explode(":",$tabel[7]);
if ($gem_annuleringstijd[0] == "") {
	echo "0$tabel[7]";
} else {
	echo $tabel[7];
}
echo '<td width="16%">';
$max_annuleringstijd = explode(":",$tabel[8]);
if ($max_annuleringstijd[0] == "") {
	echo "0$tabel[8]";
} else {
	echo $tabel[8];
}
echo '</table>';
echo '</div>';
echo '</div>';
echo '</a>';
?>