<?php
if (isset($_SESSION["failed_login"]) && $_SESSION["failed_login"]) {
    echo("
        <script>
            alert(\"Először jelentkezzen be!\");
        </script>
    ");
    unset($_SESSION["failed_login"]);
}
if (isset($_POST['login'])) {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $valid_user = false;
    $file = file_get_contents("../resources/data/users.txt", "r");

    foreach (explode("\n", $file) as $line) {
        $data = explode(";", $line);
        if (count($data) > 1) {
            if ($data[0] == $username && trim($data[2]) == $password) {
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
