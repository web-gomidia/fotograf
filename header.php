<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="whatsapp">
		<a href="https://wa.me/5532988373651" target="_blank" alt="WhatsApp" title="WhatsApp">
			<i class="fa fa-whatsapp" aria-hidden="true"></i>
		</a>
	</div>
	<header id="header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<center>
						<?php odin_the_custom_logo(); ?>
					</center>
				</div>
			</div>
			<div class="row">
        <div class="col-xs-4 col-sm-5 hidden-md hidden-lg">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
              <span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>          
        </div>  
				<div class="col-xs-8 col-md-1 hidden-sm col-lg-1 pull-right text-right">
					<div class="social">
						<a href="https://www.facebook.com/Fotograf.artdesign/" class="icons" title="Facebook" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/fotograf.artdesign/" class="icons" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>
				</div>        
				<div class="col-xs-12 col-md-11 col-sm-12 col-lg-11">
					<nav class="collapse navbar-collapse navbar-main-navigation" role="navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'depth'          => 2,
									'container'      => false,
									'menu_class'     => 'nav navbar-nav',
									'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
									'walker'         => new Odin_Bootstrap_Nav_Walker()
								)
							);
						?>
					</nav>					
				</div>
			</div>
		</div>
	</header><!-- #header -->
