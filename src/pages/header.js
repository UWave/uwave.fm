import React from 'react'

const Header = () => (
<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="masthead clearfix">
                <div class="inner">
                    <span class="col-md-3">
                        <ul class="nav masthead-nav">
                            <li><a href="." class="navlink"><img src="assets/img/uwave.png" alt="UWave" /></a></li>
                        </ul>
                    </span>
                    <span class="col-md-6">
                        <ul class="nav masthead-nav">
                            <li class="navli home"><a href="." class="navlink">Home</a></li>
                            <li class="navli about"><a href="/about" class="navlink">About</a></li>
                            <li class="navli getinvolved"><a href="/getinvolved" class="navlink">Get Involved</a></li>
                            <li class="navli contact"><a href="/contact" class="navlink">Contact Us</a></li>
                            <li class="navli psa"><a href="/psa" class="navlink">PSAs</a></li>
                            <li class="navli schedule"><a href="/schedule" class="navlink">Schedule</a></li>
                            <li class="navli listen"><a href="/external" class="navlink">Listen</a></li>
                            <li class="navli donate"><a href="/donate" class="navlink">Donate</a></li>
                        </ul>
                    </span>
                    <span class="col-md-3">
                        <ul class="nav masthead-nav">
                            <li><a href="http://yourvoiceyourvibe.tumblr.com/" ><i class="fa fa-tumblr"></i></a></li>
                            <li><a href="https://twitter.com/UWaveRadio" ><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://facebook.com/UWaveRadio" ><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://github.com/UWave" ><i class="fa fa-github"></i></a></li>
                            <li><a href="https://www.instagram.com/uwaveradio/" ><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </span>
                </div>
            </div>
        </div>
    </div>                
</div>
)

export default Header