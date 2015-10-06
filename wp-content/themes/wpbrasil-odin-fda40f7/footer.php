<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- .row -->
	</div><!-- #wrapper -->

	<footer id="footer" role="contentinfo">
		<div class="container">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
					<?php //echo date( 'Y' ); ?> <strong><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></strong> - &copy;  <?php _e( 'All rights reserved', 'odin' ); ?>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-6 ">
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
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
				 Feito com <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> pela <a href="http://www.grupolondon.com.br/">Grupo London</a>
				</div>
			</p>
		</div><!-- .container -->
	</footer><!-- #footer -->

	<?php wp_footer(); ?>
</body>
</html>
