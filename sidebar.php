
<?php
                if (is_active_sidebar('footer-1')) {
                    dynamic_sidebar('sidebar-1');
                }
                ?>
<div class="tab-header">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <li id="tab1" role="presentation" class="col-6 text-center active"><a href="#tab21"
                aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="true">সর্বশেষ আপডেট</a></li>
        <li id="tab2" role="presentation" class="col-6 text-center"><a href="#tab22" aria-controls="tab22"
                role="tab" data-toggle="tab" aria-expanded="false">জনপ্রিয় সংবাদ</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content ">
        <div role="tabpanel" class="tab-pane active in" id="tab21">

            <div class="news-titletab" style="max-height:initial;">

                <?php wp_reset_postdata();  ?>

                <?php
                                
                        $firstPost = new WP_Query(
                            array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 10,
                        'post__not_in' => array(get_the_ID()),
                        ));
                        $i =1;
                        
$bn = array("০", "১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "১০", "১১", "১২", "১৩", "১৪", "১৫", "১৬", "১৭", "১৮", "১৯", "২০");

                        while ($firstPost->have_posts()) : $firstPost->the_post();    
                        ?>

                <div class="small-img tab-border">
                    <span><?php echo $bn[$i++] ?></span>
                    <!------------Post Image------------>
                    <a href="<?php the_permalink();?>">
                        <img class="lazyload"
                            src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                            data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>"
                            title="<?php the_title();?>" />

                    </a>
                    <!------------Post Image------------>
                    <h4 class="hadding_3"><a href="<?php the_permalink();?>"> <?php the_title();?> </a></h4>
                </div>

                <?php

                            endwhile;
                            $i=null;
                        ?>



            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tab22">
        <div class="news-titletab" style="max-height:initial;">

<?php wp_reset_postdata();  ?>

<?php
                
                $today = getdate();
        $firstPost = new WP_Query(
            array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'meta_key' => 'post_views_count',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                'posts_per_page' => 10,
                'post__not_in' => array(get_the_ID()),
                'date_query'        => array(
                    array(
                        'year'  => $today['year'],
                        'month' => $today['mon']
                    )
                )
                ));
        $i =1;
        
$bn = array("০", "১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "১০", "১১", "১২", "১৩", "১৪", "১৫", "১৬", "১৭", "১৮", "১৯", "২০");

        while ($firstPost->have_posts()) : $firstPost->the_post();    
        ?>

<div class="small-img tab-border">
    <span><?php echo $bn[$i++] ?></span>
    <!------------Post Image------------>
    <a href="<?php the_permalink();?>">
        <img class="lazyload"
            src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
            data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>"
            title="<?php the_title();?>" />

    </a>
    <!------------Post Image------------>
    <h4 class="hadding_3"><a href="<?php the_permalink();?>"> <?php the_title();?> </a></h4>
</div>

<?php

            endwhile;
            $i=null;
        ?>



</div>
        </div>
    </div>
</div>

<?php
                if (is_active_sidebar('footer-2')) {
                    dynamic_sidebar('sidebar-2');
                }
                ?>
