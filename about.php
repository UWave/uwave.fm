<?php if(!isset($_GET['contentonly'])) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UWave Radio</title>

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
                <span class="pagecontents"><?php } ?>
                <div class="content container">
                    <h1>About UWave Radio</h1>
                    UWave Radio is the campus-based community station of the Bothell area and
                    beyond. We are a center for community engagement, a hub for
                    underrepresented voices and music, an environment for professional
                    development, and a catalyst for social justice.<br /><br />

                    <b class="red">Broadcast Application Goal</b><br />
                    We applied for the FCC's LPFM (Low Power FM)
                    <a href="http://cdbs.recnet.net/fmq.php?facid=197326">broadcast application</a>
                    in the end of 2013. If granted, will be broadcasting reaching a potential
                    of 200,000 local listeners on 104.9FM!
                </div>
                <?php if(!isset($_GET['contentonly'])) {?>
                </span>
            </div>
        </div>
    </div>
<?php require("foot.php"); ?>
</body>
</html>
<?php } ?>
