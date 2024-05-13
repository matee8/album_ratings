<?php
if (isset($_POST['login'])) {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $valid_user = false;
    $file = fopen("../resources/data/users.txt", "r");

    while (!feof($file)) {
        $line = explode(";", fgets($file));
        if (count($line) > 1) {
            if ($line[0] == $username && trim($line[2]) == $password) {
                $_SESSION["logged_in"] = true;
                $valid_user = true;
                header("location: index.php?page=view");
            }
        }
    }

    if (!$valid_user) {
        echo("
            <script>
                alert(\"Sikertelen bejelentkezés!\");
            </script>
        ");
    }
}
?>
