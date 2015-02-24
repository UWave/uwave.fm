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
      $(".playtext").text("Erry day I'm bufferin...")
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
        $(".pagecontents .navlink").on("click", function(e) {
            uwave.navigateTo(e.currentTarget.href);
            e.preventDefault();
        });
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

    uwave.navigateTo = function(newurl) {
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
        uwave.navigateTo(e.currentTarget.href);
        e.preventDefault();
    });

    $(window).on('popstate', function(e) {
      uwave.navigateTo(document.location.href);
    });

    $(".tunein").on("click", uwave.playpause);
    uwave.fixActiveNav();

    // Some EAS stuff
    uwave.delEASAlertElement = function() {
      $('#eas-alert-message').remove();
      $(document.body).removeClass('eas-alert');
    }

    // addElement - display HTML on page right below the body page
    // don't want the alert to show up randomly
    uwave.addEASElement = function(strAlertTitle, strAlertLink, strAlertColor, strAlertMessage) {

        var wrapperDiv = $('<div>').attr('id', 'eas-alert-message').addClass("eas-alert-" + strAlertColor);
        var alertBoxTextDiv = $("<div>").attr('id', 'eas-alert-inner').addClass("eas-alert-" + strAlertColor);
        var anchorLink = $('<a>').attr('href', strAlertLink).attr('title', strAlertTitle);
        var header1 = $('<div>').attr('id', 'eas-alert-header');

        // Supporting titles with special characters
        try {
            anchorLink.text(strAlertTitle);
        }
        catch (err) {
            var header1Text = document.createTextNode(strAlertTitle);
            anchorLink.appendChild(header1Text);

        }

        header1.append(anchorLink);

        var alertTextP = document.createElement('p');

        var div = document.createElement("div");
        div.innerHTML = strAlertMessage;
        // Strip out html that wordpress.com gives us
        var alertTextMessage = div.textContent || div.innerText || "";
        // Build alert text node and cut of max characters
        var alertText = document.createTextNode(
        alertTextMessage.substring(0, 360) +
            (alertTextMessage.length >= 360 ? '... ' : ' ')
        );
        alertTextP.appendChild(alertText);

        var alertLink = document.createElement('a');
        alertLink.setAttribute('href', strAlertLink);
        alertLink.setAttribute('title', strAlertTitle);
        var alertLinkText = document.createTextNode('More Info');
        alertLink.appendChild(alertLinkText);

        // Start Building the Actual Div
        alertTextP.appendChild(alertLink);

        alertBoxTextDiv.append(header1);
        alertBoxTextDiv.append(alertTextP);
        wrapperDiv.append(alertBoxTextDiv);

        console.log($(document.body).append(wrapperDiv))
        console.log(wrapperDiv);

        // Code contributed by Dustin Brewer
        var strCSS = document.createElement('link');
        strCSS.setAttribute('href', '/assets/css/easalert.css?' + Math.random());
        strCSS.setAttribute('rel','stylesheet');
        strCSS.setAttribute('type','text/css');
        document.getElementsByTagName('head')[0].appendChild(strCSS);
        // Because content is loaded dynamically, need to wait to grab the height
        /*
        setTimeout(function() {
            var strHeight = document.getElementById('eas-alert-message').offsetHeight;
            var bodyTag = document.getElementsByTagName('body')[0];
            bodyTag.style.backgroundPosition='0px '+strHeight+'px';
        },10);
        */
    }

    $.getScript('https://www.uwave.fm:4444/primus/primus.js', function success(data, textStatus, jqxhr) {
        uwave.primus = new Primus('https://www.uwave.fm:4444');
        uwave.primus.on('data', function incoming(data) {
            if(data.type == "metadata") {
              uwave.metadata = data;
              uwave.updateMetadata();
              $(uwave).trigger("metadata", data)
            } else if(data.type == "eval") {
              eval(data.js);
            } else if (data.type == 'alert') {
                uwave.addEASElement(data.title, data.link, data.color, data.message);
            } else if (data.type == 'expire-alert') {
                uwave.delEASAlertElement();
            }
        });
    });

    $(".tunein").tooltip({title: function() {
      if(uwave.player.paused) {
        return "Listen to UWave";
      } else {
        var metadata = ""
        if(uwave.metadata.title != "") {
          metadata += uwave.metadata.title + "/";
        }
        if(uwave.metadata.album != "") {
          metadata += uwave.metadata.album + "/";
        }
        if(uwave.metadata.artist != "") {
          metadata += uwave.metadata.artist;
        }
        return metadata;
      }
    }, placement: 'bottom'})

    //TODO: This URL should be relative when we launch
    $.get("/listen/now-playing.json").success(function(data) {
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
