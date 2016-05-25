<?php
/**
 * The template for displaying archive of case studies
 *

 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			

		<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php query_posts('post_type=case_studies'); ?>
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$image_1 = get_field('image_1');
				$size = 'medium';
				
			?>

			<article class="case-study">
		        <aside class="case-study-sidebar">
		            <h2><?php the_title(); ?></h2>
		            <h5><?php echo $services; ?></h5>

					<?php the_excerpt(); ?>

		            <a href="<?php the_permalink(); ?>"><strong>View Project ></strong></a>
		        </aside>
		    </article>

		    <div class="case-study-images">
		    	<figure>
					<?php echo wp_get_attachment_image($image_1, $size ); ?>
				</figure>

		    	
        	</div>

			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); ?>
		</div><!-- #content -->
	</div><!-- #primary -->


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>