<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<header id="header-section" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/header-enchant.jpg')">
		<div class="bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</header>
	<div id="enchant">
		<div class="container">
			<div class="row">
				<?php
					wp_reset_query();
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$args = array( 'category_name' => 'encante','order'=>'DESC', 'orderby'=>'date', 'paged' => $paged,'posts_per_page'=>8);
					$i = 0;
					query_posts($args);
					while ( have_posts() ) : the_post();
					if($i % 2 == 0):
				?>
				<div class="col-xs-6 col-md-3 col-sm-3 col-lg-3">
					<div class="category">	
						<div class="image">
							<?=odin_thumbnail( 600, 800, get_the_title(),true); ?>
							<div class="text">
								<p>
									<?=get_the_excerpt()?>
									<a href="<?php the_permalink(); ?>">Veja mais</a>
								</p>
							</div>
						</div>
						<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3>
						</a>
					</div>
				</div>
				<?php else: ?>
				<div class="col-xs-6 col-md-3 col-sm-3 col-lg-3">
					<div class="category">	
						<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3>
						</a>
						<div class="image">
							<?=odin_thumbnail( 600, 800, get_the_title(),true); ?>
							<div class="text">
								<p>
									<?=get_the_excerpt()?>
									<a href="<?php the_permalink(); ?>">Veja mais</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			<?php
				endif;
				$i++;
				endwhile;
			?>  
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
