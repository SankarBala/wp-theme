<?php get_header(); ?>


<div class="row">

    <main class="col-md-8 text-justify">
    <?php
                if (is_active_sidebar('page-start')) {
                    dynamic_sidebar('page-start');
                }
             
 
     if (have_posts()){
        
            while (have_posts()): the_post();       
            ?>

        <div class="row archive_page archive_back">
            <div class="col-md-4 col-sm-4">
                <!------------Post Image------------>
                <img class="lazyload image-150"
                    src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                    data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>"
                    title="<?php the_title();?>" />

                </a>
                <!------------Post Image------------>

            </div>
            <div class="col-md-8 col-sm-8 text-justify">
                <h3 class="archive_title01"><a href="<?php the_permalink();?>">
                        <?php the_title();?>
                    </a></h3>

                <?php echo wp_trim_words(get_the_content(), $num_words = 30, $more="");?>
                <h4 class="archvie_more"><a href="<?php the_permalink();?>">বিস্তারিত...</a>
                </h4>

            </div>
        </div>

        <hr />

        <?php
                 
             endwhile;
?>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="post-nav">
                    <ul class="pager">
                        <?php
        global $wp_query;                

echo paginate_links( array(
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'show_all'           => false,
    'prev_next'          => true,
    'prev_text'          => __( 'Previous' ),
    'next_text'          => __( 'Next' ),
    'type'               => 'list',
) );
?>
                    </ul>

                </div>
            </div>
        </div>

        <?php


            } else {
               ?>
        <div class="text-center text-info">
            <br />
            <br /><br /><br /><br /><br />
            <h2>
                দু:খিত আপনি যা খুতেছেন তা পাওয়া যায়নি।

            </h2>
        </div>
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        <hr />
        <div class="sgl-cat-tittle"> আপনার এগুলো ভালো লাগতে পারে </div>
        <div class="row">

            <?php wp_reset_postdata();  ?>

            <?php
                    
            $firstPost = new WP_Query(
                array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'meta_key' => 'post_views_count',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                'posts_per_page' => 6,
                'date_query'        => array(
                    array(
                        'year'  => $today['year'],
                        'month' => $today['mon']
                    )
                ) 
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
                        <h4 class="sgl-hadding"> <a href="<?php the_permalink();?>"> <?php the_title();?></a> </h4>
                    </div>
                </div>
            </div>


            <?php
    
                endwhile;
            ?>


        </div>

        <?php
            }
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