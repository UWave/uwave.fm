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
});
