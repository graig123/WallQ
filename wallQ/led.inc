<?php
if ($main[1] < $_SESSION['limit']) {
echo '<div class="triangle-topleft"></div>';
} else {
echo '<div class="triangle-topleft-alarm"></div>';
}

?>