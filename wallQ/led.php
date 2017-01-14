<?php
session_start();

require_once 'queque.php';
$w = queque($_SESSION['queue']);

if ($w[1] < $_SESSION['limit']) {
echo '<div class="triangle-topleft"></div>';
} else {
echo '<div class="triangle-topleft-alarm"></div>';
}

?>