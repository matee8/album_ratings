<?php
if (!isset($_SESSION["logged_in"])):
?>
<h1 class="text-center">Sikeres kijelentkezés! Várjuk vissza!</h1>
<?php
else:
?>
<h1 class="text-center">Valami hiba történt, ezért nem sikerült kijelentkeznie.</h1>
<?php
endif;
?>
