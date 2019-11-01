<?php
/**
 * Template Name: Área de Cliente
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */
 if(!is_user_logged_in()):
 header('Location:'.wp_login_url(get_the_permalink()));
 exit();
 else:
 $user = wp_get_current_user();
 $drive = get_user_meta($user->ID, 'drive', false);
 if($drive[0]):
 header('Location:'.$drive[0]);
 else:
get_header();
?>

	<main id="content" tabindex="-1" role="main">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'area' );

				endwhile;
			?>

	</main><!-- #main -->

<?php
get_footer();
endif;
endif;
