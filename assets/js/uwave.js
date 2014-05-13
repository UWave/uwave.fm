$(document).ready(function() {
    if(window.location.hostname != "127.0.0.1" &&
     window.location.hostname != "localhost") {
       $.getScript("assets/js/bugsense.min.js", function() {
         Bugsense.initAndStartSession({ apiKey: '9e74c309' });
       });
    }
    $(".navli.listen").hide();
    window.uwave = {
      metadata: {},
      primus: null
    };

    uwave.player = document.getElementById("player");

    uwave.playpause = function(e) {
        if(player.paused) {
            player.play();
            $(".playpause")
                .removeClass("glyphicon-play-circle")
                .addClass("glyphicon-pause");
            $(".tunein").addClass("pause");
            $(uwave).trigger("play");
        } else {
            player.pause()
            $(".playpause")
                .removeClass("glyphicon-pause")
                .addClass("glyphicon-play-circle");
            $(".tunein").removeClass("pause");
            $(uwave).trigger("pause");
        }
        e.preventDefault();
    };

    uwave.updateMetadata = function() {
      var metadata = ""
      if(uwave.metadata.title != "") {
        metadata += uwave.metadata.title + "<br />";
      }
      if(uwave.metadata.album != "") {
        metadata += "<small>" + uwave.metadata.album + "</small><br />";
      }
      if(uwave.metadata.artist != "") {
        metadata += "<small>By " + uwave.metadata.artist + "</small>";
      }
      $(".metadata").html(metadata);
    };


    // These functions are just for the home page
    $(uwave.player).on("playing", function() {
        $(".playtext").text("Pause");
        $(".metadata").show();
    });
    $(uwave.player).on("pause", function() {
        $(".playtext").text("Tune in");
        $(".metadata").hide();
    });
    $(uwave.player).on("play", function() {
      $(".playtext").text("Erry day i'm bufferin...")
    });

    $(uwave).on("pageload", function() {
        if(!uwave.player.paused) {
            $(".playtext").text("Pause");
            $(".btn-play .playpause")
                .removeClass("glyphicon-play-circle")
                .addClass("glyphicon-pause");
            uwave.updateMetadata();
            $(".metadata").show();
        }
        $(".btn-play").on("click", uwave.playpause);
    });

    uwave.fixActiveNav = function() {
        // deactivate the old nav link
        $(".active").removeClass("active");
        // find the new one
        var pagename = window.location.pathname.split(".")[0];
        pagename = pagename.replace("/", "");
        if(pagename == "" || pagename == "index") {
            pagename = "home";
        }
        $(".navli." + pagename).addClass("active");
    };

    function navigateTo(newurl) {
      console.log("Navigating to", newurl);
      $.get(newurl + "?contentonly").success(function(data) {
          $(".pagecontents").html(data);
          history.pushState(null, null, newurl);
          uwave.fixActiveNav();
          if(window.hasOwnProperty("ga")) {
            ga('set', 'location', window.location.href);
            ga('send', 'pageview');
          }
          $(uwave).trigger("pageload", newurl);
      });
    }

    $(".navlink").on("click", function(e) {
        navigateTo(e.currentTarget.href);
        e.preventDefault();
    });

    $(window).on('popstate', function(e) {
      navigateTo(document.location.href);
    });

    $(".tunein").on("click", uwave.playpause);
    uwave.fixActiveNav();

    $.getScript('https://www.uwave.fm:4444/primus/primus.js', function success(data, textStatus, jqxhr) {
        uwave.primus = new Primus('https://www.uwave.fm:4444');
        uwave.primus.on('data', function incoming(data) {
            if(data.type == "metadata") {
              uwave.metadata = data;
              uwave.updateMetadata();
              $(uwave).trigger("metadata", data)
            }
        });
    });

    $(".tunein").tooltip({title: function() {
      if(uwave.player.paused) {
        return "Listen to UWave";
      } else {
        return "Stop listening";
      }
    }, placement: 'bottom'})

    //TODO: This URL should be relative when we launch
    $.get("https://uwave.fm/listen/now-playing.json").success(function(data) {
      uwave.metadata = data;
      uwave.updateMetadata();
    });

    if(window.hasOwnProperty("ga")) {
      $(uwave.player).on("play", function() {
        ga('send', 'event', 'tunein', 'play');
      });
      $(uwave.player).on("error", function() {
        ga('send', 'event', 'tunein', 'error');
      });
      $(uwave.player).on("pause", function() {
        ga('send', 'event', 'tunein', 'pause');
      });
      $(uwave.player).on("playing", function() {
        ga('send', 'event', 'tunein', 'playing');
      });
      $(uwave.player).on("stalled", function() {
        ga('send', 'event', 'tunein', 'stalled');
      });
    }
});
