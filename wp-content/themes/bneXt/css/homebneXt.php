<?php
get_header();

?>

 


<div id="primary" class="content-area">
 
   <section class="v-container cd-hero js-cd-hero js-cd-autoplay" id="home" data-parallax="scroll"> 
  
            <ul id="sliders" class="cd-hero__slider vertical-align-wrap">
            <?php
$query = new WP_Query( array( 'category_name' => 'slider-item' ) );
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();
    ?> 
   <li class="vertical-align vertical-align--middle cd-hero__slide <?php (0 == $i ? "cd-hero__slide--selected" : "") ?> js-cd-slide">
    <div class="cd-hero__content cd-hero__content--full-width" style="pointer-events: none;">
  <h2><?php
        the_title();
        ?>
        </h2>
        <p><?php the_content(); ?></p>
        </div></li> <?php
    endwhile;
else :
    echo 'No posts';
endif;
?>
 </ul>

        
        <div class="cd-hero__nav js-cd-header__nav js-cd-nav">
            <nav>
                <span class="cd-hero__marker cd-hero__marker--item-1 js-cd-marker"></span>

                <ul>
                    <li class="cd-selected"><a href="#0">Image</a></li>
                    <li><a href="#0">Intro</a></li>
                    <li><a href="#0">Intro</a></li>
                    <li><a href="#0">Intro</a></li>


                </ul>
                
            </nav>
            <div class="tp-bullets simplebullets preview2 hidebullets" style="bottom: 20px; left: 50%; margin-left: -27px;"><div class="bullet first"></div><div class="bullet selected"></div><div class="bullet last"></div><div class="tpclear"></div></div>
        </div> <!-- .cd-hero__nav -->


        <iframe class="hexagon-background" src="wp-content/themes/bneXt/slider/index.html" allowtransparency="true" scrolling="no" style="width:100%; pointer-events: auto; height:100%; overflow: visible;">Alternate
            content</iframe>

    </section> <!-- .cd-hero -->


                <!--================================================== -->
    <section id="about" class="mc" data-parallax="scroll">
        <div class="row">
            <div class="col-twelve">
                <h1 class="intro-header aos-init aos-animate mc" data-aos="fade-up">About Us</h1>
            </div>
        </div>
        <!--Grid row-->
        <div class="row block-1-7 block-tab-full group" data-aos="fade-up">
            <!--Grid column-->
            <div class="col-six bgrid step" data-item="1">
                <!--First row-->
                <div class="row">
                    <div class="col-one mr-3 bgrid step" data-item="2">
                        <i class="fa fa-code fa-2x indigo-text"></i>
                    </div>
                    <div class="col-ten bgrid step" data-item="3">
                        <h5 class="feature-title">YOUR PARTNER IN DIGITAL TRANSFORMATION</h5>
                        <p class="grey-text">In today’s exponential explosion of technologies, it is imperative for every company to disrupt itself before the industry disrupts and eliminates it.

                        </p>
                        <p class="nextLine"><a href="http://104.238.96.209/~project/joroni/bnext2/who-we-are">Read more...</a></p>
                    </div>
                </div>
                <!--/First row-->
                <div style="height:30px"></div>
                <!--Second row-->
                <div class="row">
                    <div class="col-one mr-3 bgrid step" data-item="3">
                        <i class="fa fa-cubes fa-2x blue-text"></i>
                    </div>
                    <div class="col-ten bgrid step" data-item="4">
                        <h5 class="feature-title">OUR METHODOLOGY</h5>
                        <p class="grey-text">We give you detailed user-friendly documentation at your disposal. It will
                            help you to implement your ideas easily.
                        </p>
                        <p class="nextLine"><a href="http://104.238.96.209/~project/joroni/bnext2/who-we-are">Read more...</a></p>
                    </div>
                </div>
                <!--/Second row-->
                <div style="height:30px"></div>
                <!--Third row-->
                <div class="row ">
                    <div class="col-one mr-3 bgrid step" data-item="5">
                        <i class="fa fa-certificate fa-2x cyan-text"></i>
                    </div>
                    <div class="col-ten bgrid step" data-item="6">
                        <h5 class="feature-title">OUR RESOURCES</h5>
                        <p class="grey-text">We care about the development of our users. We have prepared numerous
                            tutorials, which allow you to learn how to use MDB as well as other technologies. </p>
                        <p class="nextLine"><a href="http://104.238.96.209/~project/joroni/bnext2/who-we-are">Read more...</a></p>

                    </div>
                </div>
                <!--/Third row-->
            </div>
            <!--/Grid column-->
            <!--Grid column-->
            <div class="col-six bgrid step" data-item="7">
                <p> <img src="wp-content/uploads/2018/10/bneXt-drawing.jpg"></p>
                <!--
                <p class="h5 text-center mb-4">Watch our "5 min Quick Start" tutorial</p>

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ"
                        allowfullscreen></iframe>
                </div>-->
            </div>
            <!--/Grid column-->
        </div>
        <!--/Grid row-->
    </section>
    <!-- end about -->

    <!--Section: Main info-->
    <?php $url  = site_url(); ?>
    <section id="solutions" data-parallax="scroll">
        <div class="row">
            <div class="col-twelve">
                <h1 class="intro-header aos-init aos-animate" data-aos="fade-up">Solutions</h1>
            </div>
        </div>
        <div class="row about-how-steps block-1-3 block-tab-full group" data-aos="fade-up">
            <div class="bgrid step" data-item="1">
                <!--Card-->
                <div class="card center">
                    <!--Card image-->
                    <div class="view overlay">
                        <img src="<?php echo $url; ?>/wp-content/uploads/2018/10/digital-core-transformation2.jpg" class="card-img-top  center" alt="bneXt Solutions Digital Transformation">
                        <a id="about-card-img-bpTutorial" href="#">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body center ">
                        <!--Title-->
                        <h4 class="card-title center">Digital<br> Core <br>Transformation</h4>
                        <!--Text-->
                        <p class="card-text center">Understanding your current objectives, priorities, structure and culture and co-developing with you a Digital Core Transformation Roadmap that will define value and timelines of executing enterprise solutions marrying your current environment and end-goals 
                         </p>
                        <a id="about-card-button-bpTutorial" href="digital-core-transformation-2" class="btn button btn-indigo waves-effect waves-light">Discover</a>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="bgrid step" data-item="2">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay">
                    <img src="<?php echo $url; ?>/wp-content/uploads/2018/10/bf-tutorial2.jpg" class="card-img-top" alt="">
                        <a href="#">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body center ">
                        <!--Title-->
                        <h4 class="card-title center">Infrastructure & Platform Transformation</h4>
                        <!--Text-->
                        Understanding your current system environment and co-developing with you an Infrastructure and Platform Transformation Roadmap that will outline a pathway towards an agile...
                        </p>
                        <a href="infrastructure-platform-transformation" class="btn button btn-indigo waves-effect waves-light center ">Discover
                        </a>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->
            </div>
            <!--Grid column-->


            <div class="bgrid step" data-item="3">
                <!--Card-->
                <div class="card center">
                    <!--Card image-->
                    <div class="view overlay">
                    <img src="<?php echo $url; ?>/wp-content/uploads/2018/10/digital-core-transformation.jpg" class="card-img-top  center" alt="Digital Core Transformation">
                        <a id="about-card-img-bpTutorial" href="#">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-body center ">
                        <!--Title-->
                        <h4 class="card-title center">CYBERSECURITY <br> LANDSCAPE  <br>Transformation</h4>
                        <!--Text-->
                        <p class="card-text center">Understanding your current cyber security posture and co- developing with you a Cyber Security Landscape Transformation Roadmap that will outline a pathway towards a secure, self-sustaining landscape that will operate on Machine Learning and self-healing systems 
                        </p>
                        <a id="about-card-button-bpTutorial" href="cybersecurity-landscape-transformation" class="btn button btn-indigo waves-effect waves-light">Discover</a>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->
            </div>
           
           <!-- <div class="bgrid step" data-item="4">
                
                <div class="card">
                  
                    <div class="view overlay">
                        <img src="wp-content/uploads/2018/10/wp.jpg" class="card-img-top" alt="MDB WordPress tutorial">
                        <a id="about-card-img-wpTutorial" href="#">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                  
                    <div class="card-body center ">
                        
                        <h4 class="card-title center">Education Services<br> Pillars</h4>
                       
                        <p class="card-text center"> In this tutorial, you will learn truly exciting things - creating
                            a dynamic content and remote code injection. You will create a smart website which learns
                            your user and reacts properly to his behavior.
                        </p>
                        <a id="about-card-img-wpTutorial" href="#" class="btn button btn-indigo waves-effect waves-light center">Discover
                        </a>
                    </div>
                  
                </div>
              
            </div>
           
        </div>-->
      
    </section>
    <!--First row-->
    
    <section id="careers" data-parallax="scroll" style="background: #6F92D2; color: #fff;">
        <div class="row">
            <div class="col-twelve">
                <h1 class="intro-header" data-aos="fade-up">Careers</h1>
            </div>
        </div>

        <div class="row about-how-steps block-1-2 mc block-tab-full group" data-aos="fade-up">

            <div class="col-md-6 mb-4 bgrid step" data-item="1">
                <div><img src="wp-content/uploads/2018/10/careers.png" style="min-width:100%; min-height:100%;">

                </div>
            </div>
            <div class="col-md-6 mb-4 bgrid step" data-item="2">
                <!--Grid column-->
                <div class="col-md-6 mb-4 center">

                    <!-- Main heading -->

                    <h4>We are hiring exceptional talents.</h4>

                    <a href="careers/" class="button button-primary cta">Join Us
                        <i class="fa fa-download ml-1"></i>
                    </a>

                    <!-- Main heading -->

                    <hr>

                    <p>
                        <strong>400+</strong> material UI elements,
                        <strong>600+</strong> material icons,
                        <strong>74</strong> CSS animations, SASS files, templates, tutorials and many more.
                        <strong>Free for personal and commercial use.</strong>
                    </p>

                </div>
                <!--Grid column-->

            </div>
        </div>
    </section>
    
    <!-- Testimonials Section-->

    <!-- ================================================== -->
    <section id="testimonials" data-parallax="scroll">
        <div class="row">
            <div class="col-twelve">
                <h1 class="intro-header light-text" data-aos="fade-up">What They Say About Us.</h1>
            </div>
        </div>
        <div class="row owl-wrap">
            <div id="testimonial-slider" data-aos="fade-up">
                <div class="slides owl-carousel">
                    <div>
                        <p class="light-text">
                            Your work is going to fill a large part of your life, and the only way to be truly
                            satisfied is to do what you believe is great work. And the only way to do great work is to
                            love what you do. If you haven't found it yet, keep looking. Don't settle. As with all
                            matters of the heart, you'll know when you find it.
                        </p>
                        <div class="testimonial-author">
                            <img src="wp-content/uploads/2018/10/user-02.jpg" alt="Author image">
                            <div class="author-info light-text">
                                Steve Jobs
                                <span class="position light-text">CEO, Apple.</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="light-text">
                            This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                            sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                        </p>
                        <div class="testimonial-author">
                            <img src="wp-content/uploads/2018/10/user-03.jpg" alt="Author image">
                            <div class="author-info light-text">
                                John Doe
                                <span class="light-text">CEO, ABC Corp.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slides -->
            </div>
            <!-- end testimonial-slider -->
        </div>
        <!-- end flex-container -->
    </section>

    <!-- pricing
               ================================================== -->
               <section id="contact" class="view full-page-intro dark-theme" style=" background-image: url('wp-content/uploads/2018/10/meeting.jpg'); background-repeat: no-repeat; background-size: cover; background-blend-mode: overlay; background-color: #333;"
        data-parallax="scroll">
        <div class="row about-how-steps block-1-2 contact-content block-tab-full group">

            <div class="col-six contact-intro bgrid step" data-item="1">
                <h1 class="intro-header" data-aos="fade-up">Contact Us</h1>
                <p data-aos="fade-up"><blockquote>bneXt is here to provide you with more information, answer any questions you may have and create and effective solution for your digital needs.</blockquote>
                </p>
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
    <!-- end pricing -->
   <!-- <main id="main" class="site-main" role="main">-->
    <?/*php
while ( have_posts() ):
    the_post();
    get_template_part( 'content', 'page' );
    if ( comments_open() || get_comments_number() ):
        comments_template();
    endif;
endwhile;
*/?>

  <!--   </main>.site-main -->
</div><!-- .content-area -->

<?php
get_footer();
?>
