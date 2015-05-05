<?php require('head.php'); ?>
                <div class="inner cover">
                    <p class="lead">
                        <?php if($settings->online) {?>
                        <a href="/external" class="btn btn-lg btn-play">
                          <img src="assets/img/swoosh.png" alt="UWave swoosh shape"><br />
                          <i class="playpause glyphicon glyphicon-play-circle"></i> <span class="playtext">Tune in</span>
                        </a><br />
                          <?php } else {
                            echo "<img src=\"assets/img/swoosh.png\" alt=\"UWave swoosh shape\"><br /><br /><b>";
                            if(array_key_exists("reason", $settings)) {
                              echo $settings->reason;
                            } else {
                              echo "We are currently offline";
                            }
                            echo "</b><br />";
                          } ?>
                        <a href="/external" class="navlink externalplayer">External Player</a><br />
                        <span class="metadata"></span>
                    </p>
                    <p>
                        <a href="http://uwave.fm/petition" target="_blank" class="red">Sign our petition to help UWave Radio get on the air.</a>
                    </p>
                </div>
                <?php if(!isset($_GET['contentonly'])) {?>
                </span>
            </div>
        </div>
    </div>
    <?php require("foot.php"); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-play").on("click", uwave.playpause);
        });
    </script>
  </body>
</html>
<?php } ?>
