<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */

$_home = is_home();

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="header" role="banner">
		<div class="page-header hidden-xs <?php if(!$_home){ echo 'page-fix'; } ?>">


				<div class="container">
					<div class="site-logo-holder">
						<a class="site-logo"  href="<?php echo home_url(); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
							<img class="fix" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" style="display:none;" />
							<img class="default" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.png" alt="<?php bloginfo( 'name' ); ?>" />
							<span class="text-header" style="display:none;"><?php bloginfo( 'description' ); ?></span>
						</a>
					</div>

					<div id="main-navigation" class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
							<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand visible-xs-block" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<?php bloginfo( 'name' ); ?>
							</a>
						</div>
						<nav class="collapse navbar-collapse navbar-main-navigation" role="navigation">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'main-menu',
										'depth'          => 2,
										'container'      => false,
										'menu_class'     => 'nav navbar-nav',
										'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
										'walker'         => new Odin_Bootstrap_Nav_Walker()
									)
								);
							?>
							<?php /*<form method="get" class="navbar-form navbar-right" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
								<label for="navbar-search" class="sr-only">
									<?php _e( 'Search:', 'odin' ); ?>
								</label>
								<div class="form-group">
									<input type="search" class="form-control" name="s" id="navbar-search" />
								</div>
								<button type="submit" class="btn btn-default"><?php _e( 'Search', 'odin' ); ?></button>
							</form> */ ?>
						</nav><!-- .navbar-collapse -->
					</div><!-- #main-navigation-->
				</div>

		</div><!-- .site-header-->
		<?php if($_home): ?>
		<div class="container">

				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<?php echo do_shortcode('[block id="4"]');?>
					</div>
					<div class="hidden-xs col-sm-6 col-md-6 col-lg-6 col2-header">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/play.png" class="assista-video  ver-video" alt="Assista o video" />
						</a>
					</div>
				</div>

		</div><!-- .container-->
	<?php endif; ?>
	</header><!-- #header -->

	<div id="wrapper" class="container">
		<div class="row">
