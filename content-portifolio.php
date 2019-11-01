<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<header id="header-section">
		<div class="bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</header>
	<div id="portifolio">
		<div class="container">
			<div class="row">
			<?php
				wp_reset_query();
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array( 'category_name' => 'portfolio','order'=>'DESC', 'orderby'=>'date', 'paged' => $paged,'posts_per_page'=>12); 
				query_posts($args);
				while ( have_posts() ) : the_post();
			?>  
			<div class="col-xs-6 col-md-3 col-sm-4 col-lg-3">
				<div class="item">
					<?=odin_thumbnail(265, 265, get_the_title(),true)?>
					<div class="text">
						<center>
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cam.png" width="70" height="70"/>
								<h3><?php the_title(); ?></h3>
							</a>
							<a href="<?php the_permalink(); ?>" class="btn btn-primary">Veja mais</a>
						</center>
					</div>					
				</div>
			</div>
			<?php endwhile; ?> 
			</div>
			<div class="row">
				<div class="col-xs-12">
					<?php
						odin_paging_nav();
						wp_reset_query();					
					?>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
