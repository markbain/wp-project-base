<?php if( get_row_layout() == 'text_block' ): ?>
	<?php $content = get_sub_field('text'); ?>
	<div class="section text_block">
		<div class="container">
			<?php echo $content; ?>
		</div><!-- .container -->
	</div><!-- .section -->

<?php elseif( get_row_layout() == 'gallery_wide' ): ?>
	<?php get_template_part( 'modules/gallery' ); ?>
<?php endif; ?>