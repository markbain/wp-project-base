<?php get_header(); ?>
	<main id="main">	
		<div id="primary">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="section">
						<div class="container">
							<div class="content-container">
								<h1>404</h1>
								<div>Sorry, but the content you are looking for cannot be found.</div>
							</div><!-- .content-container -->   
						</div><!-- .container -->
					</div><!-- .section -->

			</article><!-- #post-<?php the_ID(); ?> -->
		</div><!-- #primary -->
	</main><!-- #main -->
<?php get_footer(); ?>