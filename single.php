<?php
/**
 *  The template for displaying all single posts and attachments
 *
 * @package MOTO
 *
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div id="content" class="site-content otrs-thank-you otrs-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
				<?php while ( have_posts() ) : the_post();?>
	
					<h1><?php the_title();?></h1>
					<p><?php the_content();?></p>

				<?php endwhile; ?>
				</div>
			</div>
		</div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>