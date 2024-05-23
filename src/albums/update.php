<?php
if (isset($_POST["choose"])) {
    $file = file_get_contents("../resources/data/albums.txt");
    $album_id = $_POST["id"];
    $valid_album = false;
    foreach (explode("\n", $file) as $line) {
        $data = explode(";", $line);
        if ($data[0] == $album_id) {
            $valid_album = true;
            $_SESSION["album"] = $data;
            break;
        }
    }
    if (!$valid_album) {
        $_SESSION["album"] = "invalid";
    }
}
if (isset($_POST["update"])) {
    $file = file_get_contents("../resources/data/albums.txt");
    $album_id = $_POST["id"];
    $artist = $_POST["artist"];
    $title = $_POST["title"];
    $file_data = explode("\n", $file);
    $valid_album = true;
    $target_dir = "../resources/data/img/";
    $target_file = $target_dir . basename($_FILES["cover"]["name"]);
    $id = 0;

    if (!$valid_album) {
        echo("
            <script>
                alert(\"Nem megfelelő adatokat adott meg!\");
            </script>
        ");
    } else {
        foreach ($file_data as &$line) {
            $line_data = explode(";", $line);
            if ($line_data[0] == $album_id) {
                unlink($line_data[3]);
                move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file);

                $new_line = $album_id . ";" . $artist . ";" . $title . ";"
                    . $target_file;
                $line = $new_line;
                break;
            }
        }

        file_put_contents("../resources/data/albums.txt", 
            implode("\n", $file_data));

        $_SESSION["album"] = "updated";
        unset($_SESSION["albums"]);
    }
}

if (!isset($_SESSION["albums"])) {
    $file = file_get_contents("../resources/data/albums.txt");
    $albums = [];
    foreach (explode("\n", $file) as $line) {
        $data = explode(";", $line);
        if (count($data) > 1) {
            array_push($albums, $data);
        }
    }
    $_SESSION["albums"] = $albums;
}
?>
