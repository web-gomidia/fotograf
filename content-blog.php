<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<header id="header-section" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/header-blog.jpg')">
		<div class="bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</header>
	<div id="blog">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 hidden-xs"></div>
				<div class="col-xs-12 col-md-8 col-sm-8 col-lg-8">
					<?php
						wp_reset_query();
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$args = array( 'category_name' => 'blog','order'=>'DESC', 'orderby'=>'date', 'paged' => $paged ); 
						query_posts($args);
						while ( have_posts() ) : the_post();
					?>                          
					<div class="notice">
						<div class="row">
							<div class="col-xs-12">
								<div class="image">
									<?=odin_thumbnail(800, 360, get_the_title(),true)?>
									<div class="link text-center">
										<a href="<?php the_permalink(); ?>">
											<i class="fa fa-link" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 text-center">
								<a href="<?php the_permalink(); ?>">
									<h3><?php the_title(); ?></h3>
								</a>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="btn btn-primary">Leia mais</a>
							</div>
						</div>
					</div>
					<?php endwhile; ?> 
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
		</div>
	</div>
</article><!-- #post-## -->
