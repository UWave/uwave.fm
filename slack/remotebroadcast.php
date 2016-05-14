<?php
$arg = $_POST['text'];
$message = "Something's broken pretty bad. Sorry ¯\_(ツ)_/¯";

function affirmative_response() {
  $response = array("k", "mkay", "whatever", "done", "uggg fine");
  return $response[array_random($response)];
}

switch($arg) {
  case "remotebroadcast start":
    exec("rmlsend 'PX 1 050035!'");  # Record Game Night
    exec("rmlsend 'PX 1 050002!'");  # Trigger remote broadcast
    $message = affirmative_response();
  break;
  case "remotebroadcast stop":
    exec("rmlsend 'PX 1 050004!'");  # add the End Remote Broadcast cart to next
    exec("rmlsend 'PN 1!'");  # Play the next cart
    $message = affirmative_response();
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
