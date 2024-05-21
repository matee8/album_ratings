<?php
if (isset($_POST["insert"])) {
    $artist = trim($_POST["artist"]);
    $title = trim($_POST["title"]);
    $cover = trim($_POST["cover"]);
    $valid_album = true;
    $id = 0;
    $file = file_get_contents("../resources/data/albums.txt");

    foreach (explode("\n", $file) as $line) {
        $data = explode(";", $line);
        if (count($data) > 1) {
            $id += $data[0];
            if ($data[1] == $artist && trim($data[2]) == $title 
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
            $file . "\n" . $id . ";" .  $artist . ";" . $title . ";" . $cover);
    }
}
?>
