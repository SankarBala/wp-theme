<?php get_header(); ?>
      
<?php wp_reset_postdata();  ?>
     <div class="row">

             <main class="col-md-8">
             <?php
                if (is_active_sidebar('page-start')) {
                    dynamic_sidebar('page-start');
                }
                ?>
                     <?php
            while (have_posts()): the_post();       
            ?>
            <img src="<?php the_post_thumbnail_url(); ?>"
            alt="">
            <?php
                    the_content();
                endwhile;
                ?>
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