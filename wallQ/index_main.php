<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/wallboard.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<?php
session_start();
$wr = $_GET['wachtrij'];
$wr = (int)$wr;
if ($wr <= 0) {
	$wr = 1; }
if ($wr > 8) {
	$wr = 1;
}

$_SESSION['wachtrij'] = $wr;

require "queque.php";
$main = queque($_SESSION['wachtrij']); 
echo '<script>';



echo '$(document).ready(function(){';
echo'        var $herlaad_module1 =$(".module1");';
echo'        setInterval(function () {';
echo'           $herlaad_module1.load("module1.php");';
echo'}, 5000);';
echo'});';

echo '$(document).ready(function(){';
echo'        var $herlaad_module2 =$(".module2");';
echo'        setInterval(function () {';
echo'           $herlaad_module2.load("module2.php");';
echo'}, 100000);';
echo'});';

echo '$(document).ready(function(){';
echo'        var $herlaad_led =$(".led");';
echo'        setInterval(function () {';

    echo'           $herlaad_led.animate({opacity:"0.5"},"fast");';
    echo'           $herlaad_led.animate({opacity:"1"},"fast");';
    echo'           $herlaad_led.animate({opacity:"0.4"},"fast");';
    echo'           $herlaad_led.animate({opacity:"1"},"fast");';

    echo'           $herlaad_led.load("led.php");';
    echo'}, 5000);';
    echo'});';

echo '$(document).ready(function(){';
echo'        var $herlaad_naam1 =$(".naam1");';
echo'        setInterval(function () {';
echo'           $herlaad_naam1.load("naam1.php");';
echo'}, 10000);';
echo'});';

echo '$(document).ready(function(){';
echo'        var $herlaad_ti =$("title");';
echo'        setInterval(function () {';
echo'           $herlaad_ti.load("ti.php");';
echo'}, 10000);';
echo'});';


echo '$(document).ready(function(){';
echo'        var $herlaad_linken =$(".onder");';
echo'        setInterval(function () {';
echo'           $herlaad_linken.load("links.php");';
echo'}, 10000);';
echo'});';

echo'</script>';


   

echo '<title>', $main[0],' (', $main[1], ')</title>';
echo '</head>';

echo '<body>';
echo '<div class="headerpic-box"><div class="headerpic"></div></div>';
echo '<div class="naam1">';
echo '<div class="triangle-topright"><div class="agents">';
echo '<div class="pagents">', $main[0], '</div></div></div>';
echo '</div>';
echo '<div class="led">';

    echo '<div class="triangle-topleft"></div>';
    if ($main[1] < 3) {
    echo '<div class="triangle-topleft"></div>';
    } else {
    echo '<div class="triangle-topleft-alarm"></div>'; 
    }
echo '</div>'; //led div gesloten




echo '<div class="module1">';
  echo '<div class="wachtrijbox">';

  echo '<table width="100%" border="0" cellspacing="0">';
  echo '<tr>';
  echo '<td width="70%"><div class="pwachtrij-text1"><b>Aantal wachtende</b></div></td>';
  if ($main[1] < 3) {
  echo '<td width="30%"><div class="pwachtrij-waarde1"><b>', $main[1], '</b></div></td>';
  } else {
  echo '<td width="30%"><div class="pwachtrij-waarde-alarm1"><b>', $main[1], '</b></div></td>';
  }
  echo '</tr>';
  echo '<tr>';
  echo '<td width="70%"><div class="pwachtrij-text2"><b>Langst wachtende</b></div></td>';
  if ($main[1] < 3) {
  echo '<td width="30%"><div class="pwachtrij-waarde2"><b>',$main[2], '</b></div></td>';
  } else {
  echo '<td width="30%"><div class="pwachtrij-waarde-alarm2"><b>',$main[2], '</b></div></td>';
  }
  echo '</tr>';
  echo '</table>';

  echo '</div>'; // sluit wachtrijbox div
echo '</div>'; // module1 div gesloten


echo '<div class="module2">';

echo '<div class="tabelbox">';
echo '<div class="ptabel">';



$filename_0="../cms/tabel". $_SESSION['wachtrij'] . ".csv" or die;
$values = array();
$handle = fopen($filename_0, "r");
while (!feof($handle)) {
	$values [] = str_replace("\r\n","",fgets($handle, 4096));
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
echo '</div>'; // sluit ptable div
echo '</div>'; // sluit tablebox div

echo '</div>'; // sluit module2 div

echo '<div class="onder">';

require "namen.php";

$stat1 = queque(1);
$stat2 = queque(2);
$stat3 = queque(3);
$stat4 = queque(4);
$stat5 = queque(5);
$stat6 = queque(6);
$stat7 = queque(7);
$stat8 = queque(8);




echo '<div id="psub">Tijd ' . date("H:i") .'</div>';

echo '<div class="sub1"><div id="psub1"><a href="index_main.php?wachtrij=1">',$namen[1],'  (',$stat1[1],')</a>
<a href="index_main.php?wachtrij=2">',$namen[2],'  (',$stat2[1],')</a><a href="index_main.php?wachtrij=3">',$namen[3],'  (',$stat3[1],')</a><a href="index_main.php?wachtrij=4">',$namen[4],'  (',$stat4[1],')</a></div></div>';

echo '<div class="sub2"><div id="psub1">
<a href="index_main.php?wachtrij=5">',$namen[5],'  (',$stat5[1],')</a>
<a href="index_main.php?wachtrij=6">',$namen[6],'  (',$stat6[1],')</a><a href="index_main.php?wachtrij=5">',$namen[7],'  (',$stat5[1],')</a>
<a href="index_main.php?wachtrij=6">',$namen[8],'  (',$stat6[1],')</a></div></div>';


echo '</div>';

echo '</body>';
echo '</html>';
?>
