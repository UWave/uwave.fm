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
                    <h1>About Us</h1>
                    <p><i>UWave Radio is the campus-based community station of the Bothell area and
                    beyond. We are a center for community engagement, a hub for
                    underrepresented voices and music, an environment for professional
                    development, and a catalyst for social justice.</i></p><br />

                    <p>We started in 2012, have been building a radio station from
                      scratch at <a href="https://www.uwb.edu" target="_blank">UW Bothell</a>.
                      We first started broadcasting online in the spring of 2013,
                      filling the schedue as we can and the rest with automated playback.
                      We applied for the FCC's LPFM (Low Power FM)
                      <a href="http://cdbs.recnet.net/fmq.php?facid=197326">broadcast application</a>
                      in the end of 2013. If granted, will be broadcasting an FM
                      signal for the campus and beyond.</p>

                    <p>Our organization is broken into four departments, who handle
                      the key pieces of the station with the help of two directors
                      who tie everything together and ensure that everything gets
                      where it needs to be. The departments are as follows:</p>

                      <ul>
                        <li><b class="red">Business</b> handles everything businessy.
                        Legal paperwork, funding sources, etc.</li>
                        <li><b class="red">Programming</b> handles what's on the
                          air. They organize shows, curate the music library.</li>
                        <li><b class="red">Promotions</b> tells people about UWave.
                          They coordinate our message, do outreach and work with
                          other groups on and offcampus to hold events.</li>
                        <li><b class="red">Technology</b> runs the computers, website
                          and audio equipment, including the studio and servers.</li>
                      </ul>
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
