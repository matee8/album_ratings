<?php
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
if (isset($_POST["rate"])) {
    $file = file_get_contents("../resources/data/ratings.txt");
    $new_rating = true;
    $file_data = explode("\n", $file);
    
    for ($i = 0; $i < count($file_data); $i++) {
        $data = explode(";", $file_data[$i]);
        if ($data[0] == $_SESSION["logged_in"] && $data[1] == $_POST["id"]) {
            $file_data[$i] = $_SESSION["logged_in"] . ";" . $_POST["id"] 
                . ";" . $_POST["rating"];
            $new_rating = false;
            break;
        }
    }

    if (!$new_rating) {
        file_put_contents("../resources/data/ratings.txt", 
            implode("\n", $file_data));
    }
    else {
        file_put_contents("../resources/data/ratings.txt",
            $file . $_SESSION["logged_in"] . ";" . $_POST["id"] 
                . ";" . $_POST["rating"]);
    }
}
?>
