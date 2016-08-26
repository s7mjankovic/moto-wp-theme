(function($) {
    
    $(document).ready(function() {
        var scroll = $(window).scrollTop();
        var width = $(document).width();
        if(width > 790) {
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
        if(width <= 790) {
            $(".navbar").addClass("navbar-scroll");
        }
    });

    $(document).on('scroll',function() {
        var scroll = $(window).scrollTop();
        var width = $(document).width();

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



    $(window).on('resize',function() {
        var width = $(document).width();
        if(width <= 790) {
            $(".navbar").addClass("navbar-scroll");
        }
    });
/*
    $(document).ready(function() {
        var width = $(document).width();
        var scroll = $(window).scrollTop();

        if(width <= 768) {
            $(".navbar").addClass("navbar-scroll");
        }
    });
*/
    // animate anchor
    $(document).ready(function () {
        $('.navbar-nav a').on('click', function (e) {
            // e.preventDefault();

            var target = this.hash,
                $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top-69
            }, 900, 'swing', function () {
            });
            return false;
        });
    });

    $(document).ready(function () {
        // back to top button
        $('.to-top').click(function(){
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
        });

        // back to top button on scroll show/hide
        $(window).scroll(function() {
            if ($(this).scrollTop()) {
                $('.to-top').slideDown(1000);
            } else {
                $('.to-top').fadeOut(1);
            }
        });
    });
    
})(jQuery);


