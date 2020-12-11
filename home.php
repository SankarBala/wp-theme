<?php get_header(); ?>

    <div class="row">
        <div class="col-md-5 text-justify">
            <?php wp_reset_postdata(); ?>

            <?php

            $firstPost = new WP_Query(
                array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => 1,
                ));

            while ($firstPost->have_posts()) : $firstPost->the_post();
                ?>
                <img class="lazyload img-thumbnail mb-2" width="100%" data-src="<?php the_post_thumbnail_url(); ?>"
                     src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>" alt=""/>
                <h4>
                    <?php
                    the_title(); ?>
                </h4>
                <?php
                echo wp_trim_words(get_the_content(), $num_words = 38, $more = "");
                ?>
                <a href="<?php the_permalink(); ?>"> <?php echo get_option('more_string'); ?></a>
            <?php

            endwhile;
            ?>
        </div>
        <div class="col-md-3">
            <div class="row pb-4">
                <?php wp_reset_postdata(); ?>

                <?php

                $firstPost = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'offset' => 1,
                        'posts_per_page' => 2,
                    ));

                while ($firstPost->have_posts()) : $firstPost->the_post();
                    ?>


                    <div class="col-md-12 col-6">
                        <img class="lazyload img-bordered mb-3" width="100%" height="150px"
                             data-src="<?php the_post_thumbnail_url(); ?>"
                             src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                             alt="">
                        <span class="hadding_2 mb-2"><a class="recent-two"
                                                        href="<?php the_permalink(); ?>"> <?php the_title(); ?>
                    </a></span></br>
                    </div>

                <?php

                endwhile;
                ?>

            </div>

        </div>
        <div class="col-md-4">

            <div class="tab-header">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li id="tab1" role="presentation" class="col-6 text-center active">
                        <a href="#tab21" aria-controls="tab21"
                           role="tab" data-toggle="tab"
                           aria-expanded="true"><?php echo get_option('latest_string'); ?></a></li>
                    <li id="tab2" role="presentation" class="col-6 text-center">
                        <a href="#tab22" aria-controls="tab22"
                           role="tab" data-toggle="tab"
                           aria-expanded="false"><?php echo get_option('popular_string'); ?></a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content ">
                    <div role="tabpanel" class="tab-pane active in" id="tab21">

                        <div class="news-titletab">

                            <?php wp_reset_postdata(); ?>

                            <?php

                            $firstPost = new WP_Query(
                                array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'offset' => 3,
                                    'posts_per_page' => 10,
                                ));
                            $i = 1;

                            $serial = explode(',', get_option('serial_string'));

                            while ($firstPost->have_posts()) : $firstPost->the_post();
                                ?>

                                <div class="small-img tab-border">
                                    <span><?php echo $serial[$i++] ?></span>
                                    <!------------Post Image------------>
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="lazyload"
                                             src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                             data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                                             title="<?php the_title(); ?>"/>

                                    </a>
                                    <!------------Post Image------------>
                                    <h4 class="hadding_3"><a
                                                href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h4>
                                </div>

                            <?php

                            endwhile;
                            $i = null;
                            ?>


                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab22">
                        <div class="news-titletab">

                            <?php wp_reset_postdata(); ?>

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
                                    'date_query' => array(
                                        array(
                                            'year' => $today['year'],
                                            'month' => $today['mon'],
                                            'day' => $today['mday']
                                        )
                                    )
                                ));
                            $i = 1;

                            $serial = explode(',', get_option('serial_string'));

                            while ($firstPost->have_posts()) : $firstPost->the_post();
                                ?>

                                <div class="small-img tab-border">
                                    <span><?php echo $serial[$i++] ?></span>
                                    <!------------Post Image------------>
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="lazyload"
                                             src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                             data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                                             title="<?php the_title(); ?>"/>

                                    </a>
                                    <!------------Post Image------------>
                                    <h4 class="hadding_3"><a
                                                href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h4>
                                </div>

                            <?php

                            endwhile;
                            $i = null;
                            ?>


                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <hr/>
    <div class="row">
        <div class="col-md-8">
            <div class="row">


                <?php

                $firstPost = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'offset' => 13,
                        'posts_per_page' => 9,
                    ));
                $i = 1;

                while ($firstPost->have_posts()) : $firstPost->the_post();
                    ?>

                    <div class="col-md-4 pb-2">

                        <a href="<?php the_permalink(); ?>">
                            <img class="lazyload img-bordered middle-image"
                                 src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                 data-src="<?php the_post_thumbnail_url(); ?>"/>
                        </a>

                        <h4 class="hadding_2"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h4>
                    </div>

                <?php


                endwhile;
                ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="add_01">
                <div class="widget_area">
                    <div class="textwidget"></div>
                </div>
            </div>


            <div class="archive_calender_sec">
                <?php
                if (is_active_sidebar('facebook-page')) {
                    dynamic_sidebar('facebook-page');
                }
                ?>
            </div>


            <div class="archive_calender_sec">
                <?php
                if (is_active_sidebar('sidebar-2')) {
                    dynamic_sidebar('sidebar-2');
                }
                ?>
            </div>


        </div>
    </div>
    <hr/>


    <div class="section-three">
        <div class="row">
            <div class="col-md-8 col-sm-8">

                <div class="catagory-title">
                    <a href="<?php echo get_category_link(get_option('section_1')); ?>"> <?php echo get_option('section_1') == 0 ? "Section 1 Select a category form theme settings" : get_cat_name(get_option('section_1')); ?> </a>
                </div>

                <div class="row">


                    <div class="col-md-6 col-sm-6">
                        <?php

                        $firstPost = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'posts_per_page' => 1,
                                'cat' => get_option('section_1'),
                            ));

                        while ($firstPost->have_posts()) : $firstPost->the_post();
                            ?>

                            <div class="leadnews">
                                <!------------Post Image------------>
                                <a href="<?php the_permalink(); ?>">
                                    <img class="lazyload middle-image"
                                         src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                         data-src="<?php the_post_thumbnail_url(); ?>"/>

                                </a>
                                <!------------Post Image------------>
                                <div class="hadding_1">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                                <div class="content-dtls">
                                    <?php echo wp_trim_words(get_the_content(), $num_words = 100, $more = ""); ?>
                                    <span style="text-align:right">
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo get_option('read_more'); ?>
                                </a></span>
                                </div>
                            </div>


                        <?php

                        endwhile;
                        ?>

                    </div>

                    <div class="col-md-6 col-sm-6">

                        <?php

                        $firstPost = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'offset' => 1,
                                'posts_per_page' => 6,
                                'cat' => get_option('section_1'),
                            ));

                        while ($firstPost->have_posts()) : $firstPost->the_post();
                            ?>


                            <div class="image-title border">
                                <!------------Post Image------------>
                                <a href="<?php the_permalink(); ?>">
                                    <img class="lazyload"
                                         src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                         data-src="<?php the_post_thumbnail_url(); ?>"/>
                                </a>
                                <!------------Post Image------------>
                                <h4 class="hadding_3">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            </div>

                        <?php

                        endwhile;
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="more-news">
                                    <a href="<?php echo get_category_link(get_option('section_1')); ?>"><?php echo get_option('more_news'); ?> </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <div class="col-md-4 col-sm-4">

                <div class="catagory-title">
                    <a href="<?php echo get_category_link(get_option('section_2')); ?>"> <?php echo get_option('section_2') == 0 ? "Section 2 Select a category" : get_cat_name(get_option('section_2')); ?> </a>
                </div>


                <?php

                $firstPost = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 1,
                        'cat' => get_option('section_2'),
                    ));

                while ($firstPost->have_posts()) : $firstPost->the_post();
                    ?>


                    <div class="middle_news">
                        <!------------Post Image------------>
                        <a href="<?php the_permalink(); ?>">
                            <img class="lazyload"
                                 src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                 data-src="<?php the_post_thumbnail_url(); ?>"/>

                        </a>
                        <!------------Post Image------------>
                        <h4 class="hadding_1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </div>


                <?php

                endwhile;
                ?>


                <?php

                $firstPost = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'offset' => 1,
                        'posts_per_page' => 2,
                        'cat' => get_option('section_2'),
                    ));

                while ($firstPost->have_posts()) : $firstPost->the_post();
                    ?>
                    <div class="image-title border">
                        <!------------Post Image------------>
                        <a href="<?php the_permalink(); ?>">
                            <img class="lazyload"
                                 src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                 data-src="<?php the_post_thumbnail_url(); ?>"/>

                            <!------------Post Image------------>
                            <h4 class="hadding_3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </div>


                <?php

                endwhile;
                ?>


                <div class="row">
                    <div class="col-md-12">
                        <div class="more-news">
                            <a href="<?php echo get_category_link(get_option('section_2')); ?>"><?php echo get_option('more_news'); ?></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <hr/>


    <div class="section-six">

        <div class="catagory-title">
            <a href="<?php echo get_category_link(get_option('section_3')); ?>"> <?php echo get_option('section_3') == 0 ? "Section 3 Select a category" : get_cat_name(get_option('section_3')); ?> </a>
        </div>


        <div class="row">
            <div class="col-md-3 col-sm-3">


                <?php

                $firstPost = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 2,
                        'cat' => get_option('section_3'),
                    ));

                while ($firstPost->have_posts()) : $firstPost->the_post();
                    ?>


                    <div class="middle_news">
                        <!------------Post Image------------>
                        <a href="<?php the_permalink(); ?>">
                            <img class="lazyload "
                                 src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                 data-src="<?php the_post_thumbnail_url(); ?>"/>
                        </a>
                        <!------------Post Image------------>
                        <h4 class="hadding_2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h4>
                    </div>


                <?php

                endwhile;
                ?>


            </div>
            <div class="col-md-5 col-sm-5">


                <?php

                $firstPost = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'offset' => 2,
                        'posts_per_page' => 1,
                        'cat' => get_option('section_3'),
                    ));

                while ($firstPost->have_posts()) : $firstPost->the_post();
                    ?>

                    <div class="leadnews">

                        <a href="<?php the_permalink(); ?>">
                            <img class="lazyload"
                                 src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                 data-src="<?php the_post_thumbnail_url(); ?>"/>
                        </a>


                        <div class="hadding_1">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="content-dtls">
                            <?php echo wp_trim_words(get_the_content(), $num_words = 50, $more = ""); ?>

                        </div>

                    </div>


                <?php

                endwhile;
                ?>
            </div>

            <div class="col-md-4 col-sm-4">
                <?php

                $firstPost = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'offset' => 3,
                        'posts_per_page' => 5,
                        'cat' => get_option('section_3'),
                    ));

                while ($firstPost->have_posts()) : $firstPost->the_post();
                    ?>

                    <div class="image-title border">

                        <a href="<?php the_permalink(); ?>">
                            <img class="lazyload"
                                 src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                 data-src="<?php the_post_thumbnail_url(); ?>"/>
                        </a>

                        <!------------Post Image------------>
                        <h4 class="hadding_3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </div>


                <?php

                endwhile;
                ?>


                <div class="row">
                    <div class="col-md-12">
                        <div class="more-news">
                            <a href="<?php echo get_category_link(get_option('section_3')); ?>"><?php echo get_option('more_news'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr/>
    <div class="section-four">
        <div class="row">
            <div class="col-md-8 col-sm-8">

                <div class="catagory-title">
                    <a href="<?php echo get_category_link(get_option('section_4')); ?>"> <?php echo get_option('section_4') == 0 ? "Section 4 Select a category" : get_cat_name(get_option('section_4')); ?> </a>
                </div>

                <div class="row">


                    <div class="col-md-6 col-sm-6">
                        <?php

                        $firstPost = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'posts_per_page' => 1,
                                'cat' => get_option('section_4'),
                            ));

                        while ($firstPost->have_posts()) : $firstPost->the_post();
                            ?>

                            <div class="leadnews">
                                <!------------Post Image------------>
                                <a href="<?php the_permalink(); ?>">
                                    <img class="lazyload middle-image"
                                         src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                         data-src="<?php the_post_thumbnail_url(); ?>"/>

                                </a>
                                <!------------Post Image------------>
                                <div class="hadding_1">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                                <div class="content-dtls">
                                    <?php echo wp_trim_words(get_the_content(), $num_words = 100, $more = ""); ?>
                                    <span style="text-align:right">
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo get_option('read_more'); ?>
                                </a></span>
                                </div>
                            </div>


                        <?php

                        endwhile;
                        ?>

                    </div>

                    <div class="col-md-6 col-sm-6">


                        <?php

                        $firstPost = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'offset' => 1,
                                'posts_per_page' => 5,
                                'cat' => get_option('section_4'),
                            ));

                        while ($firstPost->have_posts()) : $firstPost->the_post();
                            ?>


                            <div class="image-title border">
                                <!------------Post Image------------>
                                <a href="<?php the_permalink(); ?>">
                                    <img class="lazyload"
                                         src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                         data-src="<?php the_post_thumbnail_url(); ?>"/>
                                </a>
                                <!------------Post Image------------>
                                <h4 class="hadding_3">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            </div>

                        <?php

                        endwhile;
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="more-news">
                                    <a href="<?php echo get_category_link(get_option('section_4')); ?>"> <?php echo get_option('more_news') ?> </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <div class="col-md-4 col-sm-4">

                <div class="catagory-title">
                    <a href="<?php echo get_category_link(get_option('section_5')); ?>"> <?php echo get_option('section_5') == 0 ? "Section 5 Select a category" : get_cat_name(get_option('section_5')); ?> </a>
                </div>

                <?php

                $firstPost = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 1,
                        'cat' => get_option('section_5'),
                    ));

                while ($firstPost->have_posts()) : $firstPost->the_post();
                    ?>

                    <div class="middle_news">
                        <!------------Post Image------------>
                        <a href="<?php the_permalink(); ?>">
                            <img class="lazyload"
                                 src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                 data-src="<?php the_post_thumbnail_url(); ?>"/>

                        </a>
                        <!------------Post Image------------>
                        <h4 class="hadding_1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </div>


                <?php

                endwhile;
                ?>


                <?php

                $firstPost = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'offset' => 1,
                        'posts_per_page' => 2,
                        'cat' => get_option('section_5'),
                    ));

                while ($firstPost->have_posts()) : $firstPost->the_post();
                    ?>
                    <div class="image-title border">
                        <!------------Post Image------------>
                        <a href="<?php the_permalink(); ?>">
                            <img class="lazyload"
                                 src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                 data-src="<?php the_post_thumbnail_url(); ?>"/>

                            <!------------Post Image------------>
                            <h4 class="hadding_3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </div>


                <?php

                endwhile;
                ?>


                <div class="row">
                    <div class="col-md-12">
                        <div class="more-news">
                            <a href="<?php echo get_category_link(get_option('section_5')); ?>"> <?php echo get_option('more_news') ?> </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <hr/>

    <div class="section-six">

        <div class="catagory-title">
            <a href="<?php echo get_category_link(get_option('section_6')); ?>"> <?php echo get_option('section_6') == 0 ? "Section 6 Select a category" : get_cat_name(get_option('section_6')); ?> </a>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-3">


                <?php

                $firstPost = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 2,
                        'cat' => get_option('section_6'),
                    ));

                while ($firstPost->have_posts()) : $firstPost->the_post();
                    ?>


                    <div class="middle_news">
                        <!------------Post Image------------>
                        <a href="<?php the_permalink(); ?>">
                            <img class="lazyload"
                                 src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                 data-src="<?php the_post_thumbnail_url(); ?>"/>
                        </a>
                        <!------------Post Image------------>
                        <h4 class="hadding_2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h4>
                    </div>


                <?php

                endwhile;
                ?>


            </div>
            <div class="col-md-5 col-sm-5">


                <?php

                $firstPost = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'offset' => 2,
                        'posts_per_page' => 1,
                        'cat' => get_option('section_6'),
                    ));

                while ($firstPost->have_posts()) : $firstPost->the_post();
                    ?>

                    <div class="leadnews">

                        <a href="<?php the_permalink(); ?>">
                            <img class="lazyload"
                                 src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                 data-src="<?php the_post_thumbnail_url(); ?>"/>
                        </a>


                        <div class="hadding_1">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="content-dtls">
                            <?php echo wp_trim_words(get_the_content(), $num_words = 50, $more = ""); ?>
                            <a href="<?php the_permalink(); ?>"><?php echo get_option('read_more'); ?></a></span>
                        </div>

                    </div>


                <?php

                endwhile;
                ?>


            </div>
            <div class="col-md-4 col-sm-4">


                <?php

                $firstPost = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'offset' => 3,
                        'posts_per_page' => 5,
                        'cat' => get_option('section_6'),
                    ));

                while ($firstPost->have_posts()) : $firstPost->the_post();
                    ?>

                    <div class="image-title border">

                        <a href="<?php the_permalink(); ?>">
                            <img class="lazyload"
                                 src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                 data-src="<?php the_post_thumbnail_url(); ?>"/>
                        </a>

                        <!------------Post Image------------>
                        <h4 class="hadding_3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </div>


                <?php

                endwhile;
                ?>


                <div class="row">
                    <div class="col-md-12">
                        <div class="more-news">
                            <a href="<?php echo get_category_link(get_option('section_6')); ?>"> <?php echo get_option('more_news') ?> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr/>

    <div class="row">
        <div class="col-md-8 col-sm-8">

            <div class="catagory-title">
                <a href="<?php echo get_category_link(get_option('section_7')); ?>"> <?php echo get_option('section_7') == 0 ? "Section 7 Select a category" : get_cat_name(get_option('section_7')); ?> </a>
            </div>

            <div class="row">


                <div class="col-md-6 col-sm-6">
                    <?php

                    $firstPost = new WP_Query(
                        array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'posts_per_page' => 1,
                            'cat' => get_option('section_7'),
                        ));

                    while ($firstPost->have_posts()) : $firstPost->the_post();
                        ?>

                        <div class="leadnews">
                            <!------------Post Image------------>
                            <a href="<?php the_permalink(); ?>">
                                <img class="lazyload middle-image"
                                     src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                     data-src="<?php the_post_thumbnail_url(); ?>"/>

                            </a>
                            <!------------Post Image------------>
                            <div class="hadding_1">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                            <div class="content-dtls">
                                <?php echo wp_trim_words(get_the_content(), $num_words = 100, $more = ""); ?>
                                <span style="text-align:right">
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo get_option('read_more'); ?>
                                </a></span>
                            </div>
                        </div>


                    <?php

                    endwhile;
                    ?>

                </div>

                <div class="col-md-6 col-sm-6">


                    <?php

                    $firstPost = new WP_Query(
                        array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'offset' => 1,
                            'posts_per_page' => 5,
                            'cat' => get_option('section_7'),
                        ));

                    while ($firstPost->have_posts()) : $firstPost->the_post();
                        ?>


                        <div class="image-title border">
                            <!------------Post Image------------>
                            <a href="<?php the_permalink(); ?>">
                                <img class="lazyload"
                                     src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                                     data-src="<?php the_post_thumbnail_url(); ?>"/>
                            </a>
                            <!------------Post Image------------>
                            <h4 class="hadding_3">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        </div>

                    <?php

                    endwhile;
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="more-news">
                                <a href="<?php echo get_category_link(get_option('section_7')); ?>"> <?php echo get_option('more_news') ?> </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <div class="col-md-4 col-sm-4">
            <div class="catagory-title">
                <a href="<?php echo get_category_link(get_option('section_8')); ?>"> <?php echo get_option('section_8') == 0 ? "Section 8 Select a category" : get_cat_name(get_option('section_8')); ?> </a>
            </div>

            <?php

            $firstPost = new WP_Query(
                array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => 1,
                    'cat' => get_option('section_8'),
                ));

            while ($firstPost->have_posts()) : $firstPost->the_post();
                ?>


                <div class="middle_news">
                    <!------------Post Image------------>
                    <a href="<?php the_permalink(); ?>">
                        <img class="lazyload"
                             src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                             data-src="<?php the_post_thumbnail_url(); ?>"/>

                    </a>
                    <!------------Post Image------------>
                    <h4 class="hadding_1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>


            <?php

            endwhile;
            ?>


            <?php

            $firstPost = new WP_Query(
                array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'offset' => 1,
                    'posts_per_page' => 2,
                    'cat' => get_option('section_8'),
                ));

            while ($firstPost->have_posts()) : $firstPost->the_post();
                ?>
                <div class="image-title border">
                    <!------------Post Image------------>
                    <a href="<?php the_permalink(); ?>">
                        <img class="lazyload"
                             src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                             data-src="<?php the_post_thumbnail_url(); ?>"/>

                        <!------------Post Image------------>
                        <h4 class="hadding_3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>


            <?php

            endwhile;
            ?>


            <div class="row">
                <div class="col-md-12">
                    <div class="more-news">
                        <a href="<?php echo get_category_link(get_option('section_8')); ?>"> <?php echo get_option('more_news') ?> </a>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <hr/>


    <div class="row">
        <div class="col-md-4 col-sm-4">


            <div class="catagory-title">
                <a href="<?php echo get_category_link(get_option('section_9')); ?>"> <?php echo get_option('section_9') == 0 ? "Section 9 Select a category" : get_cat_name(get_option('section_9')); ?> </a>
            </div>

            <?php

            $firstPost = new WP_Query(
                array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => 1,
                    'cat' => get_option('section_9'),

                ));

            while ($firstPost->have_posts()) : $firstPost->the_post();
                ?>


                <div class="middle_news_1">
                    <!------------Post Image------------>
                    <a href="<?php the_permalink(); ?>">
                        <img class="lazyload middle-image"
                             src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                             data-src="<?php the_post_thumbnail_url(); ?>"/>
                    </a>
                    <!------------Post Image------------>
                    <h4 class="hadding_1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>


            <?php

            endwhile;
            ?>

            <?php

            $firstPost = new WP_Query(
                array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'offset' => 1,
                    'posts_per_page' => 4,
                    'cat' => get_option('section_9'),

                ));

            while ($firstPost->have_posts()) : $firstPost->the_post();
                ?>


                <div class="hadding_2 border-again">
                    <a href="<?php the_permalink(); ?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        <?php the_title(); ?></a>
                </div>

            <?php

            endwhile;
            ?>


            <div class="row">
                <div class="col-md-12">
                    <div class="more-news">
                        <a href="<?php echo get_category_link(get_option('section_9')); ?>"> <?php echo get_option('more_news') ?> </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4 col-sm-4">


            <div class="catagory-title">
                <a href="<?php echo get_category_link(get_option('section_10')); ?>"> <?php echo get_option('section_10') == 0 ? "Section 10 Select a category" : get_cat_name(get_option('section_10')); ?> </a>
            </div>

            <?php

            $firstPost = new WP_Query(
                array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => 1,
                    'cat' => get_option('section_0'),
                ));

            while ($firstPost->have_posts()) : $firstPost->the_post();
                ?>


                <div class="middle_news_1">
                    <!------------Post Image------------>
                    <a href="<?php the_permalink(); ?>">
                        <img class="lazyload middle-image"
                             src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                             data-src="<?php the_post_thumbnail_url(); ?>"/>
                    </a>
                    <!------------Post Image------------>
                    <h4 class="hadding_1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>


            <?php

            endwhile;
            ?>

            <?php

            $firstPost = new WP_Query(
                array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'offset' => 1,
                    'posts_per_page' => 4,
                    'cat' => get_option('section_10'),
                ));

            while ($firstPost->have_posts()) : $firstPost->the_post();
                ?>


                <div class="hadding_2 border-again">
                    <a href="<?php the_permalink(); ?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        <?php the_title(); ?></a>
                </div>

            <?php

            endwhile;
            ?>


            <div class="row">
                <div class="col-md-12">
                    <div class="more-news">
                        <a href="<?php echo get_category_link(get_option('section_10')); ?>"> <?php echo get_option('more_news') ?> </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4 col-sm-4">


            <div class="catagory-title">
                <a href="<?php echo get_category_link(get_option('section_11')); ?>"> <?php echo get_option('section_11') == 0 ? "Section 11 Select a category" : get_cat_name(get_option('section_11')); ?> </a>
            </div>

            <?php

            $firstPost = new WP_Query(
                array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => 1,
                    'cat' => get_option('section_11'),
                ));

            while ($firstPost->have_posts()) : $firstPost->the_post();
                ?>


                <div class="middle_news_1">
                    <!------------Post Image------------>
                    <a href="<?php the_permalink(); ?>">
                        <img class="lazyload middle-image"
                             src="<?php echo get_template_directory_uri() . '/assets/images/imageloader.png'; ?>"
                             data-src="<?php the_post_thumbnail_url(); ?>"/>
                    </a>
                    <!------------Post Image------------>
                    <h4 class="hadding_1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>


            <?php

            endwhile;
            ?>

            <?php

            $firstPost = new WP_Query(
                array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'offset' => 1,
                    'posts_per_page' => 4,
                    'cat' => get_option('section_11'),
                ));

            while ($firstPost->have_posts()) : $firstPost->the_post();
                ?>


                <div class="hadding_2 border-again">
                    <a href="<?php the_permalink(); ?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        <?php the_title(); ?></a>
                </div>

            <?php

            endwhile;
            ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="more-news">
                        <a href="<?php echo get_category_link(get_option('section_11')); ?>"> <?php echo get_option('more_news') ?> </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php get_footer(); ?>



