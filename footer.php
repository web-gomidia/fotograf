<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

	<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<center>
						<?php odin_the_custom_logo(); ?>
					</center>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<p class="address">Rua Barão de São Marcelino, 385 - Passos, Juiz de Fora - MG, 36025-150 - Tel: (32)3025-3651</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
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
			<div class="row">
				<div class="col-xs-12 text-center">
					<div class="social">
						<a href="https://www.facebook.com/Fotograf.artdesign/" class="icons" title="Facebook" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/fotograf.artdesign/" class="icons" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-9 col-md-10 col-sm-10 col-lg-10">
						<p>&copy; <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'odin' ); ?></p>
					</div>
					<div class="col-xs-3 col-md-2 col-sm-2 col-lg-2 text-right">
						<a href="https://www.gomidia.com.br" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-go.png"/></a>
					</div>
				</div>
			</div>
		</div>		
	</footer><!-- #footer -->

	<?php wp_footer(); ?>
</body>
</html>
