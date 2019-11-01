<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<header id="header-section" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/header-about.jpg')">
		<div class="bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</header>
	<div id="about">
		<div class="bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="team">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h2>Equipe</h2>
					</div>
				</div>
				<div class="row">
					<?php
						wp_reset_query();
						$args = array( 'category_name' => 'equipe','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>-1); 
						query_posts($args);
						while ( have_posts() ) : the_post();
					?>			
					<div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
						<center>
							<?=odin_thumbnail( 145, 206, get_the_title(),true); ?>
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						</center>
					</div>
					<?php
						endwhile;
						wp_reset_query();
					?>					
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
