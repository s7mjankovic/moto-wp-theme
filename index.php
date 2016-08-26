<?php get_header(); ?>
    <div class="moto-header" style="background: #ff550d url('<?php echo moto_header_image();?>') center bottom no-repeat;">
        <div class="header-caption">
            <div class="container">
                <h1 class=""><?php echo moto_header_title($lang);?></h1>
                <p><?php echo moto_header_description($lang);?></p>
                <a href="<?php echo moto_header_link($lang);?>" class="header-button"><?php echo moto_header_button($lang); ?></a>
            </div>
        </div>
        <div class="header-caption-mobile">
            <img class="img-responsive" src="<?php echo moto_header_left_image();?>">
        </div>
    </div>

    <div class="content">
        <div class="container">
        <!-- Spend less section -->
            <h2 class="content-h2 content-h2-padding">
                <?php echo moto_about_heading($lang); ?>
            </h2>
            <div class="spend-less-content">
                <div class="row">
                    <div class="col-sm-4 spend-less-content-item">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-responsive" src="<?php echo moto_about_icon1(); ?>" alt="<?php echo moto_about_title1($lang); ?>">
                            </div>
                            <div class="col-xs-9">
                                <h3><?php echo moto_about_title1($lang); ?></h3>
                                <p><?php echo moto_about_description1($lang); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 spend-less-content-item">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-responsive" src="<?php echo moto_about_icon2(); ?>" alt="<?php echo moto_about_title2($lang); ?>">
                            </div>
                            <div class="col-xs-9">
                                <h3><?php echo moto_about_title2($lang); ?></h3>
                                <p><?php echo moto_about_description2($lang); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 spend-less-content-item">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-responsive" src="<?php echo moto_about_icon3(); ?>" alt="<?php echo moto_about_title3($lang); ?>">
                            </div>
                            <div class="col-xs-9">
                                <h3><?php echo moto_about_title3($lang); ?></h3>
                                <p><?php echo moto_about_description3($lang); ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-sm-4 spend-less-content-item">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-responsive" src="<?php echo moto_about_icon4(); ?>" alt="<?php echo moto_about_title4($lang); ?>">
                            </div>
                            <div class="col-xs-9">
                                <h3><?php echo moto_about_title4($lang); ?></h3>
                                <p><?php echo moto_about_description4($lang); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 spend-less-content-item">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-responsive" src="<?php echo moto_about_icon5(); ?>" alt="<?php echo moto_about_title5($lang); ?>">
                            </div>
                            <div class="col-xs-9">
                                <h3><?php echo moto_about_title5($lang); ?></h3>
                                <p><?php echo moto_about_description5($lang); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 spend-less-content-item">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-responsive" src="<?php echo moto_about_icon6(); ?>" alt="<?php echo moto_about_title6($lang); ?>">
                            </div>
                            <div class="col-xs-9">
                                <h3><?php echo moto_about_title6($lang); ?></h3>
                                <p><?php echo moto_about_description6($lang); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Spend less section -->
            <hr>
            <!-- Get my quote section -->
            <div class="get-my-quote">
                <div class="row">
                    <div class="col-md-6 get-my-quote-item">
                        <div class="row">
                            <div class="col-xs-2">
                                <img class="img-responsive" src="<?php echo moto_quote_icon1();?>" alt="<?php echo moto_quote_title1($lang);?>">
                            </div>
                            <div class="col-xs-10">
                                <h3><?php echo moto_quote_title1($lang);?></h3>
                                <p><?php echo moto_quote_description1($lang);?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 get-my-quote-item">
                        <div class="row">
                            <div class="col-xs-2">
                                <img class="img-responsive" src="<?php echo moto_quote_icon2();?>" alt="<?php echo moto_quote_title2($lang);?>">
                            </div>
                            <div class="col-xs-10">
                                <h3><?php echo moto_quote_title2($lang);?></h3>
                                <p><?php echo moto_quote_description2($lang);?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a class="pull-right" href="<?php echo moto_quote_link($lang);?>"><?php echo moto_quote_button($lang); ?></a>
                    </div>
                </div>
            </div>
            <!-- END Get my quote section -->
            <hr>
            <!-- Pricing section -->
            <div class="pricing">
                <h2 class="content-h2">
                    <?php echo moto_pricing_heading($lang); ?>
                </h2>
                <h3 class="content-h3">
                    <?php echo moto_pricing_subheading($lang); ?>
                </h3>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 pricing-inner">
                        <div class="row">
                            <div class="col-sm-6 pricing-item pricing-item-left">
                                <div class="pricing-item-inner">
                                    <p class="pricing-item-big-text"><?php echo moto_price_title($lang); ?></p>
                                    <p class="pricing-item-price"><?php echo moto_price_monthly($lang); ?> &euro;</p>
                                    <p class="pricing-item-big-text"><?php echo moto_price_title2($lang); ?></p>
                                    <div class="pricing-item-list">
                                        <p><?php echo moto_price_included($lang); ?></p>
                                        <p><?php echo moto_price_included2($lang); ?></p>
                                    </div>
                                    <div class="pricing-sign-in">
                                        <a href="<?php echo moto_price_link($lang); ?>"><?php echo moto_price_button($lang); ?></a>
                                    </div>
                                </div>

 

                            </div>
                            <div class="col-sm-6 pricing-item pricing-item-right">
                                <div class="pricing-item-inner">
                                    <p class="pricing-item-big-text"><?php echo moto_user_title($lang); ?></p>
                                    <p class="pricing-item-price"><?php echo moto_user_monthly($lang); ?> &euro;</p>
                                    <p class="pricing-item-big-text"><?php echo moto_user_title2($lang); ?></p>
                                    <div class="pricing-item-list">
                                        <p><?php echo moto_user_included($lang); ?></p>
                                        <p><?php echo moto_user_included2($lang); ?></p>
                                        <p><?php echo moto_user_included3($lang); ?></p>
                                        <p><?php echo moto_user_included4($lang); ?></p>
                                        <p><?php echo moto_user_included5($lang); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Pricing section -->
        </div><!-- end container -->

        <!-- Testimonials section -->
        
            <?php get_template_part( 'parts/testimonials', 'none' ); ?>
       
        <!-- END Testimonials section -->

        <div class="container">
            <!-- OFFER section -->
            <div class="offer">
                <h2 class="content-h2">
                    <?php echo moto_offer_heading($lang); ?>
                </h2>
                <h3 class="content-h3">
                    <?php echo moto_offer_subheading($lang); ?>
                </h3>
                <div class="offer-fact-wrapper">
                    <div class="row">
                        <div class="col-sm-6 offer-fact">
                            <img class="img-responsive" src="<?php echo moto_offer_icon1();?>" alt="<?php echo moto_offer_title1($lang);?>">
                            <p><?php echo moto_offer_title1($lang);?></p>
                        </div>
                        <div class="col-sm-6 offer-fact offer-fact-left">
                            <img class="img-responsive" src="<?php echo moto_offer_icon2();?>" alt="<?php echo moto_offer_title2($lang);?>">
                            <p><?php echo moto_offer_title2($lang);?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 offer-fact">
                            <img class="img-responsive" src="<?php echo moto_offer_icon3();?>" alt="<?php echo moto_offer_title3($lang);?>">
                            <p><?php echo moto_offer_title3($lang);?></p>
                        </div>
                        <div class="col-sm-6 offer-fact offer-fact-left">
                            <img class="img-responsive" src="<?php echo moto_offer_icon4();?>" alt="<?php echo moto_offer_title4($lang);?>">
                            <p><?php echo moto_offer_title4($lang);?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end OFFER section -->
            <hr>
        </div><!-- end container -->

        <!-- TRACKING section -->
        <div class="track-anything">
            <h2 class="content-h2">
                <?php echo moto_teaser_heading($lang); ?>
            </h2>
            <div class="track-anything-image">
                <img class="img-responsive" src="<?php echo moto_teaser_image(); ?>" alt="<?php echo moto_teaser_heading($lang); ?>">
            </div>
        </div>
        <!-- END TRACKING section -->

        <!-- BLOG section -->

        <?php
            $args = array( 'posts_per_page' => 4, 'category' => 1 );
            $myposts = get_posts( $args );
        ?>

        <div class="homepage-blog">
            <div class="container">
                <h2>Latest blog posts </h2>
                <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?> 
                <div class="col-sm-6 homepage-blog-item">
                    <div class="row">
                        <div class="col-xs-2">
                            <img class="img-responsive" src="<?php the_post_thumbnail_url( ); ?>" alt="<?php the_title(); ?>">
                        </div>
                        <div class="col-xs-9">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            
        </div>
        <!-- END BLOG section -->

        <!-- TAKE CONTROL section -->
        <div class="take-control">
            <div class="container">
                <div class="col-sm-6">
                    <h2><?php echo moto_teaser2_heading($lang); ?></h2>
                    <p><?php echo moto_teaser2_subheading($lang); ?></p>
                </div>

                <div class="col-sm-6 take-control-quote">
                    <a class="" href="<?php echo moto_teaser2_link($lang); ?>"><?php echo moto_teaser2_button($lang); ?></a>
                </div>
            </div>
            
        </div>
        <!-- END TAKE CONTROL section -->

<?php get_footer(); ?>
