import React from 'react'

import swoosh from '../img/swoosh.png'
const Home = () => (
<div className="inner cover">
    <p className="lead">
        {/* <?php if($settings->online) {?> */}
        <a href="/external" className="btn btn-lg btn-play">
            <img src={swoosh} alt="UWave swoosh shape" />
            <br />
            <i className="playpause glyphicon glyphicon-play-circle" />
            <span className="playtext">Tune in</span>
        </a>
        <br />
            {/* <?php } else {
            echo "<img src=\"assets/img/swoosh.png\" alt=\"UWave swoosh shape\"><br /><br /><b>";
            if(array_key_exists("reason", $settings)) {
                echo $settings->reason;
            } else {
                echo "We are currently offline";
            }
            echo "</b><br />";
            } ?> */}
        <a href="/external" className="navlink externalplayer">External Player</a>
        <span className="metadata"></span>
    </p>
</div>
)

export default Home