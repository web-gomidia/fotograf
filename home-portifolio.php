<div class="portifolio">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2>Portifólio</h2>
        <span>Bons momentos devem ser aproveitados, vividos e lembrados.</span>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 nopad">
        <div id="portfolioCarousel">
          <?php
            wp_reset_query();
            $args = array( 'category_name' => 'portfolio','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>-1); 
            query_posts($args);
            while ( have_posts() ) : the_post();
          ?>
          <div class="icone">
            <?=odin_thumbnail( 450, 600, get_the_title(),true); ?>
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
          <?php             
            endwhile;
            wp_reset_query();
          ?> 	      
        </div>          
      </div>
    </div>
  </div>
</div>