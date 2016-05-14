<?php
$arg = $_POST['text'];
$message = "Something's broken pretty bad. Sorry ¯\_(ツ)_/¯";
switch($arg) {
  case "start":
    $message = exec("rmlsend PX 0 050002!");
  break;
  case "stop":
    $message = exec("rmlsend PX 0 050004!");
  break;
  default:
    $message = "Yeah i dunno what to do about that.";
    error_log("Unknown command $arg");
  break;
}

echo json_encode(array(
  "text" => $message,
  "username" => "Remote Broadcast Controller",
  "icon_url" => "https://uwave.fm/assets/img/uwave-square.png"
));
