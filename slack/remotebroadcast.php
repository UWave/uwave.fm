<?php
$arg = $_POST['text'];
$message = "Something's broken pretty bad. Sorry ¯\_(ツ)_/¯";
$show_mapping = json_decode(file_get_contents("/etc/remote_broadcasts.json"), true);

function affirmative_response() {
  $response = array("k", "mkay", "whatever", "done", "uggg fine", ":thumbsup:", ":fuckyou:", ":wink:");
  return $response[array_rand($response)];
}

switch($arg) {
  case "remotebroadcast start":
    if(isset($show_mapping[$_POST['user_name']])) {
      exec("rmlsend 'PX 1 ".$show_mapping[$_POST['user_name']]."!'");  # Begin recording
      exec("rmlsend 'PX 1 050002!'");  # Trigger remote broadcast
      $message = affirmative_response();
    } else {
      $message = "I'm sorry ".$_POST['user_name'].", I'm afraid I can't do that (hint: have one of the tech guys add you to `/etc/remote_broadcasts.json`)";
    }
  break;
  case "remotebroadcast stop":
    exec("rmlsend 'PN 1!'");  # Play the next cart
    exec("rmlsend 'PX 1 050004!'");  # add the End Remote Broadcast cart to next
    $message = affirmative_response();
  break;
  case "remotebroadcast info":
    if(isset($show_mapping[$_POST['user_name']])) {
      $message = "You are ".$_POST['user_name']." and your show's record cart is `".$show_mapping[$_POST['user_name']]."`";
    } else {
      $message = "Youa re ".$_POST['user_name']." but I don't know what show is yours.";
    }
  break;
  case "remotebroadcast mappings":
    $message = "```\n".json_encode($show_mapping, JSON_PRETTY_PRINT)."\n```";
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
