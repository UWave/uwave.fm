<?php if(!isset($_GET['contentonly'])) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get Involved | UWave Radio</title>

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
                    <h1>Get Involved</h1>
                    There are a number of ways to get involved in UWave:
                    <ul>
                        <li><b><a href="https://docs.google.com/forms/d/18veHb-LUaAYtyhzKSUSoa0FAbl6jbYYRYrZ2QcehRS8/viewform">Host a show</a></b><br />
                            Have an idea for a music, talk or information show that you want to
                            bring to our community? Host a show at UWave Radio!<br />
                            No experience necessary, we will train you on how to use the equipment,
                            or help you with the details of pre-recording a show to play if you
                            aren't available to host your show from our broadcast studio. Fill out
                            the form at the link above to start the process. We suggest at least 1
                            hour program length, and require that your show correspond with <a href="/about">UWave
                            Radio goals</a>.
                        <li><b>Attend a meeting</b><br />
                            UWave meets every week on Friday from 1:15pm to 3:15pm in HH1210 (on
                            the <a href="https://www.uwb.edu">UW Bothell</a> campus). If you can't
                            make that, it's okay! Most departments meet at other times. If you know
                            which department you want to help out with, reach out to them by email
                            (<a href="contact">list of departments and their emails here</a>).
                        <li><b><a href="https://docs.google.com/forms/d/1TyoM_hc1y2yPptSztskFrygPI4r6URx21GSx-1tbYNs/viewform">Submit an announcement</a></b><br />
                            Interested in promoting your group or event through UWave? Fill out the
                            form above and smeone will get in contact with you.
                        </ul>
                <?php if(!isset($_GET['contentonly'])) {?>
                </div>
            </div>
        </div>
    </div>
<?php require("foot.php"); ?>
  </body>
</html>
<?php } ?>
