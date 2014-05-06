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

    // These functions are just for the home page
    $(uwave).on("play", function() {
        $(".playtext").text("Pause");
    });
    $(uwave).on("pause", function() {
        $(".playtext").text("Tune in");
    });
    $(uwave).on("pageload", function() {
        if(!uwave.player.paused) {
            $(".playtext").text("Pause");
            $(".btn-play .playpause")
                .removeClass("glyphicon-play-circle")
                .addClass("glyphicon-pause");
        }
    });

    $(".navlink").on("click", function(e) {
        var newurl = e.currentTarget.href;
        console.log("Navigating to", newurl);
        $.get(newurl + "?contentonly").success(function(data) {
            $(".active").removeClass("active");
            $(e.currentTarget.offsetParent).addClass("active");
            $(".pagecontents").html(data);
            history.pushState(null, null, newurl);
            $(uwave).trigger("pageload", newurl);
        });
        e.preventDefault();
    });

    $(".tunein").on("click", uwave.playpause);

});
