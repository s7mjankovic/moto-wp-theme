
<?php $the_slides_query = new WP_Query('post_type=testimonial&showposts=2'); ?>

<div class="testimonials">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <?php if ( $the_slides_query->have_posts() ) : ?>
                <div class="carousel-inner" role="listbox">
                <?php while ( $the_slides_query->have_posts() ) : $the_slides_query->the_post(); ?>
                    <?php $testimonialData = get_post_meta($post->ID,'testimonial', true); ?>
                    <div class="item <?php if( $the_slides_query->current_post == 0 ) echo 'active' ?>">
                    <div class="row">
                        <div class="col-md-3">
                            
                                <img class="img-responsive" src="<?php echo the_post_thumbnail_url( ); ?>">
                           
                        </div>
                        <div class="col-md-9">
                            <div class="carousel-caption1">
                                <?php if (get_the_title()) :?>
                                    <p class="testimonial-client-name"><?php the_title(); ?></p>
                                <?php endif; ?>
                                <p class="testimonial-client-function"><?php echo $testimonialData['position']; ?></p>
                                <p class="testimonial-text"><?php echo $testimonialData['testimonial']; ?></p>
                            </div>
                        </div>
                    </div>     
                  </div>
                  <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>

                </div>
        <?php endif; ?>
                 <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/arrow-left.png">
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <img src="<?php echo get_bloginfo('template_directory');?>/assets/images/arrow-right.png">
                </a>
              </div>
</div>


