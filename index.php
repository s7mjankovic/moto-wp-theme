<?php get_header(); ?>

    <header class="moto-header" style="background: url('<?php echo moto_header_image();?>') center center no-repeat;">
        <div class="header-caption">
            <div class="container">
                <h1 class="tagline"><?php echo moto_header_title();?></h1>
                <p><?php echo moto_header_description();?></p>
                <a href="<?php echo moto_header_link();?>" class="header-button">Try free trial</a>
            </div>
        </div>
        <div class="header-caption-mobile">
            <img class="img-responsive" src="<?php echo moto_header_left_image();?>">
        </div>
    </header>

    <div class="content">
        <div class="container">
        <!-- Spend less section -->
            <h2 class="content-h2 content-h2-padding">
                <?php echo moto_about_heading(); ?>
            </h2>
            <div class="spend-less-content">
                <div class="row">
                    <div class="col-sm-4 spend-less-content-item">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-responsive" src="<?php echo moto_about_icon1(); ?>" alt="<?php echo moto_about_title1(); ?>">
                            </div>
                            <div class="col-xs-9">
                                <h3><?php echo moto_about_title1(); ?></h3>
                                <p><?php echo moto_about_description1(); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 spend-less-content-item">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-responsive" src="<?php echo moto_about_icon2(); ?>" alt="<?php echo moto_about_title2(); ?>">
                            </div>
                            <div class="col-xs-9">
                                <h3><?php echo moto_about_title2(); ?></h3>
                                <p><?php echo moto_about_description2(); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 spend-less-content-item">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-responsive" src="<?php echo moto_about_icon3(); ?>" alt="<?php echo moto_about_title3(); ?>">
                            </div>
                            <div class="col-xs-9">
                                <h3><?php echo moto_about_title3(); ?></h3>
                                <p><?php echo moto_about_description3(); ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-sm-4 spend-less-content-item">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-responsive" src="<?php echo moto_about_icon4(); ?>" alt="<?php echo moto_about_title4(); ?>">
                            </div>
                            <div class="col-xs-9">
                                <h3><?php echo moto_about_title4(); ?></h3>
                                <p><?php echo moto_about_description4(); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 spend-less-content-item">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-responsive" src="<?php echo moto_about_icon5(); ?>" alt="<?php echo moto_about_title5(); ?>">
                            </div>
                            <div class="col-xs-9">
                                <h3><?php echo moto_about_title5(); ?></h3>
                                <p><?php echo moto_about_description5(); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 spend-less-content-item">
                        <div class="row">
                            <div class="col-xs-3">
                                <img class="img-responsive" src="<?php echo moto_about_icon6(); ?>" alt="<?php echo moto_about_title6(); ?>">
                            </div>
                            <div class="col-xs-9">
                                <h3><?php echo moto_about_title6(); ?></h3>
                                <p><?php echo moto_about_description6(); ?></p>
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
                                <img class="img-responsive" src="<?php echo moto_quote_icon1();?>" alt="<?php echo moto_quote_title1();?>">
                            </div>
                            <div class="col-xs-10">
                                <h3><?php echo moto_quote_title1();?></h3>
                                <p><?php echo moto_quote_description1();?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 get-my-quote-item">
                        <div class="row">
                            <div class="col-xs-2">
                                <img class="img-responsive" src="<?php echo moto_quote_icon2();?>" alt="<?php echo moto_quote_title2();?>">
                            </div>
                            <div class="col-xs-10">
                                <h3><?php echo moto_quote_title2();?></h3>
                                <p><?php echo moto_quote_description2();?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a class="pull-right" href="<?php echo moto_quote_link();?>">Get my quote</a>
                    </div>
                </div>
            </div>
            <!-- END Get my quote section -->
            <hr>
            <!-- Pricing section -->
            <div class="pricing">
                <h2 class="content-h2">
                    Simple, transparent pricing that scales with your fleet.
                </h2>
                <h3 class="content-h3">
                    Get started with MO TO today.
                </h3>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 pricing-inner">
                        <div class="row">
                            <div class="col-sm-6 pricing-item pricing-item-left">
                                <div class="pricing-item-inner">
                                    <p class="pricing-item-big-text">Monthly fee</p>
                                    <p class="pricing-item-price">45 &euro;</p>
                                    <p class="pricing-item-big-text">Per account</p>
                                    <div class="pricing-item-list">
                                        <p>No hidden fees.</p>
                                        <p>Simple and transparent monthly pricing for everyone.</p>
                                    </div>
                                    <div class="pricing-sign-in">
                                        <a href="#">Sign in</a>
                                    </div>
                                </div>

 

                            </div>
                            <div class="col-sm-6 pricing-item pricing-item-right">
                                <div class="pricing-item-inner">
                                    <p class="pricing-item-big-text">+ Every user </p>
                                    <p class="pricing-item-price">12 &euro;</p>
                                    <p class="pricing-item-big-text">Montly/each</p>
                                    <div class="pricing-item-list">
                                        <p>Unlimited everything</p>
                                        <p>Assigned tasks</p>
                                        <p>Route optimization</p>
                                        <p>Attached documents</p>
                                        <p>Client signatures</p>
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
                    <?php echo moto_offer_heading(); ?>
                </h2>
                <h3 class="content-h3">
                    <?php echo moto_offer_subheading(); ?>
                </h3>
                <div class="offer-fact-wrapper">
                    <div class="row">
                        <div class="col-sm-6 offer-fact">
                            <img class="img-responsive" src="<?php echo moto_offer_icon1();?>" alt="<?php echo moto_offer_title1();?>">
                            <p><?php echo moto_offer_title1();?></p>
                        </div>
                        <div class="col-sm-6 offer-fact offer-fact-left">
                            <img class="img-responsive" src="<?php echo moto_offer_icon2();?>" alt="<?php echo moto_offer_title2();?>">
                            <p><?php echo moto_offer_title2();?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 offer-fact">
                            <img class="img-responsive" src="<?php echo moto_offer_icon3();?>" alt="<?php echo moto_offer_title3();?>">
                            <p><?php echo moto_offer_title3();?></p>
                        </div>
                        <div class="col-sm-6 offer-fact offer-fact-left">
                            <img class="img-responsive" src="<?php echo moto_offer_icon4();?>" alt="<?php echo moto_offer_title4();?>">
                            <p><?php echo moto_offer_title4();?></p>
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
                <?php echo moto_teaser_heading(); ?>
            </h2>
            <div class="track-anything-image">
                <img class="img-responsive" src="<?php echo moto_teaser_image(); ?>" alt="<?php echo moto_teaser_heading(); ?>">
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
                <div class="col-sm-6">
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
                    <h2><?php echo moto_teaser2_heading(); ?></h2>
                    <p><?php echo moto_teaser2_subheading(); ?></p>
                </div>

                <div class="col-sm-6 take-control-quote">
                    <a class="" href="<?php echo moto_teaser2_link(); ?>">Get my quote</a>
                </div>
            </div>
            
        </div>
        <!-- END TAKE CONTROL section -->

<?php get_footer(); ?>
