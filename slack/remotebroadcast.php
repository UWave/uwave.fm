<?php
$arg = $_POST['text'];
$message = "Something's broken pretty bad. Sorry ¯\_(ツ)_/¯";
switch($arg) {
  case "remotebroadcast start":
    exec("rmlsend PX 1 050002!");
    $message = "k";
  break;
  case "remotebroadcast stop":
    exec("rmlsend PX 1 050004!");
    $message = "k";
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
