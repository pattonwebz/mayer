<?php
/**
 * Template Name: Full Width Page
 * The tempalte used for full width pages.
 *
 * @package    Mayer
 * @since      1.9.1
 */
?>
<?php get_header(); ?>

	<div id="primary-wrapper">
		<div id="primary" class="container">

			<main id="main" class="site-main col-lg-12 col-md-12" role="main">

				<?php while ( have_posts() ) { ?>
					<?php the_post(); ?>
					<div <?php post_class(); ?>>

						<h1 class="page-title entry-title">
							<?php the_title(); ?>
						</h1><!-- .post-title -->

						<div class="post-content">
							<?php the_content( __( 'Read More', 'mayer' ) ); ?>
						</div><!-- .post-content -->

						<?php comments_template(); ?>

					</div><!-- .col-lg-12 -->
				<?php } ?>

			</main><!-- #main -->

		</div><!-- #primary -->
	</div><!-- /#primary-wrapper -->

<?php get_footer(); ?>