<?php /* Template Name: About Us Template */ ?>
<?php
/**
 * Template Name: About Us Template 
 * 
 *
 * This is the template that displays About Us page.
 *
 * @package WordPress
 * @subpackage accelerate-child
 * @since 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="site-content-services">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
			</div>

			<?php 
				$title = get_field('title');
				$description = get_field('description');

				$title1 = get_field('content_strategy_title');
				$image1 = get_field('content_strategy_icon');
				$text1  = get_field('context_strategy_text_area');

				$title2 = get_field('influencer_mapping_title');
				$image2 = get_field('influencer_mapping_icon');
				$text2  = get_field('influencer_mapping_text_area');

				$title3 = get_field('social_media_title');
				$image3 = get_field('social_media_icon');
				$text3  = get_field('social_media_text_area');

				$title4 = get_field('design_dev_title');
				$image4 = get_field('design_dev_icon');
				$text4  = get_field('design_and_development_text_area');

				$size = 'medium';
			?>
			<div id="services_title_area">
				<h4><?php echo $title; ?></h4>
				<p><?php echo $description; ?></p>
			</div>
				<div class="div_empty">
					
				</div>
				<section class="individual_services_image_first">
					<div class="div_wrap_1">
						<figure>
							<?php echo wp_get_attachment_image($image1, $size ); ?>
						</figure>
					</div>
					<div class="div_wrap_2">
						<h5><?php echo $title1; ?></h5>

						<p><?php echo $text1; ?></p>
					</div>
					

				</section>
				<section class="individual_services_text_first">
					<div class="div_wrap_3">
						<h5><?php echo $title2; ?></h5>
						<p><?php echo $text2; ?></p>
	
					</div>
					<div class="left_buffer">
						
					</div>
					<div class="div_wrap_4">
						<figure>
							<?php echo wp_get_attachment_image($image2, $size ); ?>
						</figure>
					</div>
				</section>
				<div class="clear-it">

				<section class="individual_services_image_first">
					<div class="div_wrap_1">
						<figure>
							<?php echo wp_get_attachment_image($image3, $size ); ?>
						</figure>
					</div>
					<div class="div_wrap_2">
						<h5><?php echo $title3; ?></h5>

						<p><?php echo $text3; ?></p>
					</div>
					

				</section>
				<section class="individual_services_text_first">
					<div class="div_wrap_3">
						<h5><?php echo $title4; ?></h5>
						<p><?php echo $text4; ?></p>
	
					</div>
					<div class="left_buffer">
						
					</div>
					<div class="div_wrap_4">
						<figure>
							<?php echo wp_get_attachment_image($image4, $size ); ?>
						</figure>
					</div>

				</section>

		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
		<div class="work-with-us">
			<hr>
			<div class="work-with-us-wrap">
				<span class="work-with-us-text">Interested in working with us? </span><input type="submit" name="_work-with-us" class="btn-work-with-us"  value="Contact Us">

			</div>
		</div>
</section><!-- .home-page -->

	

<?php get_footer(); ?>