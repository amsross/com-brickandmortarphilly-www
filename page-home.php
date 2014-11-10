<?php
/*
Template Name: Home Page
*/
?>

<div class="wrap container-fluid <?php echo $oddEven = ($oddEven == 'even'?'odd':'even'); ?> page-home" role="document" id="home">
	<div class="content row-fluid">
		<?php get_template_part('templates/content', 'page'); ?>
	</div><!-- /.content -->
</div><!-- /.wrap -->
