<?php

header('Access-Control-Allow-Origin: *');

$name_pattern = '/^[a-z]{1,16}$/';
$version_pattern = '/^(\d+\.?){1,4}$/';

if (!empty($_GET['name']) && preg_match($name_pattern, $_GET['name']) ) {
    $name = $_GET['name'];
    $version = "common";

    if (!empty($_GET['version']) && preg_match($version_pattern, $_GET['version']) ) {
        $version = $_GET['version'];
    }

    $filename = 'whitelists/' . $name . '/' . $version . '.min.json';
    
    if (file_exists($filename)) {
        readfile($filename);
    } else {
        print json_encode(array("error" => "no whitelist for " . $name . " " . $version));
    }
}

