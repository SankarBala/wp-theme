<?php get_header(); ?>
<?php set_post_view(); ?>

<div class="row">

    <div class="col-md-8 col-sm-8">
        <!--Next Pages Close--->

        <div class="breadcum">
            <?php
    if (is_active_sidebar('footer_5')) {
        dynamic_sidebar('footer_5');
    }
    ?>

        </div>

        <?php
                if (is_active_sidebar('category-1')) {
                    dynamic_sidebar('category-1');
                }
                ?>

        <div class="row archive_page">
            <div class="col-md-8 col-sm-8">

                <?php wp_reset_postdata();  ?>

                <?php
                
        $firstPost = new WP_Query(
            array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'cat' => get_query_var('cat'),
        'orderby' => 'date',
        'order' => 'DESC',
        'offset'=> get_query_var('paged') == null ? 0 : (get_query_var('paged')-1)*11,
        'posts_per_page' => 1,
        ));

        while ($firstPost->have_posts()) : $firstPost->the_post();   
       
       
        ?>

                <img class="lazyload" src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                    data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>"
                    title="<?php the_title();?>" />

                </a>


                <h3 class="archive_title01">
                    <a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                <?php echo wp_trim_words(get_the_content(), $num_words = 30, $more="");?>
                <span style="text-align:right">
                    <a href="<?php the_permalink();?>">
                        বিস্তারিত...</a>
                </span>

                <?php

            endwhile;
        ?>



            </div>
            <div class="col-md-4 col-sm-4">

                <?php wp_reset_postdata();  ?>

                <?php
                
        $firstPost = new WP_Query(
            array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'cat' => get_query_var('cat'),
        'orderby' => 'date',
        'order' => 'DESC',
        'offset'=> get_query_var('paged') == null ? 1 : (get_query_var('paged')-1)*11+1,
        'posts_per_page' => 2,
        ));

        while ($firstPost->have_posts()) : $firstPost->the_post();    
        ?>


                <!------------Post Image------------>
                <img class="lazyload image-150"
                    src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                    data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>"
                    title="<?php the_title();?>" />

                </a>

                <!------------Post Image------------>


                <h3 class="archive_title02"><a href="<?php the_permalink();?>"><?php the_title();?> </a></h3>
                <?php

endwhile;
?>


            </div>
        </div>

        <?php
                if (is_active_sidebar('category-2')) {
                    dynamic_sidebar('category-2');
                }
                ?>
        <div class="row archive_page text-justify">
            <?php wp_reset_postdata();  ?>

            <?php
                
        $firstPost = new WP_Query(
            array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'cat' => get_query_var('cat'),
        'orderby' => 'date',
        'order' => 'DESC',
        'offset'=> get_query_var('paged') == null ? 3 : (get_query_var('paged')-1)*11+3,
        'posts_per_page' => 3,
        ));

        while ($firstPost->have_posts()) : $firstPost->the_post();    
        ?>


            <div class="col-md-4 col-sm-4">
                <img class="lazyload image-150"
                    src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                    data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>"
                    title="<?php the_title();?>" />

                </a>
                <!------------Post Image------------>
                <h3 class="archive_title02"><a href="<?php the_permalink();?>"> <?php the_title();?> </a></h3>
            </div>

            <?php

endwhile;
?>


        </div>

        <?php
                if (is_active_sidebar('category-3')) {
                    dynamic_sidebar('category-3');
                }
                ?>

        <?php wp_reset_postdata();  ?>

        <?php
    
$firstPost = new WP_Query(
array(
'post_type' => 'post',
'post_status' => 'publish',
'cat' => get_query_var('cat'),
'paged'=> get_query_var('paged'),
'orderby' => 'date',
'order' => 'DESC',
'offset'=> get_query_var('paged') == null ? 6 : (get_query_var('paged')-1)*11+6,
'posts_per_page' => 5,
));

while ($firstPost->have_posts()) : $firstPost->the_post();    
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

        <?php

endwhile;
?>

        <hr />
        <?php
                if (is_active_sidebar('category-4')) {
                    dynamic_sidebar('category-4');
                }
                ?>



        <br />
        <br />
        <br />


        <?php


$paginate = new WP_Query(
    array(
'post_type' => 'post',
'post_status' => 'publish',
'cat' => get_query_var('cat'),
'posts_per_page' => 11,

));

?>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="post-nav">
                    <ul class="pager">
                        <?php
echo paginate_links( array(
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $paginate->max_num_pages,
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
                if (is_active_sidebar('category-5')) {
                    dynamic_sidebar('category-5');
                }
                ?>


    </div>



    <div class="col-md-4 col-sm-4">

        <?php get_sidebar();?>

    </div>


</div>
<?php get_footer(); ?>