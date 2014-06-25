<?php require('head.php'); ?>
                <div class="content container">

                    <noscript>
                      Since you've got JavaScript disabled, you'll need to use
                      this player (or an external one) to listen:<br /><br />

                      <center>
                        <audio id="nojsPlayer" preload="none" controls>
                          <source src="http://live.uwave.fm:8000/listen-128.ogg" type="audio/ogg">
                          <source src="http://live.uwave.fm:8000/listen-128.mp3" type="audio/mp3">
                        </audio>
                      </center>
                    </noscript>
                    <h2>Listen in an external player</h2>
                    If you'd prefer to listen in an external player, such as VLC, use one of these:


                    <table class="table table-condensed">
                    <tr><td>ogg</td><td><a href="/uwave-128.ogg.m3u"><i class="fa fa-volume-up"></i> m3u</a></td><td><a href="/uwave-128.ogg.xspf"><i class="fa fa-volume-up"></i> xspf</a></td></tr>
                    <tr><td>mp3</td><td><a href="/uwave-128.mp3.m3u"><i class="fa fa-volume-up"></i> m3u</a></td><td><a href="/uwave-128.mp3.xspf"><i class="fa fa-volume-up"></i> xspf</a></td></tr>
                    <tr><td>aac</td><td><a href="/uwave-128.m4a.m3u"><i class="fa fa-volume-up"></i> m3u</a></td><td><a href="/uwave-128.m4a.xspf"><i class="fa fa-volume-up"></i> xspf</a></td></tr>
                    </table>
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
