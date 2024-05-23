<?php
if (isset($_POST["insert"])) {
    $artist = trim($_POST["artist"]);
    $title = trim($_POST["title"]);
    $valid_album = true;
    $id = 0;
    $file = file_get_contents("../resources/data/albums.txt");
    $target_dir = "../resources/data/img/";
    $target_file = $target_dir . basename($_FILES["cover"]["name"]);

    foreach (explode("\n", $file) as $line) {
        $data = explode(";", $line);
        if (count($data) > 1) {
            $id++;
            if (($data[1] == $artist && $data[2] == $title
                && $data[3] == $target_file)
                || !file_exists($_FILES["cover"]["tmp_name"])) {
                $valid_album = false;
            }
        }
    }

    if (!$valid_album) {
        echo("
            <script>
                alert(\"Nem megfelelő adatokat adott meg!\");
            </script>
        ");
    } else {
        file_put_contents("../resources/data/albums.txt", 
            $file . $id . ";" .  $artist . ";" . $title . ";" 
                . $target_file);
        move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file);
        unset($_SESSION["albums"]);
    }
}
?>
