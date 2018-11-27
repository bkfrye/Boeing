document.addEventListener("DOMContentLoaded", () => {


  const loadVid = () => {
  	const url = 'https://pro-ficiency.akamaized.net/website/web-intro-747-v4-web.mp4';

  	const videoEl = `<div class="video-wrapper">
      <div id="close-video">
        <svg viewBox="0 0 475.2 475.2">
          <path d="M405.6,69.6C360.7,24.7,301.1,0,237.6,0s-123.1,24.7-168,69.6C24.7,114.5,0,174.1,0,237.6s24.7,123.1,69.6,168
        	c44.9,44.9,104.5,69.6,168,69.6s123.1-24.7,168-69.6c44.9-44.9,69.6-104.5,69.6-168S450.5,114.5,405.6,69.6z M386.5,386.5
        	c-39.8,39.8-92.7,61.7-148.9,61.7c-56.2,0-109.1-21.9-148.9-61.7c-82.1-82.1-82.1-215.7,0-297.8C128.5,48.9,181.4,27,237.6,27
        	c56.2,0,109.1,21.9,148.9,61.7C468.6,170.8,468.6,304.4,386.5,386.5z"/>
          <path d="M342.1,323.2c5.3,5.3,5.3,13.8,0,19.1c-2.6,2.7-6,4-9.5,4c-3.4,0-6.9-1.4-9.5-4l-85.6-85.6l-85.6,85.6c-2.6,2.7-6.1,4-9.5,4
        	c-3.4,0-6.9-1.4-9.5-4c-5.3-5.3-5.3-13.8,0-19.1l85.6-85.6L132.9,152c-5.3-5.3-5.3-13.8,0-19.1c5.3-5.3,13.8-5.3,19.1,0l85.6,85.6
        	l85.6-85.6c5.3-5.3,13.8-5.3,19.1,0c5.3,5.3,5.3,13.8,0,19.1l-85.6,85.6L342.1,323.2z"/>
        </svg>
      </div>
      <video id='intro-video' autoplay controls src='${url}'></video>
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