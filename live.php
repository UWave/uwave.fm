<?php require('head.php'); ?>
                <div class="inner cover">
                    <p class="lead">
                        <a href="/listen" class="btn btn-lg btn-play">
                          <img src="assets/img/swoosh.png"><br />
                          <i class="playpause glyphicon glyphicon-play-circle"></i> <span class="playtext">Tune in</span>
                        </a><br />
                        <span class="metadata"></span>
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
            uwave.player.play();
            uwave.navigateTo("/");
        });
    </script>
  </body>
</html>
<?php } ?>
