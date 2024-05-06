<?php
if (isset($_POST["register"])) {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $password_again = trim($_POST["password_again"]);
    $file = file_get_contents("../resources/data/users.txt");
    $lines = explode("\n", $file);
    $valid_registration = true;
    $i = 0;

    if ($password !== $password_again) {
        $valid_registration = false;
    }

    if ($valid_registration) {
        for ($i = 0; $i < count($lines); $i++) {
            $line = explode(";", $lines[$i]);
            if (count($line) > 1) {
                if ($line[0] == $username || $line[1] == $email) {
                    $valid_registration = false;
                    break;
                }
            }
        }
    }
    
    if ($valid_registration) {
        file_put_contents("../resources/data/users.txt", 
            $file . "\n" . $username . ";" . $email . ";" . $password);
        header("refresh: 3; url=index.php?page=login");
        echo("
            <script>
                alert(\"Sikeres regisztráció! Pár másodperc és átirányítunk\");
            </script>
        ");
    } else {
        echo("
            <script>
            alert(\"Sikertelen regisztráció!\");
            </script>
        ");
    }
}

?>
