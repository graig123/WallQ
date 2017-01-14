<?php
require_once 'queque.php';
$main = queque($_SESSION['wachtrij']);


echo '<div class="wachtrijbox">';
echo '<table width="100%" border="0" cellspacing="0">';
echo '<tr>';
echo '<td width="70%"><div class="pwachtrij-text1"><b>',$lang_Q[0], '</b></div></td>';
if ($main[1] < $_SESSION['limiet']) {
echo '<td width="30%"><div class="pwachtrij-waarde1"><b>', $main[1], '</b></div></td>';
} else {
echo '<td width="30%"><div class="pwachtrij-waarde-alarm1"><b>', $main[1], '</b></div></td>';
 }
echo '</tr>';
echo '<tr>';
echo '<td width="70%"><div class="pwachtrij-text2"><b>', $lang_Q[1], '</b></div></td>';
if ($main[1] < $_SESSION['limiet']) {
echo '<td width="30%"><div class="pwachtrij-waarde2"><b>',$main[2], '</b></div></td>';
} else {
echo '<td width="30%"><div class="pwachtrij-waarde-alarm2"><b>',$main[2], '</b></div></td>';
}
echo '</tr>';
echo '</table>';
echo '</div>';
?>