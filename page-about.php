<?php
/*
Template Name: About Page
*/
?>

<div class="wrap container-fluid <?php echo $oddEven = ($oddEven == 'even'?'odd':'even'); ?> page-<?php echo( basename(get_permalink(get_the_ID())) ); ?>" role="document" id="<?php echo( basename(get_permalink(get_the_ID())) ); ?>">
	<div class="content row-fluid">
		<?php get_template_part('templates/page', 'header'); ?>
		<?php get_template_part('templates/content', 'page'); ?>
	</div><!-- /.content -->
</div><!-- /.wrap -->
