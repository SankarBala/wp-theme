<?php get_header(); ?>
      

        <main class="col-md-8">
        <?php
            while (have_posts()): the_post();       
           ?>
            <img src="<?php the_post_thumbnail_url(); ?>"
            alt="">
            <?php
                    the_content();
            endwhile;
        ?>
        </main>


  <?php get_footer(); ?>