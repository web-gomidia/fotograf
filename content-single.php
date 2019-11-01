<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
 $cat = get_the_category();
?>

<article id="post-<?php the_ID(); ?>">
	<header id="header-section">
		<div class="bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1><?=$cat[0]->name?></h1>
				</div>
			</div>
		</div>
	</header>
	<?php if ( get_post_gallery() ): ?>
		<div id="text">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h2 class="title"><?php the_title(); ?></h2>
						<?php
							$content = get_the_content();
							$content = preg_replace('/\[gallery ids=[^\]]+\]/', '',  $content );
							$content = apply_filters('the_content', $content );
							echo $content;
						?>					
					</div>
				</div>
				<div class="row">
					<?php
						$gallery = get_post_gallery( get_the_ID(), false );
						$ids = explode(',', $gallery['ids']);
						foreach( $ids as $idg ) :
						$excerpt = get_post($idg)->post_excerpt;
					?> 				
					<div class="col-xs-6 col-md-3 col-sm-3 col-lg-3">
						<div class="image">
							<a href="<?=odin_get_image_url($idg, '', '')?>" data-lightbox="textgallery" data-title="<?=$excerpt?>">
								<img src="<?=odin_get_image_url($idg,263,175); ?>" class="img-responsive"/>												
								<div class="bg text-center">
									<i class="fa fa-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>					
					</div>
					<?php
						$i++;                            	
						endforeach;
					?>				
				</div>
			</div>
		</div>
		<?php else: ?>
		<div id="text" class="nogallery">	
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h2 class="title"><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
</article><!-- #post-## -->

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lightbox.min.js"></script>

<script>
	lightbox.option({
		'showImageNumberLabel': false
	})
</script>
