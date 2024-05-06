<?php
if (isset($_POST["register"])) {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $password_again = trim($_POST["password_again"]);
    $file = file_get_contents("../resources/data/users.txt");
    $i = 0;

    if ($password !== $password_again) {
        echo("
            <script>
                alert(\"Sikeres bejelentkezés! Pár másodperc és átirányítunk.\");
            </script>
        ");
    }

    $lines = explode("\n", $file);

    for ($i = 0; $i < count($lines); $i++) {
        $line = explode(";", $lines[$i]);
        if (count($line) > 1) {
            if ($line[0] == $username || $line[1] == $email 
                || $line[2] == $password) {
                echo("
                    <script>
                    alert(\"Sikeres bejelentkezés! Pár másodperc és átirányítunk.\");
                    </script>
                ");
            }
        }
    }

    file_put_contents("../resources/data/users.txt", 
        $file . "\n" . $username . ";" . $email . ";" . $password);
    header("refresh: 3; url=index.php?page=login");
    echo("
        <script>
            alert(\"Sikeres regisztráció! Pár másodperc és átirányítunk\");
        </script>
    ");
}

?>
