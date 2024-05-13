<?php
if (isset($_POST["insert"])) {
    $artist = trim($_POST["artist"]);
    $title = trim($_POST["title"]);
    $cover = trim($_POST["cover"]);
    $valid_album = true;
    $file = file_get_contents("../resources/data/albums.txt");

    foreach (explode("\n", $file) as $line) {
        $data = explode(";", $line);
        if (count($data) > 1) {
            if ($data[0] == $artist && trim($data[2]) == $title 
                && trim($data[3]) == $cover) {
                $valid_album = false;
            }
        }
    }

    if (!$valid_album) {
        echo("
            <script>
                alert(\"Ilyen album már van az adatbázisunkban!\");
            </script>
        ");
    }

    if ($valid_album) {
        file_put_contents("../resources/data/albums.txt", 
            $file . "\n" . $artist . ";" . $title . ";" . $cover);
    }
}
?>
