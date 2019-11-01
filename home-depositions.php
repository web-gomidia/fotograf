<div class="depositions">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2>Depoimentos</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2 hidden-xs"></div>
			<div class="col-xs-12 col-md-8 col-sm-8 col-lg-8">
				<div id="depositionsCarousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<?php
							wp_reset_query();
							$args = array( 'category_name' => 'depoimentos','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>-1); 
							query_posts($args);
							$i=0;
							while ( have_posts() ) : the_post();
							$i==0 ? $cls = ' active' : $cls = '';
						?>  						
						<div class="item <?=$cls?>">
							<div class="deposition">
								<center>
									<?=odin_thumbnail(128, 128, get_the_title(),true)?>
									<h3><?php the_title(); ?></h3>
									<?php the_content(); ?>
								</center>
							</div>
						</div>
						<?php
							$i++;
							endwhile;
						?> 						
					</div>
					<ol class="carousel-indicators">
						<?php for ($i = 0; $i < $wp_query->found_posts; $i++) { $i==0 ? $action = ' active' : $action = ''; ?>
							<li data-target="#depositionsCarousel" data-slide-to="<?=$i?>" class="<?=$action?>"></li>
						<?php } ?>    
					</ol>
					<?php wp_reset_query(); ?>
				</div>				
			</div>
		</div>
	</div>
</div>