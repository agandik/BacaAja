LottieInteractivity.create({
  player: '#playlottie',
  mode: "cursor",
  actions: [
    {
      type: "click",
      forceFlag: false
    }
  ]
});

LottieInteractivity.create({
  player: '#playlottie1',
  mode: "cursor",
  actions: [
    {
      type: "click",
      forceFlag: false
    }
  ]
});

function delay(URL) {
  setTimeout(function () { window.location = URL }, 500);
}