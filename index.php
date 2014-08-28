<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section class="main-content">
		<?php if ( is_home() ) { query_posts($query_string . '&cat=-4,-5,-6');}?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php //twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>

		<?php endif; // end have_posts() check ?>

		
	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>