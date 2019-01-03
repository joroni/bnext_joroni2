<?php /* Template Name: Full Width 01 */ 
get_header(); 
$url = site_url();
?>

<section id="top-slide" data-parallax="scroll"> 
</section>
 <section id="content" data-parallax="scroll">
        <div class="row block-1-2 block-tab-full group">

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
      
</div>
</section>

 
   <!-- pricing ================================================== -->
               <section id="contact" class="view full-page-intro dark-theme" style=" background-image: url('	<?php echo site_url();
?>/wp-content/uploads/2018/10/meeting.jpg'); background-repeat: no-repeat; background-size: cover; background-blend-mode: overlay; background-color: #333;" data-parallax="scroll">
        <div class="row about-how-steps block-1-2 contact-content block-tab-full group">

            <div class="col-six contact-intro bgrid step" data-item="1">
                <h1 class="intro-header" data-aos="fade-up">Contact Us</h1>
                <p style="text-align:justified-left;" data-aos="fade-up">bneXt is here to provide you with more information, answer any questions you may have and create and effective solution for your digital needs.</p>
                
            </div>
            <div class="col-six  contact-table-justify bgrid step" data-item="2">

                <div class="row">
                    <div class="plan-wrap" data-aos="fade-up">
                        <div class="plan-block" data-aos="fade-up">
                        <?php include 'php-contact-form-with-validation-and-recaptcha/index.php' ?>
                        </div>
                    </div>

                    <!-- end plan-wrap -->
                </div>
            </div>
            <!-- end pricing-table -->
        </div>
        <!-- end pricing-content -->
    </section>
   

  
</div><!-- .content-area -->


<?php get_footer(); ?>
<script>
    $(document).ready(function(){
        $('body').addClass("not-home, full-width");
        $("body::before, .entry-header").css('display', 'none');
        $("div[class^='hbupro-hero-banner-wrp-'],div[class*=' hbupro-hero-banner-wrp-']").detach().appendTo("#top-slide");
    })




    

    </script>