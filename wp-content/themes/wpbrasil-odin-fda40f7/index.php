<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */
show_admin_bar(false);
get_header(); ?>

	<main id="content" class="<?php echo odin_classes_page_full(); ?>" tabindex="-1" role="main">

			<?php
			/*
				if ( have_posts() ) :
					// Start the Loop.
					while ( have_posts() ) : the_post();


						// * Include the post format-specific template for the content. If you want to
						// * use this in a child theme, then include a file called called content-___.php
						// * (where ___ is the post format) and that will be used instead.

						get_template_part( 'content', get_post_format() );

					endwhile;

					// Post navigation.
					odin_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			*/
			?>
			<div class="container">
				<article id="sobre-nos" class="article-1">
					<?php
						$id = 12;
						$p = get_page($id);
					?>
					<header class="entry-header">
						<h2><?php echo  $p->post_title; ?></h2>
					</header><!-- .entry-header -->
					<div class="entry-content">
						<div class="row">
	  					<div class="col-lg-12 centered">
								<?php echo apply_filters('the_content', $p->post_content); ?>
							</div>
						</div>
					</div><!-- .entry-content -->
					<!--footer class="entry-meta">
					</footer-->
				</article>
			</div>

			<div class="article-2-bg">
				<div class="container">
					<article id="temas" class="article-2">
						<?php
							$id = 22;
							$p = get_page($id);
						?>
						<header class="entry-header">
							<h2><?php echo  $p->post_title; ?></h2>
						</header><!-- .entry-header -->
						<div class="entry-content">
							<div class="row">
									<?php echo apply_filters('the_content', $p->post_content); ?>
							</div>
						</div><!-- .entry-content -->
						<!--footer class="entry-meta">
						</footer-->
					</article>
				</div>
			</div>

			<div class="article-3-bg">
				<div class="container">
					<article id="cases" class="article-3">
						<?php
							$id = 39;
							$p = get_page($id);
						?>
						<header class="entry-header">
							<h2><?php echo  $p->post_title; ?></h2>
						</header><!-- .entry-header -->
						<div class="entry-content">
							<div class="row">
									<?php echo apply_filters('the_content', $p->post_content); ?>
							</div>
						</div><!-- .entry-content -->
						<!--footer class="entry-meta">
						</footer-->
					</article>
				</div>
			</div>


			<div class="article-4-bg">
				<div class="container">
					<article id="planos" class="article-4">
						<?php
							$id = 44;
							$p = get_page($id);
						?>
						<header class="entry-header">
							<h2><?php echo  $p->post_title; ?></h2>
						</header><!-- .entry-header -->
						<div class="entry-content">
							<div class="row">
									<?php echo apply_filters('the_content', $p->post_content); ?>
							</div>
						</div><!-- .entry-content -->
						<!--footer class="entry-meta">
						</footer-->
					</article>
				</div>
			</div>

			<div class="article-5-bg">
				<div class="container">
					<article id="contato" class="article-5">
						<?php
							$id = 72;
							$p = get_page($id);
						?>
						<header class="entry-header">
							<h2><?php echo  $p->post_title; ?></h2>
						</header><!-- .entry-header -->
						<div class="entry-content">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
										<?php echo apply_filters('the_content', $p->post_content); ?>
									</div><!-- .entry-content -->
									<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 map ">
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1828.1596936930073!2d-46.6888021!3d-23.5928759!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce574763e64aa3%3A0xd177b36036d3c095!2sAv.+Chedid+Jafet%2C+222+-+Vila+Olimpia%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1444060724801" width="450" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
										</div><!-- .entry-content -->
								</div>
						</div><!-- .entry-content -->
						<!--footer class="entry-meta">
						</footer-->
					</article>
				</div>
			</div>

	</main><!-- #content -->

<?php
//get_sidebar();
get_footer();
