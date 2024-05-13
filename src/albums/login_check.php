<?php
if (!isset($_SESSION['logged_in']) && !$_SESSION['logged_in']) {
    $_SESSION["failed_login"] = true;
    header("location: index.php?page=login");
}
?>
