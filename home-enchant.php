<div class="enchant">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2>Encante</h2>
        <span>Bons momentos devem ser aproveitados, vividos e lembrados.</span>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div id="encanteCarousel">
          <?php
            wp_reset_query();
            $s = 0;
            $args = array( 'category_name' => 'encante','order'=>'DESC', 'orderby'=>'date','posts_per_page'=>-1); 
            query_posts($args);
            while ( have_posts() ) : the_post();
            if($s % 2 == 0):
          ?>
          <div class="category">  
            <div class="image">
              <?=odin_thumbnail( 255, 340, get_the_title(),true); ?>
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
          <?php else: ?>
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
            <?php   
              endif;
              $s++;
              endwhile;
              wp_reset_query();
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>