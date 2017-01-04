<?php
session_start();
$tijd = date("H:i");
$_SESSION['tijd'] = $tijd;

echo '<div class="footer"><div id="time"><small>' . $_SESSION['tijd'] .'</div><div id="date">' . date("d-m-Y") .'</small></div>';
echo '<small><small>';

// onderstaande is voor debugging
//print_r($_SESSION);
//echo '<center>SessionId = ' .session_id() . '</center>';
echo '</small></small>';
echo '</div>';

?>