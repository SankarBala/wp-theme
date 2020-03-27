<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-fluid">
        <?php wp_body_open(); ?>

        <div class="row top-header">

            <div class="col-md-4 date">
                শনিবার, ২১ মার্চ ২০২০, ০৪:৪৯ অপরাহ্ন
            </div>
            <div class="col-md-4 search-box">
                <form class="example" method="get" action="/">
                    <input type="text" maxlength="64" placeholder="এখানে লিখুন.." value="" name="s">
                    <button type="submit">খুজুন</button>
                </form>
            </div>
            <div class="col-md-4">
                <div class="top-hdr-social">
                    <ul>
                        <li><a href="https://www.facebook.com/sakalerpata/" target="_blank"> <i
                                    class="fa fa-facebook"></i></li>
                        <li><a href="https://twitter.com/sakalerpata" target="_blank"> <i class="fa fa-twitter"
                                    style="color:#5DA7DA;"></i></a></li>
                        <li><a href="https://plus.google.com/u/sakalerpata/" target="_blank"> <i
                                    class="fa fa-google-plus" style="color:#D1483B;"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/sakalerpata" target="_blank"> <i
                                    class="fa fa-youtube" style="color:#C41A1E;"></i></a></li>
                        <li><a href="#" target="_blank"> <i class="fa fa-android" style="color:#A5D11C;"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-4 logo">
                    <?php
        
                    if ( has_custom_logo() ) {
                            the_custom_logo();
                    } else {
                            echo '<span class="logo-name">'. get_bloginfo( 'name' ) .'</span><br/><span class="logo-description">'. get_bloginfo( 'description' ) .'</span>';
                    }
                  ?>
                </div>
                <div class="col-md-8 col-sm-8 bannar">
                <?php
                if (is_active_sidebar('banner')) {
                    dynamic_sidebar('banner');
                }
                ?>


                </div>
            </div>
        </div>


        <nav class="navbar navbar-expand-md main-nav">
            <a class="navbar-brand d-md-none" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar1">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar1">

                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'Navmenu',
                        'depth' => 2,
                        'container'       => '',
                        'menu_class'      => 'navbar-nav',
                        'link_class' => 'okk',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                        'item_spacing'    => 'preserve',
                        'walker'          => '',

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
                <div class="col-2 text-white pt-1 marquee-text">শিরোনাম:</div>
                <div class="col-10 pt-1 marquee-data">
                    <marquee scrollamount="4px" onmouseover="this.stop()" onmouseout="this.start()">

                        <?php wp_reset_postdata(); ?>
                        <?php while ($letest->have_posts()) : $letest->the_post(); ?>
                        <i class="fa fa-square text-danger" aria-hidden="true"></i>&nbsp;
                        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>&nbsp;

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


    <div class="container-fluid pt-4">