<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

	<!--[if lt IE 8]>
		<div class="alert alert-warning">
			<?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
		</div>
	<![endif]-->

	<?php
		do_action('get_header');
		get_template_part('templates/header');

		global $post;
		$args = array(
			'sort_order'  => 'ASC',
			'sort_column' => 'menu_order',
		);
		$pages = get_pages($args);

		$oddEven = 'odd';
		foreach ($pages as $post) : setup_postdata($post);

			$templateDir = get_post_meta(get_the_ID(), '_wp_page_template', true) === 'default'
				? get_template_directory() . '/page.php'
				: get_template_directory() . '/' . get_post_meta(get_the_ID(), '_wp_page_template', true);

			include $templateDir;
		endforeach;
		wp_reset_postdata();

		get_template_part('templates/footer');

		wp_footer();
	?>

</body>
</html>
