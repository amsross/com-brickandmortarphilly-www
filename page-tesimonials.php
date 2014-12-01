<?php
/*
Template Name: Tesimonials Page
*/
?>

<div
	class="wrap container-fluid <?php echo $oddEven = ($oddEven == 'even'?'odd':'even'); ?> page-<?php echo( basename(get_permalink(get_the_ID())) ); ?>"
	id="<?php echo( basename(get_permalink(get_the_ID())) ); ?>"
	role="document"
	style="
		background-image: url(<?php echo get_field('background_image')['id']; ?>);
		background-color: <?php echo get_field('background_color'); ?>;
		color: <?php echo get_field('text_color'); ?>;
		"
	>
	<div class="content row-fluid">
		<?php get_template_part('templates/content', 'page'); ?>
	</div><!-- /.content -->
</div><!-- /.wrap -->
