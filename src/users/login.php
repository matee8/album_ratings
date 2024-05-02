<?php
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$valid_user = false;
$file = fopen("../resources/data/users.txt", "r");

while (!feof($file)) {
    $line = explode(";", fgets($file));
    if (count($line) > 1) {
        if (trim($line[0]) == $username && trim($line[1]) == $password) {
            header("refresh: 3; url=index.php?page=upload");
            echo("Sikeres bejelentkezés! Pár másodperc és átirányítunk...");
            $_SESSION['logged_in'] = true;
            $valid_user = true;
        } 
    }
}

if (!$valid_user) {
    header("refresh: 3; url=index.php");
    echo("Sikertelen bejelentkezés! Pár másodperc és átírányítunk...");
}
?>
