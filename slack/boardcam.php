<?php
$documentroot = "/var/www/uwave.fm";
$baseurl = "https://uwave.fm";

$path = "/slack/webcam/".date("Y-m-d_H:i:s").".jpg";

exec("avconv -f video4linux2 -s 1920x1080 -i /dev/video0 -ss 0:0:2 -vf \"transpose=1\" -frames 1 ".$documentroot.$path);

echo json_encode(array(
  "text" => "Here's a picture of the mixing board",
  "attachments" => array(
    array(
      "image_url" => $baseurl.$path,
      "fallback" => "Image of the studio"
    )
  ),
  "username" => "Studio Boardcam",
  "icon_url" => "https://uwave.fm/assets/img/uwave-square.png"
));
