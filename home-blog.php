<div class="blog">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2>Blog</h2>
				<span>Um mundo de conhecimento e novidades para você.</span>
			</div>
		</div>
	</div>
	<div class="posts">
		<div class="bg"></div>
		<div class="container">
			<div class="row">
				<?php
					wp_reset_query();
					$args = array( 'category_name' => 'blog','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>4); 
					query_posts($args);
					while ( have_posts() ) : the_post();
				?>			
				<div class="col-xs-12 col-md-3 col-sm-6 col-lg-3">
					<div class="notice">
						<div class="image">
							<a href="<?php the_permalink(); ?>">
								<?=odin_thumbnail(640, 480, get_the_title(),true)?>
							</a>
						</div>
						<div class="infos">
							<a href="<?php the_permalink(); ?>">
								<h3><?php the_title(); ?></h3>
							</a>
							<p><?=excerpt_limit(105)?></p>
							<a href="<?php the_permalink(); ?>" class="link">Leia mais</a>
						</div>
					</div>
				</div>
				<?php
					endwhile;
					wp_reset_query();
				?>				
			</div>
		</div>
	</div>
</div>	