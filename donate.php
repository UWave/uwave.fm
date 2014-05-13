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
                    <h1>Donate</h1>
                    We accept donations through our gift account with the UW.<br /><br /><br />
                    <h2>
                      <center>
                        <a href="https://www.washington.edu/giving/make-a-gift/?page=funds&source_typ=3&source=UWAVEB" class="btn btn-lg btn-red">Click here to donate to UWave Radio</a>
                      </h2>
                    </center>
                    <br /><br /><br />

                    <h3>Donation FAQs</h3>
                    <ol id="donationFAQs">
                        <li><b class="red">How much can I donate?</b><br />
                        Donors must give a minimum of $10; that is the only restriction.
                        There is no maximum amount that you can donate; the more the merrier!
                        Those who wish to donate amounts larger than $1,000, please contact
                        <a href="mailto:business@uwave.fm">business@uwave.fm</a> to clear with our
                        Business department first.</li>

                        <li><b class="red">Do I have to donate online?</b><br />
                        No. You can also donate with a check or cash by mail to:<br /><br />
                        <address>
                            Box 358528<br />
                            118115 Campus Way NE, UW1, Suite 281<br />
                            Bothell WA 98011-8246<br />
                        </address>
                        For check donations, please pay to the order of the University of Washington.
                        On the memo line, write "UWave Radio" as shown below. Please note that it may
                        take some time for you to receive acknowledgment for a check or cash contribution.</li>

                        <center>
                          <a href="assets/img/check.jpg" target="_BLANK">
                            <img src="assets/img/check.jpg" width="40%" alt="Sample Check"/>
                          </a>
                        </center>

                        <li><b class="red">What is the money used for?</b><br />
                        As a growing community radio station, UWave Radio accumulates a big bill. We
                        want to have as much saved in emergency funds as we can so we can continue to
                        provide quality radio to our listeners. The money earned in the gift account
                        is used by UWave Radio only, and will be used for things such as to update
                        our music collection, pay for new equipment, purchase promotional materials,
                        and fund events. During our fund drives, UWave Radio will outline the specific
                        goal for funds. For example, if we need $800 for a new channel control mixer,
                        we will announce our goal on air (and also describe what a channel control mixer
                        is). The money we receive during that fund drive will go only to the purchase(s)
                        we announced.</li>

                        <li><b class="red">What's in it for me?</b><br />
                        By supporting UWave Radio, you are helping us provide quality on-air programming
                        to the community. The more supporters we have, the better we are able to fund and
                        accomplish our goals as an organization.</li>
                    </ol>
                    <br /><br />
                    <b class="red">UWave Radio's mission statement</b><br />
                    "UWave Radio is the campus-based community station of the Bothell area and beyond. We are a center for community engagement, a hub for underrepresented voices and music, an environment for professional development, and a catalyst for social justice."
                    For more information on UWave Radio, please visit our <a href="about">about</a> page.

                    Thank you for supporting UWave Radio, UWBs student-run community radio station!
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
