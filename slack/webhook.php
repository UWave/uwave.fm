<?php
$triggerword = rtrim($_POST['trigger_word'], ":");
if($_POST['token'] != file_get_contents("/etc/slacktoken").trim()) {
  die("Invalid token");
}

if(file_exists($triggerword.".php")) {
    require($triggerword.".php");
} else {
    $attachment = array("fields" => array());
    foreach($_POST as $key => $value) {
       $attachment['fields'][] = array("title" => $key, "value" => $value);
    }
    echo json_encode(array("text" => "The command $triggerword isn't a known command, but some how it got back here. Testing something?", "attachments" => array($attachment)))."\n";
}
