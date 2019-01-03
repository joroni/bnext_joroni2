<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<?php 
$url = site_url();
?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Material Design Bootstrap -->
    <link  href="<?php echo $url; ?>/wp-content/themes/bneXt/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="<?php echo $url; ?>/wp-content/themes/bneXt/css/base.css">
    <link rel="stylesheet"  href="<?php echo $url; ?>/wp-content/themes/bneXt/css/vendor.css">



    <link rel="stylesheet"  href="<?php echo $url; ?>/wp-content/themes/bneXt/css/reset.css"> <!--  CSS reset -->

    <link rel="stylesheet"  href="<?php echo $url; ?>/wp-content/themes/bneXt/css/main.css">
    <link rel="stylesheet"  href="<?php echo $url; ?>/wp-content/themes/bneXt/css/custom.css">
    <link rel="stylesheet"  href="<?php echo $url; ?>/wp-content/themes/bneXt/css/hero-slider.css"> <!-- Resource style -->

    <!-- script
   ================================================== -->
    <script  src="<?php echo $url; ?>/wp-content/themes/bneXt/js/modernizr.js"></script>
    <script  src="<?php echo $url; ?>/wp-content/themes/bneXt/js/pace.min.js"></script>
	<style>


.cd-hero__marker {
position: absolute;
bottom: 0;
left: 15px;
}
.cd-hero__slider, .cd-hero__slide:first-of-type, .cd-hero__content {
background-color:transparent !important;
background-image: none  !important;
background: none  !important;
z-index:2;
}


.cd-hero__slide:nth-of-type(2) {
background-color: transparent;
background-image: none;
}
iframe.hexagon-background{
position: absolute;
top:0;
left:0;
margin-left: 0px;
margin-right: -15%;
z-index: 1;
overflow: hidden;
width: auto;
height:100%;
}


.cd-hero__nav.js-cd-nav{
background:none;
display: none;
}

#home {
overflow-x: hidden;
}
</style>

 


</head>

<body id="top" <?php body_class(); ?>>

	
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
	<header id="header">
        <div class="container">
            <div class="header-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">bneXt</a>
            </div>
            <nav id="header-nav-wrap">
            <?php
            wp_nav_menu( array( 
                'theme_location' => 'my-custom-menu', 
                'container_class' => 'custom-menu-class' )
            ); 
         
            wp_nav_menu( array( 
                'theme_location' => 'inner-custom-menu', 
                'container_class' => 'inner-menu-class' ) ); 
            ?>
               <!-- <ul class="header-main-nav">
                    <li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll" href="#about" title="about">About</a></li>

                    <li><a class="smoothscroll" href="#solutions" title="solutions">Solutions</a></li>
                    <li><a class="smoothscroll" href="#careers" title="careers">Careers</a></li>
                    <li><a class="smoothscroll" href="#testimonials" title="testimonials">Testimonials</a></li>
                    <li><a class="smoothscroll" href="#contact" title="contact us">Contact Us</a></li>
                </ul>-->
            <!--    <a href="#contact" title="contact-us" class="smoothscroll button button-primary cta">Contact Us</a>-->
            </nav>
            <a style="background-color: #111111; margin-right:15px;" class="header-menu-toggle" href="#"><span>Menu</span></a>
        </div>
    </header>
<!-- <header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				</*?php
					twentyfifteen_the_custom_logo();

					if ( is_front_page() && is_home() ) : ?*/>
						<h1 class="site-title"><a href="</*?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</*?php else : ?>
						<p class="site-title"><a href="</*?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					</*?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"></*?php echo $description; ?></p>
					</*?php endif;
				?>
				<button class="secondary-toggle"></*?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div>- .site-branding --
		</header> site-header -->

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
