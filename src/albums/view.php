<?php
$file = fopen("../resources/data/albums.txt", "r");
$albums = [];
while (!feof($file)) {
    array_push($albums, explode(";", fgets($file)));
}
?>
