<?php
preg_match("/iPhone|Android|iPad|iPod|webOS/", $_SERVER['HTTP_USER_AGENT'], $matches);
$os = current($matches);

$url = "/";

switch($os){
   case 'iPhone': $url = "https://itunes.apple.com/us/app/uwave-radio/id1084008964?mt=8"; break;
   case 'Android': $url = "/"; break;
   case 'iPad': $url = "https://itunes.apple.com/us/app/uwave-radio/id1084008964?mt=8"; break;
   case 'iPod': $url = "https://itunes.apple.com/us/app/uwave-radio/id1084008964?mt=8"; break;
}

header("Location: $url");
