<?php get_header(); ?>      
<?php set_post_view(); ?>

   
  <div class="row">

          <main class="col-md-8 text-justify">
          <?php
                if (is_active_sidebar('page-start')) {
                    dynamic_sidebar('page-start');
                }
                ?>
                  <?php
            while (have_posts()): the_post();       
            ?>
           <a href="<?php the_post_thumbnail_url(); ?>">
            <img width="100%" class="lazyload"
                src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                data-src="<?php the_post_thumbnail_url(); ?>" />
           </a>
            <br />
            <br />
            <?php
                    the_content();
                endwhile;
                ?>
                <div class="sgl-cat-tittle"> এ ধরনের আরও খবর </div>

                <div class="row">
                    
                <?php wp_reset_postdata();  ?>

<?php
                
        $firstPost = new WP_Query(
            array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 6,
        'post__not_in' => array(get_the_ID()),
        ));
        
        while ($firstPost->have_posts()) : $firstPost->the_post();    
        ?>

<div class="col-sm-4 col-md-4">
                        <div class="Name-again box-shadow">
                            <div class="image-again"> 
                            <!------------Post Image------------>
                            <a href="<?php the_permalink();?>">
        <img class="lazyload image-200"
            src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
            data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>"
            title="<?php the_title();?>" />

    </a>
                            <!------------Post Image------------>
                                <h4 class="sgl-hadding">  <a href="<?php the_permalink();?>"> <?php the_title();?></a> </h4>
                            </div>
                        </div>
                    </div>
                   

<?php

            endwhile;
        ?>

 
                       
                </div>

                <?php
                if (is_active_sidebar('page-end')) {
                    dynamic_sidebar('page-end');
                }
                ?>
                    
        </main>
        <div class="col-md-4">

            <?php get_sidebar(); ?>
        </div>
</div>
  <?php get_footer(); ?>