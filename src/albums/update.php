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
    $cover = $_POST["cover"];
    $file_data = explode("\n", $file);
    foreach ($file_data as &$line) {
        if (explode(";", $line)[0] == $album_id) {
            $new_line = $album_id . ";" . $artist . ";" . $title . ";"
                . $cover;
            $line = $new_line;
            break;
        }
    }
    file_put_contents("../resources/data/albums.txt", 
        implode("\n", $file_data));
    $_SESSION["album"] = "updated";
    unset($_SESSION["albums"]);
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
