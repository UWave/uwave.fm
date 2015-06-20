<?php
$settings = array("online" => True);
if(file_exists("settings.json")) {
  $settings = json_decode(file_get_contents("settings.json"));
}
if(!isset($_GET['contentonly'])) { ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google+ Verification -->
    <title>UWave Radio</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/uwave.css">

    <link rel="shortcut icon" href="favicon.ico">

    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="player">
    <meta name="twitter:site" content="@UWaveRadio">
    <meta name="twitter:title" content="UWave Radio">
    <meta name="twitter:description" content="UWave Radio is the campus radio station for the University of Washington | Bothell.">
    <meta name="twitter:image" content="https://uwave.fm/assets/img/logo.png">
    <meta name="twitter:player" content="https://uwave.fm/embed?autoplay">

    <meta name="twitter:player:width" content="480">
    <meta name="twitter:player:height" content="300">
    <meta name="twitter:player:stream" content="https://uwave.fm/listen/128.ogg">
    <meta name="twitter:player:stream:content_type" content="audio/ogg">

    <!-- Schema.org markup for G+, etc -->
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "UWave Radio",
        "url": "https://uwave.fm",
        "logo": "https://uwave.fm/assets/img/uwave-square.png",
        "description": "UWave Radio is the campus-based community station of the Bothell area and beyond.",
        "sameAs": [
          "https://www.facebook.com/UWaveRadio",
          "https://twitter.com/UWaveRadio",
          "https://plus.google.com/+UwaveFm"
        ]
      }
    </script>

    <!-- Open Graph data for Facespace, etc -->
    <meta property="og:title" content="UWave Radio" />
    <meta property="og:url" content="https://uwave.fm<?php echo $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:image" content="https://uwave.fm/assets/img/uwave-square.png" />
    <meta property="og:description" content="UWave Radio is the campus-based community station of the Bothell area and beyond." />
    <meta property="og:site_name" content="uwave.fm" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner">
                        <span class="col-md-3">
                            <ul class="nav masthead-nav">
                                <li><a href="." class="navlink"><img src="assets/img/uwave.png" alt="UWave" /></a></li>
                            </ul>
                        </span>
                        <span class="col-md-6">
                            <ul class="nav masthead-nav">
                                <li class="navli home"><a href="." class="navlink">Home</a></li>
                                <li class="navli about"><a href="/about" class="navlink">About</a></li>
                                <li class="navli getinvolved"><a href="/getinvolved" class="navlink">Get Involved</a></li>
                                <li class="navli contact"><a href="/contact" class="navlink">Contact Us</a></li>
                                <li class="navli psa"><a href="/psa" class="navlink">PSAs</a></li>
                                <li class="navli schedule"><a href="/schedule" class="navlink">Schedule</a></li>
                                <li class="navli listen"><a href="/external" class="navlink">Listen</a></li>
                                <li class="navli donate"><a href="/donate" class="navlink">Donate</a></li>
                            </ul>
                        </span>
                        <span class="col-md-3">
                            <ul class="nav masthead-nav">
                                <li><a href="http://yourvoiceyourvibe.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="https://twitter.com/UWaveRadio" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://facebook.com/UWaveRadio" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://github.com/UWave" target="_blank"><i class="fa fa-github"></i></a></li>
                            </ul>
                            <?php if($settings->online) {?>
                            <a href="/external" class="tunein topbutton red"><i class="glyphicon glyphicon-play-circle playpause"></i></a>
                            <?php } ?>
                        </span>
                    </div>
                </div>
                <?php if($settings->online) {?>
                <audio id="player" preload="none">
                    <source src="/listen/128.ogg" type="audio/ogg">
                    <source src="/listen/128.mp3" type="audio/mp3">
                </audio>
                <?php } ?>
                <span class="pagecontents"><?php } ?>
