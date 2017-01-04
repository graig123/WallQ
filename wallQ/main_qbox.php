<?php
require_once 'queque.php';
$q = queque(8);
echo '<div class="module1">';
echo '<table width="100%" border="0" cellspacing="0">';
echo '<tr>';
echo '<td width="70%"><div id="pwachtrij-text1"><b>Aantal wachtende</b></div></td>';
if ($q[1] < 3) {
echo '<td width="30%"><div id="pwachtrij-waarde1"><b>', $q[1], '</b></div></td>';
} else {
echo '<td width="30%"><div id="pwachtrij-waarde-alarm1"><b>', $q[1], '</b></div></td>';
 }
echo '</tr>';
echo '<tr>';
echo '<td width="70%"><div id="pwachtrij-text2"><b>Langst wachtende</b></div></td>';
if ($q[1] < 3) {
echo '<td width="30%"><div id="pwachtrij-waarde2"><b>',$q[2], '</b></div></td>';
} else {
echo '<td width="30%"><div id="pwachtrij-waarde-alarm2"><b>',$q[2], '</b></div></td>';
}
echo '</tr>';
echo '</div>';?>
