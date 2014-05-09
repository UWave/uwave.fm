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
                    <h1>Contact UWave</h1>
                    If you have any questions or otherwise need to get in touch with us, the best
                    way is just to email <a href="mailto:info@uwave.fm">info@uwave.fm</a>.<br />

                    To contact a speciic department:<br />
                    <ul>
                        <li><b>Business</b>: <a href="mailto:business@uwave.fm">business@uwave.fm</a></li>
                        <li><b>Programming</b>: <a href="mailto:programming@uwave.fm">programming@uwave.fm</a></li>
                        <li><b>Promotions</b>: <a href="mailto:promotions@uwave.fm">promotions@uwave.fm</a></li>
                        <li><b>Technology</b>: <a href="mailto:tech@uwave.fm">tech@uwave.fm</a></li>
                    </ul>
                    <br />
                    Additionally, you can call the studio at (425) 352-WAVE (9283). Our mailing address is:<br />
                        <p>
                            18115 Campus Way NE<br />
                            Box 358561<br />
                            Bothell, WA 98011
                        </p>
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
