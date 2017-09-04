<div class="content-container">		
	<header>
		<h2 class="home-section-title"><?php _e( 'Latest discussion', '_criadoemsampa' ); ?> <i class="fa fa-commenting"></i></h2>
	</header>
	<div class="textblock container-latest-posts">
		<?php 
			$comment_len = 80;
			$avatar_size = 48;

			$comments_query = new WP_Comment_Query();
			$comments = $comments_query->query( array( 
				'number' => '3',
				'post_type' => 'content_cpt',
			) );

			if ( $comments ) : 
		?> 
			<div class="media-object-container">
				<?php foreach ( $comments as $comment ) : 
					$avatar = get_avatar( $comment->comment_author_email, $avatar_size );
					$url = get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID;
					$authos = get_comment_author( $comment->comment_ID );
					$content = strip_tags( substr( apply_filters( 'get_comment_text', $comment->comment_content ), 0, $comment_len ) );
				?>
					<a href="<?php echo $url; ?>" id="comment-<?php the_ID(); ?>" <?php post_class( 'quotation media-object' ); ?>>
						<blockquote class="media-object-content">
							<p class="entry-title"><?php echo $content; ?></p>
						</blockquote><!-- .media-object-content -->
					</a><!-- .media-object -->

				<?php endforeach; ?>
			</div><!-- .media-object-container -->	 
		<?php else : ?>				
			<p><?php _e( 'No comments', '_criadoemsampa' ); ?></p>
		<?php endif; ?>
	</div>
</div>