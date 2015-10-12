<?php
$triggerword = strtolower(rtrim($_POST['trigger_word'], ":"));
if($_POST['token'] != trim(file_get_contents("/etc/slacktoken"))) {
  echo json_encode(array("text" => "Invalid token"));
} else if(file_exists($triggerword.".php")) {
    require($triggerword.".php");
} else {
    $attachment = array("fields" => array());
    foreach($_POST as $key => $value) {
       if($key != "token") {
         $attachment['fields'][] = array("title" => $key, "value" => $value);
       }
    }
    echo json_encode(array("text" => "The command $triggerword isn't a known command, but some how it got back here. Testing something?", "attachments" => array($attachment)))."\n";
}
