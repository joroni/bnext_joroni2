<?php /* Template Name: Full Width 02 */ 
get_header(); ?>

<section id="home" data-parallax="scroll" > </section>
<section id="pagecontent" data-parallax="scroll" > </section>
   <?php

   
    // Start the loop.
    while ( have_posts() ) : the_post();

        // Include the page content template.
        get_template_part( 'content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    // End the loop.
    endwhile;
    ?>
      

  
<?php get_footer(); ?>
<script>
    $(document).ready(function(){
        $("div[class^='hbupro-hero-banner-wrp-'],div[class*=' hbupro-hero-banner-wrp-']").attr("[id='home']");
        $('body').addClass("not-home, full-width");
        $("body::before").css('display', 'none');
        $(".entry-content").css({"margin-left":"-10%",
            "margin-right":"-10%"});
//        $( "div[class^='hbupro-hero-banner-wrp-'],div[class*=' hbupro-hero-banner-wrp-']").nextAll().detach().appendTo('section#pagecontent'); 
     $("div[class^='hbupro-hero-banner-wrp-'],div[class*=' hbupro-hero-banner-wrp-']").detach().appendTo("#home");
        $("div[class^='hbupro-hero-banner-wrp-'],div[class*=' hbupro-hero-banner-wrp-']").css("margin-left", "-10%");
        $("div[class^='hbupro-hero-banner-wrp-'],div[class*=' hbupro-hero-banner-wrp-']").css("margin-right", "-10%");
   })




    </script>
    <!--First row-->
    <!-- pricing
               ================================================== -->
   