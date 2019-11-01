<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
	<main id="home" tabindex="-1" role="main">

		<?php get_template_part( 'home', 'slide' ); ?>
		<?php get_template_part( 'home', 'portifolio' ); ?>
		<?php get_template_part( 'home', 'enchant' ); ?>
		<?php get_template_part( 'home', 'blog' ); ?>
		<?php get_template_part( 'home', 'depositions' ); ?>
		<?php get_template_part( 'home', 'about' ); ?>
		<?php get_template_part( 'home', 'contact' ); ?>

	</main><!-- #content -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha256-NXRS8qVcmZ3dOv3LziwznUHPegFhPZ1F/4inU7uC8h0=" crossorigin="anonymous"></script>
  <script>
    jQuery('#portfolioCarousel').slick({
      lazyLoad: 'ondemand',
      dots: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      prevArrow: false,
      nextArrow: false,  
      responsive:[
        {
          breakpoint: 767,
          settings:{
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }
      ]      
    });
    jQuery('#encanteCarousel').slick({
      lazyLoad: 'ondemand',
      dots: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      prevArrow: false,
      nextArrow: false,
      responsive:[
        {
          breakpoint: 767,
          settings:{
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }
      ]       
    });    
  </script>
<?php
get_footer();
