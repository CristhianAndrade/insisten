<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="col-xs-12 bg-<?php echo $wp_query->post->post_name; ?> title-page">
			<div class="container">
				<?php the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' ); ?>
				<p class="sub-titulo"><?php the_subtitle(); ?></p>
			</div>
		</div>
		<div class="container">
			<div class="entry-content">
				<?php
					the_content();
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'odin' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
				?>
			</div><!-- .entry-content -->
		</div>
</article><!-- #post-## -->
