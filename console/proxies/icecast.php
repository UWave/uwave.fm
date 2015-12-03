<?php
if(!isset($_REQUEST['page'])) {
    die("Please specify page!");
    }

require 'Requests/library/Requests.php';
require 'inc/settings.inc.php';
Requests::register_autoloader();

$headers = array("auth" => array($settings['icecast']['username'], $settings['icecast']['password']));
$data = array();
$url = $settings['icecast']['host']."/admin/".$_REQUEST['page'];

foreach($_REQUEST as $key=>$value) {
    if($key != "page") {
        $data[$key] = $value;
    }
}

echo Requests::get($url, array(), $headers, $data)->body;
