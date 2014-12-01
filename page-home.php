<?php
/*
Template Name: Home Page
*/
?>

<div
	class="wrap container-fluid <?php echo $oddEven = ($oddEven == 'even'?'odd':'even'); ?> page-home"
	id="home"
	role="document"
	style="
		background-image: url(<?php echo get_field('background_image')['url']; ?>);
		background-color: <?php echo get_field('background_color'); ?>;
		color: <?php echo get_field('text_color'); ?>;
		"
	>
	<div class="content row-fluid">
		<?php get_template_part('templates/content', 'page'); ?>
	</div><!-- /.content -->
</div><!-- /.wrap -->
