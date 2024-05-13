<?php
if (!isset($_SESSION["logged_in"])):
?>
<h1>Sikeres kijelentkezés! Várjuk vissza!</h1>
<?php
else:
?>
<h1>Valami hiba történt, ezért nem sikerült kijelentkeznie.</h1>
<?php
endif;
?>
