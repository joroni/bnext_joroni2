<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

</div><!-- .site-content -->

<div id="preloader">
    <div id="loader"></div>
</div>

<footer id="colophon" class="site-footers" role="contentinfo">
    <div class="site-info">
        <div class="footer-main">
            <div class="row">
                <div class="col-three md-1-3 tab-full footer-info mc">
                    <div class="footer-logo"></div>
                    <p>
                        114 Amorsolo Street, Legaspi Village, 1229 Makati City, Legazpi Village, Makati, Metro Manila,
                        Philippines
                    </p>
                    <ul class="footer-social-list hidden">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- end footer-info -->
                <div class="col-three md-1-3 tab-1-2 mob-full footer-contact">
                    <h4>Social</h4>
                    <ul class="footer-social-list stacked">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- end footer-contact -->
                <div class="col-two md-1-3 tab-1-2 mob-full footer-site-links">
                    <h4>Site Links</h4>
                    <?php
            wp_nav_menu( array( 
                'theme_location' => 'my-custom-menu', 
                'container_class' => 'custom-menu-class' )
            ); 
         
            wp_nav_menu( array( 
                'theme_location' => 'inner-custom-menu', 
                'container_class' => 'inner-menu-class' ) ); 
            ?>
                </div>
                <!-- end footer-site-links -->
                <div class="col-four md-1-2 tab-full footer-subscribe">
                    <h4>Our Newsletter</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true">
                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address"
                                required="">
                            <input type="submit" name="subscribe" value="Send">
                            <label for="mc-email" class="subscribe-message"></label>
                        </form>
                    </div>
                </div>
                <!-- end footer-subscribe -->
            </div>
            <!-- /row -->
        </div>
        <!-- end footer-main -->
        <div class="footer-bottom">
            <div class="row">
                <div class="col-twelve">
                    <div class="copyright">
                        <span>© Copyright bneXt 2018.</span>
                        <span>Design by <a href="/">bneXt</a></span>
                    </div>
                    <div id="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up"></i></a>
                    </div>
                </div>
            </div>
            <!-- end footer-bottom -->
            <?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
            <?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
            <!--<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>" class="imprint">
				<?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?>
			</a>-->
        </div><!-- .site-info -->
</footer><!-- .site-footer -->

</div><!-- .site -->
<?php 
$url = site_url();
?>
<script type="text/javascript" src="<?php echo $url; ?>/wp-content/themes/bneXt/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>/wp-content/themes/bneXt/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo $url; ?>/wp-content/themes/bneXt/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo $url; ?>/wp-content/themes/bneXt/js/mdb.min.js"></script>
<!-- Initializations -->
<!--<script  src="<?php echo $url; ?>/wp-content/themes/bneXt/js/hero-slider.js"></script> -->
<!-- Resource JavaScrip -->


<script src="<?php echo $url; ?>/wp-content/themes/bneXt/js/plugins.js"></script>
<script src="<?php echo $url; ?>/wp-content/themes/bneXt/js/main.js"></script>
<script src="<?php echo $url; ?>/wp-content/themes/bneXt/php-contact-form-with-validation-and-recaptcha/form.js"></script>

<script>
    $(document).ready(function () {

 $('#menu-inner-page-menu').addClass('header-main-nav');
 $('blockquote').parent().parent().addClass("bq-container");
        var body = $('body');
        if (body.hasClass('home')) {
            $.getScript("<?php echo $url; ?>/wp-content/themes/bneXt/js/hero-slider.js")
                .done(function (script, textStatus) {
                    //console.log(textStatus);
                    $('#sliders li:first').addClass('cd-hero__slide--selected');
                })
                .fail(function (jqxhr, settings, exception) {
                    console.log("Triggered ajaxError handler.");
                });
                $('.custom-menu-class').removeClass('hidden');
                $('.inner-menu-class').addClass('hidden');
                $('.inner-menu-class ul li a').addClass('smoothscroll');
               // $('#menu-inner-page-menu').addClass('header-main-nav');
                
        }else {
                $('.custom-menu-class').addClass('hidden');
                $('.inner-menu-class').removeClass('hidden');
                $('.inner-menu-class ul li a').addClass('smoothscroll');
               // $('#menu-inner-page-menu').addClass('header-main-nav');
        }

      
    })




    $("iframe").contents().find(".subitem input, .subitem textarea").addClass("form-control");

    $(window).scroll(function () {
        var $height = $(window).scrollTop();
        if ($height > 200) {
            $("iframe").contents().find(".subitem input, .subitem textarea").addClass("form-control");
            $('#header').addClass('top-scroll');
            $('#header-nav-wrap').addClass('scrolling');
            $('.header-menu-toggle').addClass('scrolling');
            $('.menu li a').addClass('smoothscroll');

        } else {
            $('#header').removeClass('top-scroll');
            $('#header-nav-wrap').removeClass('scrolling');
            $('.header-menu-toggle').removeClass('scrolling');
        }
    });



</script>
<?php wp_footer(); ?>

</body>

</html>