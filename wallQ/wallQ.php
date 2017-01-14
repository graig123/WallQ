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
<script src="wallq_update_script.js"></script>

<?php
session_start();
$wr = $_GET['queue'];
$wr = (int)$wr;
if ($wr <= 0) {
	$wr = 1; }
if ($wr > 8) {
	$wr = 1;
}

if(isset($_GET['limit'])){
  $limiet = $_GET['limit'];
 // $sub1 = (int)$sub1;
  $_SESSION['limit'] = $limiet;
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
if(isset($_GET['lang'])){
  $lang_ses = $_GET['lang'];
  $lang_ses = (string)$lang_ses;
  $_SESSION['lang'] = $lang_ses;
} else {
}

$_SESSION['queue'] = $wr;

require "../lang/".$_SESSION['lang'].".php";
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

$main = queque($_SESSION['queue']); 

echo '<title>', $main[0],' (', $main[1], ')</title>';// update's title every 10s, this is set in WallQ/wallq_update_script.js
echo '</head>';
echo '<body>';
echo '<div class="background-pic"></div>';
echo '<div class="headerpic-box"><div class="headerpic"></div></div>';
echo '<div class="naam1">';
include 'naam1.inc'; // update's the callcenter in main view every 10s, this is set in WallQ/wallq_update_script.js
echo '</div>';
echo '<div class="led">';
include 'led.inc'; // update's the top-right alert indicator every 10s, this is set in WallQ/wallq_update_scrip.js
echo '</div>';
	
// module1 = this element displays the main callcenter's live queque information
echo '<div class="module1">';
  include 'module1.inc'; // update's the main callcenter queue information every 10s, this is set in WallQ/wallq_update.js
echo '</div>';
	
// module2 = this elements shows historic information of the callcenter in main view
echo '<div class="module2">';
include 'module2.inc'; // updates the historic information every 2m, this is set in WalQ/wallq_update.js
echo '</div>';
	
// subs/onder = this element shows the optional sub's, agent info/ or other callcenter queue's 
echo '<div class="onder">';

include 'subs.inc'; //updates the seleceted subs every 20s (if GET- variables are set)
echo '</div>'; 
	
// foooter = this element shows time. date and logo !!Needs to be set, otherwise php session wil timeout and queue will fail after 1440s !!
echo '<div class="foooter">'; // updates every 1m, this is set in WalQ/wallq_update.js

echo '<div class="footer"><div id="time"><small>' . date("H:i") .'</div><div id="date">' . date("d-m-Y") .'</small></div>';

// uncomment for debugging
// print_r($_SESSION);
// echo '<center>SessionId = ' .session_id() . '</center>';

echo '</div>';
echo '</div>';
echo '</body>';
echo '</html>';
//session_destroy();
?>
