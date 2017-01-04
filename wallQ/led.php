<?php
session_start();

require_once 'queque.php';
$w = queque($_SESSION['wachtrij']);

if ($w[1] < $_SESSION['limiet']) {
echo '<div class="triangle-topleft"></div>';
} else {
echo '<div class="triangle-topleft-alarm"></div>';
}

?>