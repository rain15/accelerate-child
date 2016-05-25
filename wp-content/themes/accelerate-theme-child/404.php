<?php
/**
 * The template for displaying 404 page
 *
 *
 * @package WordPress
 * @subpackage accelerate child theme
 * @since accelerate child theme 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div id="custom-error-wrap">
				<div id="custom-err-img">
					<img src="<?php bloginfo('template_url'); ?>-child/img/404img.jpg" alt="404"  />
				</div>
				<div id="custom-error-msg">
					<h3 class="brand-color">Whoops, Took a Wrong Turn...</h3>
					<p>Sorry, this page no longer exists, never existed or has been moved.
						We feel like complete jerks for totally misleading you.</p>
					<p>Feel free to take a look around our <span class="brand-color"><strong>blog</strong></span>
						or some of our featured <span class="brand-color"><strong>work</strong></span></p>
				</div>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>