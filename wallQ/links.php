<?php
session_start();
require "namen.php";
require "queque.php";

$stat1 = queque(1);
$stat2 = queque(2);
$stat3 = queque(3);
$stat4 = queque(4);
$stat5 = queque(5);
$stat6 = queque(6);
$stat7 = queque(7);
$stat8 = queque(8);

echo '<div class="footer1"><div id="pfooter"><a href="index.php?wachtrij=1">',$namen[1],'  (',$stat1[1],')</a>
<a href="index.php?wachtrij=2">',$namen[2],'  (',$stat2[1],')</a><a href="index.php?wachtrij=3">',$namen[3],'  (',$stat3[1],')</a><a href="index.php?wachtrij=4">',$namen[4],'  (',$stat4[1],')</a></div></div>';

echo '<div class="footer2"><div id="pfooter">
<a href="index.php?wachtrij=5">',$namen[5],'  (',$stat5[1],')</a>
<a href="index.php?wachtrij=6">',$namen[6],'  (',$stat6[1],')</a><a href="index.php?wachtrij=7">',$namen[7],'  (',$stat7[1],')</a>
<a href="index.php?wachtrij=8">',$namen[8],'  (',$stat8[1],')</a></div></div>';

?>