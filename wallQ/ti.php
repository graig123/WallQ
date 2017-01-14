<?php
session_start();

require_once 'queque.php';
$w = queque($_SESSION['queue']);
echo $w[0],' (', $w[1], ')';

?>