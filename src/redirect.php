<?php
$filename = "users/login";
if (isset($_GET["page"])) {
    $templates = json_decode(file_get_contents("../config/templates.json"), true);
    if (isset($templates[$_GET["page"]])) {
        $filename = $templates[$_GET["page"]] . "/" . $_GET["page"];
    }
} 
include_once('../src/' . $filename . ".php");
include_once("../resources/views/" . $filename . ".html");
?>
