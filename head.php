                <div class="masthead clearfix">
                    <div class="inner">
                        <span class="col-md-4">
                            <ul class="nav masthead-nav">
                                <li><a href="."><img src="assets/img/uwave.png" /></a></li>
                            </ul>
                        </span>
                        <span class="col-md-4">
                            <ul class="nav masthead-nav">
                                <li<?php if($_SERVER['SCRIPT_NAME'] == "/index.php") {?> class="active"<?php } ?>><a href="." class="navlink">Home</a></li>
                                <li<?php if($_SERVER['SCRIPT_NAME'] == "/about.php") {?> class="active"<?php } ?>><a href="about.php" class="navlink">About</a></li>
                                <li<?php if($_SERVER['SCRIPT_NAME'] == "/getinvolved.php") {?> class="active"<?php } ?>><a href="getinvolved.php" class="navlink">Get Involved</a></li>
                                <li<?php if($_SERVER['SCRIPT_NAME'] == "/contact.php") {?> class="active"<?php } ?>><a href="contact.php" class="navlink">Contact Us</a></li>
                                <li<?php if($_SERVER['SCRIPT_NAME'] == "/schedule.php") {?> class="active"<?php } ?>><a href="schedule.php" class="navlink">Schedule</a></li>
                                <li<?php if($_SERVER['SCRIPT_NAME'] == "/listen.php") {?> class="active"<?php } ?>><a href="listen.php" class="navlink">Listen</a></li>
                                <li<?php if($_SERVER['SCRIPT_NAME'] == "/donate.php") {?> class="active"<?php } ?>><a href="donate.php" class="navlink">Donate</a></li>
                            </ul>
                        </span>
                        <span class="col-md-4">
                            <ul class="nav masthead-nav">
                                <li><a href="https://twitter.com/UWaveRadio"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://facebook.com/UWaveRadio"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://github.com/UWave"><i class="fa fa-github"></i></a></li>
                                <li><a href="/listen.php" class="tunein"><i class="glyphicon glyphicon-play-circle playpause"></i></a></li>
                            </ul>
                        </span>
                    </div>
                </div>
                <audio id="player" preload="none">
                    <source src="http://live.uwave.fm:8000/listen-128.ogg" type="audio/ogg">
                    <source src="http://live.uwave.fm:8000/listen-128.mp3" type="audio/mp3">
                </audio>