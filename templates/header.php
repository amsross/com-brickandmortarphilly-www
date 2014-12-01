<header class="banner navbar navbar-default navbar-static-top" role="banner">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand visible-xs-block" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
	</div>

	<nav class="collapse navbar-collapse" role="navigation" data-spy="affix" data-offset-top="750" data-offset-bottom="200">
		<?php
			if (has_nav_menu('primary_navigation')) :
				wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
			endif;
		?>
	</nav>
</header>
