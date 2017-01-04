<?php
if ($main[1] < $_SESSION['limiet']) {
echo '<div class="triangle-topleft"></div>';
} else {
echo '<div class="triangle-topleft-alarm"></div>';
}

?>