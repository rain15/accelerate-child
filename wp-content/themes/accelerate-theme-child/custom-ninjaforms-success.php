<?php
/**
 *  * Template Name: Ninja Forms Success Template 
 *
 * 
 * The template for displaying ninja forms success - custom post type pages
 *
 *
 * @package WordPress
 * @subpackage accelerate-child
 * @since 1.0
 */

get_header(); ?>


	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$contact_us_success_title = get_field('contact_us_success_title');
				$contact_us_success_message = get_field('contact_us_success_message');
			?>

			<div id="ninja-forms-success">
				<h2 class="brand-color"><?php echo $contact_us_success_title; ?></h2>
				<p><?php echo $contact_us_success_message; ?></p>
			</div>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
