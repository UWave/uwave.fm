$(document).ready(function() {
  function receiverListener(e) {
    console.log("ReceiverListener", e);
    if( e === chrome.cast.ReceiverAvailability.AVAILABLE) {
      $(".chromecast").show();
    } else if(e === chrome.cast.ReceiverAvailability.UNAVAILABLE) {
      $(".chromecast").hide();
    }
  }

  function sessionListener() {
    console.log('New session ID: ', e.sessionId);
    console.log("Session Listener args:", arguments);
  }

  function castInitSuccess() {
    console.log("Cast init sucessful:", arguments);
  }

  function castInitError() {
    console.log("Cast init error:", arguments);
  }

  initializeCastApi = function() {
    uwave.cast = {};
    var applicationID = chrome.cast.media.DEFAULT_MEDIA_RECEIVER_APP_ID;
    var sessionRequest = new chrome.cast.SessionRequest(applicationID);
    var apiConfig = new chrome.cast.ApiConfig(sessionRequest,
      sessionListener,
      receiverListener);
    chrome.cast.initialize(apiConfig, castInitSuccess, castInitError);
  }

  window['__onGCastApiAvailable'] = function(loaded, errorInfo) {
    if (loaded) {
      initializeCastApi();
    } else {
      console.log(errorInfo);
    }
  }
  function castLaunchError() {
    console.log("Failed to launch session", arguments);
  }
  function castRequestSessionSuccess(e) {
    console.log("Got a session!", e);
    uwave.cast.session = e;
    $("#castIcon img").attr('src', 'assets/img/cast_icon_active.png');
    /*
    uwave.cast.session.addUpdateListener(sessionUpdateListener.bind(this));
    if (session.media.length != 0) {
      onMediaDiscovered('onRequestSession', session.media[0]);
    }
    uwave.cast.session.addMediaListener(
      onMediaDiscovered.bind(this, 'addMediaListener'));
    uwave.cast.session.addUpdateListener(sessionUpdateListener.bind(this));
    */
    loadStream();
  }

  function loadStream() {
    console.log("Loading Stream!")
    uwave.cast.mediaInfo = new chrome.cast.media.MediaInfo(uwave.streams.ogg);
    uwave.cast.request = new chrme.cast.media.LoadRequest(uwave.cast.mediaInfo);
    uwave.cast.request.autoplay = false;
    uwave.cast.session.loadMedia(uwave.cast.request,
      castMediaDiscovered.bind(this, 'loadMedia'),
      castMediaerror
    )
  }

  $("#castIcon").on('click', function() {
    chrome.cast.requestSession(castRequestSessionSuccess, castLaunchError);
  })
});
