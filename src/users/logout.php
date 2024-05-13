<?php
if (isset($_SESSION["logged_in"])) {
    unset($_SESSION["logged_in"]);
}
session_destroy();
header("refresh: 3; url=index.php");
?>
