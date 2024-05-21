<?php
$file = file_get_contents("../resources/data/albums.txt", "r");
$albums = [];
foreach (explode("\n", $file) as $line) {
    $data = explode(";", $line);
    if (count($data) > 1) {
        array_push($albums, $data);
    }
}
?>
