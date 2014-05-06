<?php if(!isset($_GET['contentonly'])) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About | UWave Radio</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href="assets/css/uwave.css" rel="stylesheet">

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
                <?php require('head.php'); ?>
                <div class="content container"><?php } ?>
                    <h1>More ways to listen</h1>
                    You can listen to UWave 24/7 right here on UWave.fm by clicking the
                    <i class="glyphicon glyphicon-play-circle"></i> at the top of any page,
                    or with an external player using these files:


                    <table class="table table-condensed">
                    <tr><td>ogg</td><td><a href="/uwave-128.ogg.m3u"><i class="fa fa-volume-up"></i> m3u</a></td><td><a href="/uwave-128.ogg.xspf"><i class="fa fa-volume-up"></i> xspf</a></td></tr>
                    <tr><td>mp3</td><td><a href="/uwave-128.mp3.m3u"><i class="fa fa-volume-up"></i> m3u</a></td><td><a href="/uwave-128.mp3.xspf"><i class="fa fa-volume-up"></i> xspf</a></td></tr>
                    <tr><td>aac</td><td><a href="/uwave-128.m4a.m3u"><i class="fa fa-volume-up"></i> m3u</a></td><td><a href="/uwave-128.m4a.xspf"><i class="fa fa-volume-up"></i> xspf</a></td></tr>
                    </table>
                    <?php if(!isset($_GET['contentonly'])) {?>
                </div>
            </div>
        </div>
    </div>
<?php require("foot.php"); ?>
</body>
</html>
<?php } ?>
