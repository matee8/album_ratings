<?php
$file = fopen("../resources/data/albums.txt", "r");
$albums = [];
while (!feof($file)) {
    $line = explode(";", fgets($file));
    if (count($line) > 1) {
        array_push($albums, $line);
    }
}
?>
