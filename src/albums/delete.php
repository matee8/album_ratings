<?php
if (isset($_POST["delete"])) {
    $file = file_get_contents("../resources/data/albums.txt");
    $album_id = $_POST["id"];
    $file_data = explode("\n", $file);
    foreach ($file_data as $line) {
        if (explode(";", $line)[0] == $album_id) {
            unset($line);
            break;
        }
    }
    for ($i = 0; $i < count($file_data); $i++) {
        if (explode(";", $file_data[$i])[0] == $album_id) {
            unset($file_data[$i]);
            break;
        }
    }
    file_put_contents("../resources/data/albums.txt", 
        implode("\n", $file_data));
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
