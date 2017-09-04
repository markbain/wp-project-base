<?php 
	$video_url = get_field( 'video_embed' );
	if ($video_url) :
?>
<div id="video-embed" class="section">
	<div class="container">
		<header>
			<h2 class="home-section-title">
				<?php _e( 'Check out Criado em Sampa in action!', '_criadoemsampa' ); ?>						
			</h2>
		</header>
		<div class="content-container content-video">
			<?php echo $video_url; ?>
		</div><!-- .content-container -->   
	</div><!-- ..container -->
</div><!-- #video-embed ..section -->
<?php endif; ?>
		