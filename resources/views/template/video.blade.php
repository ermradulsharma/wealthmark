

<div class="video-section" style="">
		<video width="100%" id="video"  class='video-js vjs-default-skin vjs-big-play-centered' controls='' data-setup='{}' id='sa-dev' preload='auto'>  
			<source src='' type='video/mp4'/>
 
		</video>
		<div id="circle-play-b" class="video-play-button">
		<span></span>
</div>
<div class="video-overlay-bg" id="video-overlay-bg"></div>
</div>
<script>
const video = document.getElementById("video");
const circlePlayButton = document.getElementById("circle-play-b");
const bgoverlay = document.getElementsByClassName("video-overlay-bg");

function togglePlay() {
	if (video.paused || video.ended) {
		video.play();
	} else {
		video.pause();
	}
}

circlePlayButton.addEventListener("click", togglePlay);
video.addEventListener("playing", function () {
	circlePlayButton.style.opacity = 0;
	document.getElementById( 'video-overlay-bg' ).style.display = 'none';
	
});
video.addEventListener("pause", function () {
	circlePlayButton.style.opacity = 1;
	document.getElementById( 'video-overlay-bg' ).style.display = 'block';
});


</script>