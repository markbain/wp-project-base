<?php
	global $latest_blog_posts_module_more;
	global $latest_blog_posts_module_title;
	global $latest_blog_posts_module_sub_title;
?>
<div class="section latest-posts">
	<div id="intro-latest-posts" class="container intro">
		<header>
			<h2 class="home-section-title"><?php _e( $latest_blog_posts_module_title, '_mbdmaster' ); ?></h2>
			<!-- <p><?php _e( $latest_blog_posts_module_sub_title, '_mbdmaster' ); ?></p>-->
		</header>
	</div>
	<div id="main-latest-posts" class="container">
		<div class="container-latest-posts media-object-container">
			<?php mbdmaster_latest_posts(); ?>
		</div>
		<footer class="read-more">
			<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" title="<?php _e( 'See more posts', '_mbdmaster' ); ?>" >
				<span class=""><?php _e( $latest_blog_posts_module_more, '_mbdmaster' ); ?></span>
				<i class="fa"></i>
			</a>
		</footer>
	</div><!-- .container -->
</div><!-- .section --> 