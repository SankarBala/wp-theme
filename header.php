<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
    <?php wp_body_open(); ?>

    <div class="row top-header">

        <div class="col-lg-4 date">
            <?php echo do_shortcode('[bangla_day]'); ?>,
            <?php echo do_shortcode('[english_date]'); ?>
        </div>
        <div class="col-lg-5 search-box">
            <form class="example" method="get" action="<?php echo get_home_url(); ?>">
                <input type="text" maxlength="64" placeholder="এখানে লিখুন.." value="" name="s"/>
                <button type="submit">খুজুন</button>
            </form>
        </div>
        <div class="col-lg-3">
            <div class="top-hdr-social">
                <ul>
                    <li><a href="<?php echo get_option('fb_link'); ?>" target="_blank"> <i
                                    class="fa fa-facebook"></i></li>
                    <li><a href="<?php echo get_option('tw_link'); ?>" target="_blank"> <i class="fa fa-twitter"
                                                                                      style="color:#5DA7DA;"></i></a>
                    </li>
                    <li><a href="<?php echo get_option('ig_link'); ?>" target="_blank"> <i
                                    class="fa fa-instagram" style="color:#D1483B;"></i></a></li>
                    <li><a href="<?php echo get_option('yt_link'); ?>" target="_blank"> <i
                                    class="fa fa-youtube" style="color:#C41A1E;"></i></a></li>
                </ul>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 logo">
                <?php

                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    echo '<span class="logo-name">' . get_bloginfo('name') . '</span><br/><span class="logo-description">' . get_bloginfo('description') . '</span>';
                }
                ?>
            </div>
            <div class="col-md-8 col-sm-8 bannar">
                <?php if (has_header_image()) { ?>
                    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
                         width="<?php echo get_custom_header()->width; ?>" alt=""/>
                <?php } ?>
                <?php echo get_custom_header()->text;?>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-md main-nav">
        <a class="navbar-brand d-md-none ml-2  text-info" href="<?php echo get_bloginfo('url') ?>"><?php echo bloginfo() ?></a>
        <button class="navbar-toggler float-right m-1" type="button" data-toggle="collapse" data-target="#collapsibleNavbar1">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar1">

            <?php
            wp_nav_menu(array(
                'theme_location' => 'Navmenu',
                'depth' => 3,
                'container' => '',
                'menu_class' => 'navbar-nav',
                'link_class' => 'okk',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                'item_spacing' => 'preserve',
                'walker' => '',

            ));
            ?>
        </div>
    </nav>


    <?php
    $letest = new WP_Query(
        array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 10,
        ));


    if ($letest->have_posts()) :
    ?>

    <div class="container-fluid mt-2">
        <div class="row">

            <div class="col pt-1 marquee-data">
                <div class="text-dark pl-0 pr-2 pt-0 marquee-text position-absolute headlines">শিরোনাম:</div>
                <marquee scrollamount="4px" onmouseover="this.stop()" onmouseout="this.start()">

                    <?php wp_reset_postdata(); ?>
                    <?php while ($letest->have_posts()) : $letest->the_post(); ?>
                        <i class="fa fa-square text-dark" aria-hidden="true"></i>&nbsp;
                        <a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>&nbsp;

                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>


                </marquee>


            </div>
        </div>
    </div>
</div>

<?php
endif;
?>
</div>


<div class="container pt-4">