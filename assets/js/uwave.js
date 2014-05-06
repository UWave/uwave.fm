$(document).ready(function() {
    window.uwave = {};
    uwave.player = document.getElementById("player");
    uwave.playpause = function(e) {
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
        e.preventDefault();
    };

    $(uwave).on("play", function() {
        $(".playtext").text("Pause");
    });
    $(uwave).on("pause", function() {
        $(".playtext").text("Tune in");
    });

    $(".navlink").on("click", function(e) {
        var newurl = e.currentTarget.href;
        console.log("Navigating to", newurl);
        $.get(newurl + "?contentonly").success(function(data) {
            $(".pagecontents").html(data);
            history.pushState(null, null, newurl);
        });
        e.preventDefault();
    });

    $(".tunein").on("click", uwave.playpause);

});
