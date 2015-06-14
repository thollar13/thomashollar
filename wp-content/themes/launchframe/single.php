<?php
/**
 * The template for displaying all single posts.
 *
 * @package Launchframe
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<a href="/#blog-top" class="back-btn"><i class="fa fa-angle-left"></i> Back</a>
		<?php while ( have_posts() ) : the_post(); ?>
		<h2>
			<?php the_title(); ?>
			<!-- <hr /> -->
		</h2>
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<?php endwhile; // end of the loop. ?>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
