$(document).ready(function() {
    window.uwave = {};
    uwave.player = document.getElementById("player");
    uwave.playpause = function() {
        if(player.paused) {
            player.play();
            $(".playpause")
                .removeClass("glyphicon-play-circle")
                .addClass("glyphicon-pause");
            $(uwave).trigger("play");
        } else {
            player.pause()
            $(".playpause")
                .removeClass("glyphicon-pause")
                .addClass("glyphicon-play-circle");
            $(uwave).trigger("pause");
        }
        return false;
    }

    $(".tunein").on("click", uwave.playpause)
});
