<?php
print_r($_SESSION);
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']):
?>
<h1>Nem vagy bejelentkezve!</h1>
<?php
endif;
?>
