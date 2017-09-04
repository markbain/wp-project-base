<div id="form-comments" class="section">
	<div class="container_narrow container">
		<div class="content-container">
			<?php						
				$comment_args = array(
					//'comment_notes_before' => '<p>And remember:</p> <blockquote><p>Brevity is the soul of wit</p></blockquote>',				
					'comment_notes_after' => '',
				  	'title_reply'       => __( 'Leave a comment', '_mbdmaster' ),
				  	'title_reply_to'    => __( 'Leave a Reply to %s', '_mbdmaster' ),
				  	'cancel_reply_link' => __( 'Cancel Reply', '_mbdmaster' ),
				  	'label_submit'      => __( 'Post Comment', '_mbdmaster' ),
				);
				comment_form( $comment_args );
			?>
		</div><!-- .content-container -->   
	</div><!-- .container_medium .container -->
</div><!-- #form-comments .section -->