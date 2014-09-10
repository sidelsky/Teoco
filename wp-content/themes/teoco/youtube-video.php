
<?php if ( have_rows('video_repeater') ) : ?>

	<section class="page-wrapper__wide section" id="vision-values">
		<article class="page-wrapper__wide__inner padding-tb">
			<?php if(is_page('careers')) : ?>
				<h1>Working at TEOCO</h1>
			<?php endif; ?>
			<?php $count = 0; ?>
			<?php if( have_rows('video_repeater') ): ?>
				<?php while( have_rows('video_repeater') ): the_row(); ?>
					<?php
					$video_name = get_sub_field('video_name');
					$video_title = get_sub_field('video_title');
					$video_cover_r = get_sub_field('video_cover_r');

					//YouTube video
					$video_youtube = get_sub_field('video_youtube');

					//Vimeo video
					//$video_r = get_sub_field('video_r');

					$excerpt_r = get_sub_field('excerpt_r');
					$transcript_r = get_sub_field('transcript_r');
					$count++;
					?>
					<div class='js-video'>

						<img src="<?php bloginfo('template_directory'); ?>/img/icons/large-play-icon.png" alt="Play" id="play-icon_<?php echo $count; ?>" class="play">
						
						<div id="title-wrapper_<?php echo $count; ?>" class="title-wrapper">
							<h2><?php echo $video_name; ?></h2>
							<p><?php echo $video_title; ?></p>
						</div>

						<!-- Cover image -->
						<img src="<?php echo $video_cover_r; ?>" class="cover-image" id="cover-image_<?php echo $count; ?>" alt="" height='100%' width='100%' />
						
						
						<!-- YouTube video -->
						
						<div id="video_<?php echo $count; ?>"></div>
						

            <?php/* echo "<iframe class='youtube-video' id='video_$count' type='text/html' width='100%' height='400'
						src='https://www.youtube.com/embed/$video_youtube?enablejsapi=1&rel=0&wmode=opaque&theme=light&showinfo=0&autohide=1&autoplay=1&modestbranding=0'
						frameborder='0' allowfullscreen></iframe>" */?>

						<script>
						//var player;
						function createYouTubeVid_<?php echo $count; ?>() {

							var play_icon = $('#play-icon_<?php echo $count; ?>'),
							title_wrapper = $('#title-wrapper_<?php echo $count; ?>'),
							cover = $('#cover-image_<?php echo $count; ?>');	

						//var player_count = _<?php echo $count; ?>;
						//console.log(player_count);

						player_<?php echo $count; ?> = new YT.Player('video_<?php echo $count; ?>', {
							height: '400',
							width: '100%',
							videoId: '<?php echo $video_youtube ?>',
							playerVars: {
								wmode: 'opaque',
								autoplay : 0,
								theme: 'light'
							},
							events: {
								'onReady': onPlayerReady,
								'onStateChange': check_state,
							}
						});


						play_icon.on('click', function() {
							//console.log('Video is playing');
							//alert('clicked');
							play_icon.fadeOut(300);
							title_wrapper.fadeOut(600);
							cover.fadeOut(900);
							//player_<?php echo $count; ?>.playVideo();
						});
						

						function onPlayerReady(event){
							event.target.stopVideo();
						}

						function check_state(event) {
							var state_<?php echo $count; ?> = player_<?php echo $count; ?>.getPlayerState();

							if (state_<?php echo $count; ?> == "2")
							{
		//console.log('Video is paused');
		play_icon.fadeIn(900);
		title_wrapper.fadeIn(600);
		cover.fadeIn(300);
	} else if (state_<?php echo $count; ?> == "1"){

	};
}
//End createYouTubeVid_
}


</script> 
</div>

<?php/* echo $count; */?>
<p class="large">
	<?php echo $excerpt_r; ?>
</p>

<div class="transcript" style="display: none;">
	<div class="icon-link"> <a href="#" class="toggle"> <i class="fa fa-chevron-circle-down"></i> Transcript </a>
		<div class="toggle-inner"> <?php echo $transcript_r; ?>
			<div class="icon-link"> <i class="fa fa-chevron-circle-up"></i> </div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<script>

	function onYouTubeIframeAPIReady(){
		<?php for ( $i = 1; $i <= $count; $i++ ) {
			echo "createYouTubeVid_$i();";
		}
		?>
	}






/*// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.stopVideo();
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false;
function onPlayerStateChange(event) {
  if (event.data == YT.PlayerState.PLAYING && !done) {
    setTimeout(stopVideo,loop);
    done = true;
  }
}

function stopVideo1() {
  player_1.stopVideo();
}

function stopVideo2() {
  player_2.stopVideo();
}*/

</script> 

<!--End Video - vimeo api--> 
</article>
</section>
<?php endif; ?>
