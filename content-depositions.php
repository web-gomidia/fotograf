<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<header id="header-section" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/header-depositions.jpg')">
		<div class="bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</header>
	<div id="testemonials">
		<div class="depositions">
			<div class="container">
				<div class="row">
                    <?php
                        wp_reset_query();
                        $args = array( 'category_name' => 'depoimentos','order'=>'DESC', 'orderby'=>'date', 'posts_per_page'=>-1, 
                        'meta_query'  => array(
							array(
								'key'     => 'Video',
								'compare' => 'NOT EXISTS'
							)
						)); 
                        query_posts($args);
                        while ( have_posts() ) : the_post();
                    ?>  
                    <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
						<div class="depoisition">
              <?=odin_thumbnail(100, 100, get_the_title(),true,'img-circle')?>
							<h3><?php the_title(); ?></h3>
							<div class="stars">
							<?php
								if(get_post_meta(get_the_ID(), 'Estrelas',true)):
								for($i = 0; $i < 5; $i++):
								if($i < intval(get_post_meta(get_the_ID(), 'Estrelas',true))):
							?>
							<i class="fa fa-star yellow" aria-hidden="true"></i>
							<?php else: ?>	
							<i class="fa fa-star" aria-hidden="true"></i>
							<?php
								endif;
								endfor;
								endif;
							?>
							</div>
							<?php the_content(); ?>
						</div>
                    </div>
                    <?php
                        $i++;
                        endwhile;
                        wp_reset_query();
                    ?>
				</div>		
			</div>
		</div>		
	</div>
</article><!-- #post-## -->
