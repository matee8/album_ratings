<?php
$username = $_POST["username"];
$password = $_POST["password"];
$valid_user = false;

if (file_exists("../data/users.txt")) {
    $file = fopen("../data/users.txt", "a+");

    while (!feof($file)) {
        $line = explode(";", fgets($file));
        if (count($line) > 1) {
            if (trim($line[0]) == trim($username) 
                && trim($line[1]) == trim($password)) {
                echo("Sikeres bejelentkezés!");
                $valid_user = true;
                break;
            } 
        }
    }
    if (!$valid_user) {
        echo("Sikertelen bejelentkezés!");
    }

    fclose($file);
}
?>
