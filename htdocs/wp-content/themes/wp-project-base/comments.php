<?php
	if ( post_password_required() ) {
		return;
	}
?>
<div id="comments" class="section comments-area">
	<?php if ( have_comments() ) : ?>
		
		<div class="container container_medium">			
				<div id="list-comments">
					<h2 class="comments-title">
						<?php
							printf( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', '_mbdmaster' ),
								number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
						?>
					</h2>
				</div>
		</div><!-- .container -->
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
			<div class="container container_medium">
				<nav id="comment-nav-above" class="comment-navigation" role="navigation">
					<h1 class="screen-reader-text"><?php _e( 'Comment navigation', '_mbdmaster' ); ?></h1>
					<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', '_mbdmaster' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', '_mbdmaster' ) ); ?></div>
				</nav><!-- #comment-nav-above -->				
			</div><!-- .container -->
		<?php endif; // check for comment navigation ?>
		<div class="container container_narrow">
			<ol class="comment-list">
				<?php
					wp_list_comments( array(
						'style'      	=> 'ol',
						'short_ping' 	=> true,
						'callback'      => 'mbdmaster_custom_comment', // Custom comment function
						'avatar_size'	=> 66,
						'per_page'	=> 10
					), $comments )
				?>
			</ol><!-- .comment-list -->

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
				<nav id="comment-nav-below" class="comment-navigation" role="navigation">
					<h1 class="screen-reader-text"><?php _e( 'Comment navigation', '_mbdmaster' ); ?></h1>
					<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', '_mbdmaster' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', '_mbdmaster' ) ); ?></div>
				</nav><!-- #comment-nav-below -->
			<?php endif; // check for comment navigation ?>

		</div><!-- .container -->

	<?php endif; // have_comments() ?>

	<?php if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<div id="closed-comments" class="container container_narrow">
			<p class="no-comments"><?php _e( 'Sorry! Comments are now closed.', '_mbdmaster' ); ?></p>
		</div><!-- .section -->
	<?php endif; ?>

</div><!-- .section -->

<?php get_template_part('comment-form'); ?>