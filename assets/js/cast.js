$(document).ready(function() {
  function receiverListener(e) {
    if( e === chrome.cast.ReceiverAvailability.AVAILABLE) {
      $(".rightmenu").append($("<img>").attr('src', 'assets/img/casticon.on.png'))
    }
  }

  function sessionListener() {
    console.log("Session Listener args:", arguments);
  }

  function castInitSuccess() {
    console.log("Cast init sucessful:", arguments);
  }

  function castInitError() {
    console.log("Cast init error:", arguments);
  }

  function initializeCastApi() {
    var sessionRequest = new chrome.cast.SessionRequest(chrome.cast.media.DEFAULT_MEDIA_RECEIVER_APP_ID);
    var apiConfig = new chrome.cast.ApiConfig(sessionRequest,
      sessionListener,
      receiverListener);
    chrome.cast.initialize(apiConfig, castInitSuccess, castInitError);
  }

  function checkCast() {
    if(chrome.cast || chrome.cast.isAvailable) {
      initializeCastApi();
    } else {
      setTimeout(checkCast, 1000);
    }
  }

  checkCast();
});
