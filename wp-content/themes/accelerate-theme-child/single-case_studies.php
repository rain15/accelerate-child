<?php
/**
 * The template for displaying case studies custom post type pages
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
			?>

			<article class="case-study">
		        <aside class="case-study-sidebar">
		            <h2><?php the_title(); ?></h2>
		            <h5><?php echo $services; ?></h5>
		            <h6>Client: <?php echo $client; ?></h6>

		            <?php the_content(); ?>

		            <a href="<?php echo $link; ?>"><strong>Visit Live Site</strong></a>
		        </aside>
		    </article>

		    <div class="case-study-images">
		    	<?php if (image_1) { ?>

		    	<figure>
					<?php echo wp_get_attachment_image($image_1, $size ); ?>
				</figure>
				cs
		    	<?php } ?>

		    	<?php  if(image_2) { ?>
		    		<img src="<?php echo $image_2; ?>" alt="">
		    	<?php  }?>

		    	<?php if(image_3) { ?>
		    		<img src="<?php echo $image_3; ?>" alt="">
		    	<?php  } ?>
        	</div>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>