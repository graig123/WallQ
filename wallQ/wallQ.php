<!doctype html>
<html>
<head>

<?php
if($_GET['style'] == 1) {
	echo '<link rel="stylesheet" type="text/css" href="../css/wallboard01.css">';
} else {
	echo '<link rel="stylesheet" type="text/css" href="../css/wallboard.css">';
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="wachtrij_scripts.js"></script>

<?php
session_start();
$wr = $_GET['wachtrij'];
$wr = (int)$wr;
if ($wr <= 0) {
	$wr = 1; }
if ($wr > 8) {
	$wr = 1;
}

if(isset($_GET['limiet'])){
  $limiet = $_GET['limiet'];
 // $sub1 = (int)$sub1;
  $_SESSION['limiet'] = $limiet;
} else {
}

if(isset($_GET['time'])){
  $time = $_GET['time'];
 // $sub1 = (int)$sub1;
  $_SESSION['time'] = $time;
} else {
}

if(isset($_GET['sub1'])){
  $sub1 = $_GET['sub1'];
 // $sub1 = (int)$sub1;
  $_SESSION['sub1'] = $sub1;
} else {
}
if(isset($_GET['sub2'])){
  $sub2 = $_GET['sub2'];
  $sub2 = (int)$sub2;
  $_SESSION['sub2'] = $sub2;
} else {
}
if(isset($_GET['sub3'])){
  $sub3 = $_GET['sub3'];
  $sub3 = (int)$sub3;
  $_SESSION['sub3'] = $sub3;
} else {
}

$_SESSION['wachtrij'] = $wr;

require "queque.php";
require "namen.php";

$stat1 = queque(1);
$stat2 = queque(2);
$stat3 = queque(3);
$stat4 = queque(4);
$stat5 = queque(5);
$stat6 = queque(6);
$stat7 = queque(7);
$stat8 = queque(8);

$main = queque($_SESSION['wachtrij']); 

echo '<title>', $main[0],' (', $main[1], ')</title>';// wordt om de 10 sec geupdate
echo '</head>';
echo '<body>';
echo '<div class="background-pic"></div>';
echo '<div class="headerpic-box"><div class="headerpic"></div></div>';
echo '<div class="naam1">';
include 'naam1.inc'; //hierna wordt om de 10 sec de 'naam1.php' geladen
echo '</div>';
echo '<div class="led">';
include 'led.inc'; //hierna wordt om de 10 sec de 'led.php' geladen
echo '</div>';
// module1 = main-wachtrij display
echo '<div class="module1">';
  include 'module1.inc'; //hierna wordt om de 10 sec de 'module1.php' geladen
  
echo '</div>';
// module2 =tabel met historische info onder het wachtrij venster
echo '<div class="module2">';
include 'module2.inc'; //hierna wordt om de 10minute de 'module2.php' geladen

echo '</div>'; 
// subs/onder = zijn de optionele balken met andere afdelingen welke men mogelijke wil inzien
echo '<div class="onder">';

include 'subs.inc'; //hierna wordt om de 20 sec de 'subs.php.php' geladen (als GET- variable aanwezig is)
echo '</div>'; 
// foooter is voor de datum en tijd indien deze is gekozen wordt dit om de 1sec geupdate. 
echo '<div class="foooter">';

echo '<div class="footer"><div id="time"><small>' . date("H:i") .'</div><div id="date">' . date("d-m-Y") .'</small></div>';

// onderstaande is voor debugging
//print_r($_SESSION);
//echo '<center>SessionId = ' .session_id() . '</center>';

echo '</div>';

echo '</div>';

echo '</body>';
echo '</html>';
?>
