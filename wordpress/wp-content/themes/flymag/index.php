<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package FlyMag
 */

get_header(); ?>

	<?php if ( get_theme_mod( 'blog_layout', 'classic' ) == 'fullwidth' ) {
		$layout = 'fullwidth';
} else {
	$layout = '';
} ?>
	<?php if ( get_theme_mod( 'blog_layout', 'classic' ) == 'masonry' ) {
		$masonry = 'home-masonry';
} else {
	$masonry = '';
} ?>

	<div id="primary" class="content-area <?php echo $layout; ?>">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<div class="home-wrapper <?php echo $masonry; ?>">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>
			</div>

			<?php flymag_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php if ( get_theme_mod( 'blog_layout', 'classic' ) != 'fullwidth' ) {
	get_sidebar();
} ?>
<?php get_footer(); ?>
