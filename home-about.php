<div class="about">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2>Quem somos</h2>
			</div>
		</div>
		<div class="row">
			<?php
				wp_reset_query();
				$args = array( 'pagename' => 'quem-somos'); 
				query_posts($args);
				while ( have_posts() ) : the_post();
			?>
			<div class="col-xs-12 col-md-3 col-sm-3 col-lg-3">
				<?=odin_thumbnail( '', '', get_the_title(),true)?>
			</div>
			<div class="col-xs-12 col-md-9 col-sm-9 col-lg-9">
				<p><?=get_post_meta(get_the_ID(), 'Resumo',true)?></p>
				<a href="<?php the_permalink(); ?>">Saiba mais</a>
			</div>
			<?php
				endwhile;
				wp_reset_query();
			?> 		
		</div>		
	</div>
</div>