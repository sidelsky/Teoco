<?php if ( have_rows('video_repeater') ) : ?>

<section class="page-wrapper__wide section" id="vision-values">
		<article class="page-wrapper__wide__inner padding-tb">

<?php if(is_page('careers')) : ?>
	<h1>Working at Teoco</h1>
	<?php endif; ?>

<?php $count = 0; ?>
<?php if( have_rows('video_repeater') ): ?>
	<?php while( have_rows('video_repeater') ): the_row(); ?>
		
		<?php
			$video_name = get_sub_field('video_name');
			$video_title = get_sub_field('video_title');
			$video_cover_r = get_sub_field('video_cover_r');
			$video_r = get_sub_field('video_r');
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

		<img src="<?php echo $video_cover_r; ?>" class="image" alt="" height='100%' width='100%' id='play-cover_<?php echo $count; ?>' />
		<?php echo "<iframe id='video_$count' src='http://player.vimeo.com/video/$video_r?api=1&player_id=video_$count' width='100%' height='400' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>" ?> 				
	</div>
	<?php/* echo $count; */?>

	<div class="video-status video-status_<?php echo $count; ?>">
		<p>Video <span class="status status_<?php echo $count; ?>">Loading...</span></p>
				<!--
					<p><button>Play</button> <button>Pause</button></p>
				-->
			</div>

			<?php echo $excerpt_r; ?>
			
			<div class="transcript">
				<div class="icon-link">
					<a href="#" class="toggle">
						<i class="fa fa-chevron-circle-right"></i> Transcript
					</a>
					<div class="toggle-inner">
						<?php echo $transcript_r; ?>
						<div class="icon-link">
							<i class="fa fa-chevron-circle-up"></i>
						</div>
					</div>
				</div>
			</div>

			<script>
			$(document).ready(function($) {
				var iframe = $('#video_<?php echo $count; ?>')[0],
		    player = $f(iframe),
		    status = $('.status_<?php echo $count; ?>'),
		    title_wrapper = $('#title-wrapper_<?php echo $count; ?>'),
		    cover = $('#play-cover_<?php echo $count; ?>');
		    play_icon = $('#play-icon_<?php echo $count; ?>');

				// When the player is ready, add listeners for pause, finish, and playProgress
				player.addEvent('ready', function() {
			    status.text('ready');			    
			    player.addEvent('pause', onPause);
			    player.addEvent('finish', onFinish);
			    player.addEvent('playProgress', onPlayProgress);
				});

			    play_icon.bind("click", function() {
			    	player.api("play");
			    	cover.fadeOut(650);
			    	title_wrapper.fadeOut(950);
				});

				function onPause(id) {
			    status.text('paused');
			    cover.fadeIn(650);
			    title_wrapper.fadeIn(950);
				}

				function onFinish(id) {
			    status.text('finished');
			    cover.fadeIn(650);
			    title_wrapper.fadeIn(950);
				}

				function onPlayProgress(data, id) {
			    status.text(data.seconds + 's played');
				}
			});
			</script>
	<?php endwhile; ?>
<?php endif; ?>

		<!--End Video - vimeo api-->
	</article>
</section>

<?php endif; ?>