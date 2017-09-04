<?php

/**
 * baindesign324_content_secondary
 */

if ( ! function_exists( 'baindesign324_content_secondary' ) ) :
	function baindesign324_content_secondary() {
		if ( get_post_type() == "book" ) : ?>
			<div id="secondary" class="section">
				<div class="container">
					<?php 
						if ( get_field( 'book_image') ) {
							$image_url_array = get_field( 'book_image');
							$image_url = $image_url_array['url'];
						}
						if ( $image_url ) {
							$content = '<p class="book-cover">';					
							$content .=	'<img src="' . $image_url . '">';
							$content .= '</p><!-- .media-object-media -->';					
						}
						echo $content;
					?>

					<?php if ( get_field( 'book_date') ) : ?>
						<p class="book-date">
							Published <?php echo get_field( 'book_date'); ?>
						</p>
					<?php endif; ?>

					<?php if ( get_field( 'book_publisher') ) : ?>
						<p class="book-publisher">
							<?php echo get_field( 'book_publisher'); ?>
						</p>
					<?php endif; ?>

					<?php

						$clients = get_field('purchase_links');

						if( $clients ): ?>
							<h5 class="section-title">Purchase options</h5>
						    <ul class="no-bullets">
						        <?php foreach( $clients as $client ): ?>
						            <li>
						                <a href="<?php echo $client['external_link_url']; ?>">
						                     <?php echo $client['external_link_title']; ?>
						                </a>
						                
						            </li>
						        <?php endforeach; ?>
						    </ul>
						<?php endif; ?>

				</div><!-- .container -->
			</div><!-- .section -->
		<?php elseif ( get_post_type() == "talk" ) : ?>
			<div id="secondary" class="section">
				<div class="container">

					<?php if ( get_field( 'talk_client') ) : ?>
						<p class="talk_client">
							<span>Event:</span> <?php echo get_field( 'talk_client'); ?>
						</p>
					<?php endif; ?>

					<?php if ( get_field( 'event_date') ) : ?>
						<p class="event_date">
							<span>Date:</span> <?php echo get_field( 'event_date'); ?>
						</p>
					<?php endif; ?>

				</div><!-- .container -->
			</div><!-- .section -->
		
		<?php elseif ( get_post_type() == "article" ) : ?>
			<div id="secondary" class="section article">
				<div class="container">

					<?php if ( get_field( 'article_client') ) : ?>
						<p class="article_client">
							<span>Published by</span> <a href="<?php echo get_field( 'article_url'); ?>" rel="external" class="<?php echo get_field( 'article_url_class'); ?>"><?php echo get_field( 'article_client'); ?></a>
						</p>
					<?php endif; ?>

					<?php if ( get_field( 'article_date') ) : ?>
						<p class="article_date">
							<span>Date:</span> <?php echo get_field( 'article_date'); ?>
						</p>
					<?php endif; ?>

				</div><!-- .container -->
			</div><!-- .section -->

		<?php elseif ( get_post_type() == "project" ) : ?>
			<div id="secondary" class="section">
				<div class="container">

					<?php if ( get_field( 'project_client') ) : ?>
						<p class="project_client">
							<span>Client:</span> <a href="<?php echo get_field( 'project_client_url'); ?>" rel="external" class="<?php echo get_field( 'project_client_class'); ?>"><?php echo get_field( 'project_client'); ?></a>
						</p>
					<?php endif; ?>

					<?php if ( get_field( 'project_date') ) : ?>
						<p class="project_date">
							<span>Date:</span> <?php echo get_field( 'project_date'); ?>
						</p>
					<?php endif; ?>

				</div><!-- .container -->
			</div><!-- .section -->
		<?php endif;  		
	 }
endif;