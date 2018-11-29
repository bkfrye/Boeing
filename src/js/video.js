document.addEventListener("DOMContentLoaded", () => {


  const loadVid = () => {
  	const url = 'https://pro-ficiency.akamaized.net/website/web-intro-747-v4-web.mp4';

  	const videoEl = `<div class="video-wrapper">
      <div class="video-content">
        <div id="close-video">X</div>
        <video id='intro-video' width="100%" height="auto" autoplay controls src='${url}'></video>
      </div>
    </div>`;

    var container = document.querySelector('#video-container');
    container.innerHTML = videoEl;
    var video = document.querySelector('#intro-video');
    video.load();
    document.body.classList.add('js-active-video');
  }

  const playBtn = document.querySelector('#play-btn');
  playBtn.onclick = loadVid;


  const closeVid = () => {
    console.log('close video');
    document.body.classList.remove('js-active-video');
    document.querySelector('.video-wrapper').remove()
  }

  const videoContainer = document.querySelector('#video-container');
  videoContainer.addEventListener( 'click', function(e) {
    if( document.querySelector('#close-video') ) {
      closeVid();
    }
  });

  const video = document.querySelector('#intro-video');
  if ( video ) {
    video.addEventListener('click', function(e) {
      e.stopPropagation();
    });
  }




});