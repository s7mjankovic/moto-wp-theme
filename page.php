<?php
/**
 *  The template for displaying all single posts and attachments
 *
 * @package MOTO
 *
 */
if (isset($_GET['lang'])) {
	$language = "SRPSKI JEZIK";
} else {
	$language = "ENGLISH LANGUAGE";
}

get_header(); ?>
<div class="moto-header" style="background: #ff550d url('<?php echo moto_header_image();?>') center center no-repeat;height:250px;">
        <div class="">
            <div class="container">
                <h1 style="text-align: center;margin-top:100px;font-size: 50px;color: #fff; border:1px solid #fff"><?php echo $language; ?></h1>
            </div>
        </div>
</div>

<div class="content">
	<div id="content" class="site-content moto-page" style="min-height:350px;">
		<div class="container page-content">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if(isset($_GET['lang'])) : ?>
			 			<?php
							$myvalue = get_post_meta($post->ID, "CONTENT_SERBIAN", true);
							echo htmlspecialchars_decode($myvalue);
						?>
			 		<?php else : ?>
			 			<?php the_content(); ?>
			 		<?php endif; ?>
		 		<?php endwhile; ?>
		 		</div>
	 		</div>
		</div>

	</div>


<?php get_footer(); ?>