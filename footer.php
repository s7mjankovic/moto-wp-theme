        <!-- FOOTER section -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-sm-4 footer-item">
                                <h4>Contact us</h4>
                                <div class="footer-col-p">
                                    <a href="#">Contact Support</a>
                                    <a href="#">Schedule a Demo</a>
                                    <a href="#">Request a Quote</a>
                                </div>
                            </div>
                            <div class="col-sm-4 footer-item">
                                <h4>Solutions</h4>
                                <div class="footer-col-p">
                                    <a href="#">Fleet Management Solution</a>
                                    <a href="#">Heavy Equipment Management</a>
                                    <a href="#">Professional Services</a>
                                </div>
                            </div>
                            <div class="col-sm-4 footer-item">
                                <h4>Mo To Resources</h4>
                                <div class="footer-col-p">
                                    <a href="#">GPS Fleet Tracking</a>
                                    <a href="#">Fleet Management Software</a>
                                    <a href="#">Electronic Logging Device</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row credentials">
                    <div class="col-sm-4 footer-logo">
                        <img class="img-responsive" src="<?php echo moto_footer_logo();?>" alt="MOTO - CORPORATE VEHICLE AND ASSET MANAGEMENT SOLUTIONS">
                        <p>&copy; <?php echo date('Y'); ?> MOTO</p>
                        <a href="#">Terms of service</a>
                        <a href="#">Privacy policy</a>
                    </div>
                    <div class="col-sm-6 social-icon">
                        <a href="<?php echo moto_facebook();?>" target="_blank"><img class="img-responsive" src="<?php echo moto_facebook_icon();?>" alt="facebook"></a>
                        <a href="<?php echo moto_twitter();?>" target="_blank"><img class="img-responsive" src="<?php echo moto_twitter_icon();?>" alt="twitter"></a>
                        <a href="<?php echo moto_google();?>" target="_blank"><img class="img-responsive" src="<?php echo moto_google_icon();?>" alt="google"></a>
                        <a href="<?php echo moto_youtube();?>" target="_blank"><img class="img-responsive" src="<?php echo moto_youtube_icon();?>" alt="youtube"></a>
                    </div>
                    <div class="col-sm-2 ">
                       
                    </div>
                </div>

            </div>
        </div>
        <!-- END FOOTER section -->


    </div><!-- end content -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <?php wp_footer(); ?>
    <script>
        $(document).on('scroll',function() {
            var scroll = jQuery(window).scrollTop();
            var width = jQuery(document).width();

            if(width >= 790) {
                if (scroll > 100) {
                    $(".navbar").addClass("navbar-scroll");
                } else {
                    $(".navbar").removeClass("navbar-scroll");
                }
            } else {
                if (scroll > 100) {
                    $(".navbar").addClass("navbar-scroll");
                }
            }
        });
    </script>
</body>

</html>