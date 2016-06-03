<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="Bootstrap3 Theme for Wordpress">
	<meta name="author" content="Marcelo Santos Ferreira">
	<!--<link rel="icon" href="../../favicon.ico">-->

	<title>
		<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> -
			<?php echo get_bloginfo( 'description', 'display' ); ?>
	</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">

	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap-social.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="<?php bloginfo('template_url'); ?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="<?php bloginfo('template_url'); ?>/css/starter-template.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="<?php bloginfo('template_url'); ?>/js/html5shiv.min.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
    <![endif]-->

	<?php wp_head(); ?>
</head>

<body>


	<nav class="navbar navbar-inverse">
		<!-- navbar-fixed-bottom -->
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo home_url(); ?>">
					<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> -
						<?php echo get_bloginfo( 'description', 'display' ); ?>
				</a>
				<!--
<h4 style='display: inline'>Project name <small>project description</small></h4>
                -->
			</div>
			<div id="navbar" class="collapse navbar-collapse">

				<?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav navbar-right',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
                ?>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>

	<!-- Search Form -->
	<div class="container nopadding">
		<div class="row nopadding">
			<div class="col-xs-12" align="right">
				<?php
				get_search_form();
				?>
				<br>
			</div>
		</div>
	</div>
