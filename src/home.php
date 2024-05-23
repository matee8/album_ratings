<?php
$ratings = [];

$ratings_file = file_get_contents("../resources/data/ratings.txt");
$users_file = file_get_contents("../resources/data/users.txt");
$albums_file = file_get_contents("../resources/data/albums.txt");
$ratings = explode("\n", $ratings_file);
$users = explode("\n", $users_file);
$albums = explode("\n", $albums_file);
$ratings_data = [];
$users_data = [];
$albums_data = [];

for ($i = 0; $i < count($ratings); $i++) {
    $ratings_data[$i] = explode(";", $ratings[$i]);
}

for ($i = 0; $i < count($users); $i++) {
    $users_data[$i] = explode(";", $users[$i]);
}

for ($i = 0; $i < count($albums); $i++) {
    $albums_data[$i] = explode(";", $albums[$i]);
}

$ratings_joined = [];
$id = 0;

foreach ($ratings_data as $rating) {
    if (count($rating) > 1) {
        $ratings_joined[$id++] = [$users_data[$rating[0]][1], 
            $albums_data[$rating[1]][2], $rating[2]];
    }
}

$_SESSION["ratings"] = $ratings_joined;
?>
