<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<header id="header-section" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/header-area.jpg')">
		<div class="bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</header>
	<div id="area">
		<div class="container">
			<div class="row">
				<div class="col-xs-3 hidden-xs"></div>
				<div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 text-center">
					<h2>Ainda estamos preparando sua área. Aguarde!</h2>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
