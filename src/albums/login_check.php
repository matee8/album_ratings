<?php
if (!isset($_SESSION['logged_in']) && !$_SESSION['logged_in']) {
    echo("
        <script>
            alert(\"Először jelentkezzen be!\");
        </script>
    ");
    header("refresh: 3; url=index.php?page=login");
}
?>
