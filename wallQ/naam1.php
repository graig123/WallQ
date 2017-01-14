<?php
session_start();


require_once 'queque.php';
$w = queque($_SESSION['queue']);

echo '<div class="triangle-topright"><div class="agents">';
echo '<div class="pagents">', $w[0], '  <a class="setting" href="index.php"><img src="../images/settings.png" alt="Settings" width="20" height="20" align="right"></a></div></div></div>';

?>