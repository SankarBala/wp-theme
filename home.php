<?php get_header(); ?>

<div class="row">
    <div class="col-md-5 text-justify">
        <?php wp_reset_postdata();  ?>

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
            src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>" alt="" />
        <h4>
            <?php
              the_title();?>
        </h4>
        <?php
             echo wp_trim_words(get_the_content(), $num_words = 38, $more=""); 
             ?>
        <a href="<?php the_permalink();?>"> বিস্তারিত</a>
        <?php

            endwhile;
        ?>
    </div>
    <div class="col-md-3">
        <div class="row pb-4">
            <?php wp_reset_postdata();  ?>

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
                    src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>" alt="">
                <span class="hadding_2 mb-2"><a class="recent-two" href="<?php the_permalink();?>"> <?php the_title();?>
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
                <li id="tab1" role="presentation" class="col-6 text-center active"><a href="#tab21"
                        aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="true">সর্বশেষ আপডেট</a></li>
                <li id="tab2" role="presentation" class="col-6 text-center"><a href="#tab22" aria-controls="tab22"
                        role="tab" data-toggle="tab" aria-expanded="false">জনপ্রিয় সংবাদ</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content ">
                <div role="tabpanel" class="tab-pane active in" id="tab21">

                    <div class="news-titletab">

                        <?php wp_reset_postdata();  ?>

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
								$i =1;
								
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
                <div class="news-titletab">

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
                            'month' => $today['mon'],
                            'day'   => $today['mday']
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


    </div>

</div>
<hr />
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
										$i =1;
										
										while ($firstPost->have_posts()) : $firstPost->the_post();    
										?>

            <div class="col-md-4 pb-2">

                <a href="<?php the_permalink();?>">
                    <img class="lazyload img-bordered middle-image"
                        src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                        data-src="<?php the_post_thumbnail_url(); ?>" />
                </a>

                <h4 class="hadding_2"><a href="<?php the_permalink();?>"> <?php the_title();?> </a> </h4>
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


        <div class="facebook_title"><a href="#">ফেসবুকে আমরা...</a></div>
        <div class="fb-root">
        <?php
                if (is_active_sidebar('facebook-page')) {
                    dynamic_sidebar('facebook-page');
                }
                ?>
        </div>



        <div class="archive_calender_sec">
            <div class="archive_title">পুরাতন খবর</div>
            <form class="example" method="get" action="https://newssitedesign.com/newsfresh/">
                <input type="text" id="datepicker" autocomplete="off" maxlength="64" placeholder="তারিখ সিলেক্ট করুন"
                    value="" name="m" required="" class="hasDatepicker">
                <button type="submit">খুজুন</button>
            </form>
        </div>


    </div>
</div>
<hr />


<div class="section-three">
    <div class="row">
        <div class="col-md-8 col-sm-8">

            <div class="catagory-title">
                <a href="<?php echo get_category_link(get_cat_ID('জাতীয়')); ?>"> জাতীয় </a>
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
				'category_name' => 'জাতীয়',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>

                    <div class="leadnews">
                        <!------------Post Image------------>
                        <a href="<?php the_permalink();?>">
                            <img class="lazyload middle-image"
                                src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                                data-src="<?php the_post_thumbnail_url(); ?>" />

                        </a>
                        <!------------Post Image------------>
                        <div class="hadding_1">
                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
                        </div>
                        <div class="content-dtls">
                            <?php echo wp_trim_words(get_the_content(), $num_words = 100, $more="");?>
                            <span style="text-align:right">
                                <a href="<?php the_permalink();?>">
                                    বিস্তারিত...
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
				'category_name' => 'জাতীয়',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>


                    <div class="image-title border">
                        <!------------Post Image------------>
                        <a href="<?php the_permalink();?>">
                            <img class="lazyload"
                                src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                                data-src="<?php the_post_thumbnail_url(); ?>" />
                        </a>
                        <!------------Post Image------------>
                        <h4 class="hadding_3">
                            <a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    </div>

                    <?php
		
					endwhile;
				?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="more-news">
                                <a href="<?php echo get_category_link(get_cat_ID('জাতীয়')); ?>"> আরো খবর <i
                                        class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>





        <div class="col-md-4 col-sm-4">

            <div class="catagory-title">
                <a href="<?php echo get_category_link(get_cat_ID('আন্তর্জাতিক')); ?>"> আন্তর্জাতিক </a>
            </div>


            <?php
                
				$firstPost = new WP_Query(
					array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'orderby' => 'date',
				'order' => 'DESC',
				'posts_per_page' => 1,
				'category_name' => 'আন্তর্জাতিক',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>


            <div class="middle_news">
                <!------------Post Image------------>
                <a href="<?php the_permalink();?>">
                    <img class="lazyload"
                        src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                        data-src="<?php the_post_thumbnail_url(); ?>" />

                </a>
                <!------------Post Image------------>
                <h4 class="hadding_1"><a href="<?php the_permalink();?>"><?php the_title();?></a> </h4>
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
				'category_name' => 'আন্তর্জাতিক',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>
            <div class="image-title border">
                <!------------Post Image------------>
                <a href="<?php the_permalink();?>">
                    <img class="lazyload"
                        src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                        data-src="<?php the_post_thumbnail_url(); ?>" />

                    <!------------Post Image------------>
                    <h4 class="hadding_3"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
            </div>



            <?php
		
					endwhile;
				?>




            <div class="row">
                <div class="col-md-12">
                    <div class="more-news">
                        <a href="<?php echo get_category_link(get_cat_ID('আন্তর্জাতিক')); ?>"> আন্তর্জাতিক </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<hr />


<div class="section-six">

    <div class="catagory-title">
        <a href="<?php echo get_category_link(get_cat_ID('খেলাধুলা')); ?>"> খেলাধুলা </a>
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
				'category_name' => 'খেলাধুলা',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>


            <div class="middle_news">
                <!------------Post Image------------>
                <a href="<?php the_permalink();?>">
                    <img class="lazyload "
                        src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                        data-src="<?php the_post_thumbnail_url(); ?>" />
                </a>
                <!------------Post Image------------>
                <h4 class="hadding_2"><a href="<?php the_permalink();?>"><?php the_title();?></h4>
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
				'offset'=> 2,
				'posts_per_page' => 1,
				'category_name' => 'খেলাধুলা',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>

            <div class="leadnews">

                <a href="<?php the_permalink();?>">
                    <img class="lazyload"
                        src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                        data-src="<?php the_post_thumbnail_url(); ?>" />
                </a>


                <div class="hadding_1">
                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                </div>
                <div class="content-dtls">
                    <?php echo wp_trim_words(get_the_content(), $num_words = 50, $more="");?>
                    <span style="text-align:right">
                        <a href="<?php the_permalink();?>">বিস্তারিত...</a></span>
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
				'offset'=> 3,
				'posts_per_page' => 5,
				'category_name' => 'খেলাধুলা',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>

            <div class="image-title border">

                <a href="<?php the_permalink();?>">
                    <img class="lazyload"
                        src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                        data-src="<?php the_post_thumbnail_url(); ?>" />
                </a>

                <!------------Post Image------------>
                <h4 class="hadding_3"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
            </div>



            <?php
		
					endwhile;
				?>





            <div class="row">
                <div class="col-md-12">
                    <div class="more-news">
                        <a
                            href="https://newssitedesign.com/newsfresh/archives/category/%e0%a6%ac%e0%a6%bf%e0%a6%a8%e0%a7%8b%e0%a6%a6%e0%a6%a8">
                            আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
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
                <a href="<?php echo get_category_link(get_cat_ID('রাজনীতি')); ?>"> রাজনীতি </a>
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
				'category_name' => 'রাজনীতি',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>

                    <div class="leadnews">
                        <!------------Post Image------------>
                        <a href="<?php the_permalink();?>">
                            <img class="lazyload middle-image"
                                src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                                data-src="<?php the_post_thumbnail_url(); ?>" />

                        </a>
                        <!------------Post Image------------>
                        <div class="hadding_1">
                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
                        </div>
                        <div class="content-dtls">
                            <?php echo wp_trim_words(get_the_content(), $num_words = 100, $more="");?>
                            <span style="text-align:right">
                                <a href="<?php the_permalink();?>">
                                    বিস্তারিত...
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
				'category_name' => 'রাজনীতি',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>


                    <div class="image-title border">
                        <!------------Post Image------------>
                        <a href="<?php the_permalink();?>">
                            <img class="lazyload"
                                src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                                data-src="<?php the_post_thumbnail_url(); ?>" />
                        </a>
                        <!------------Post Image------------>
                        <h4 class="hadding_3">
                            <a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    </div>

                    <?php
		
					endwhile;
				?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="more-news">
                                <a href="<?php echo get_category_link(get_cat_ID('রাজনীতি')); ?>"> আরো খবর <i
                                        class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>





        <div class="col-md-4 col-sm-4">

            <div class="catagory-title">
                <a href="<?php echo get_category_link(get_cat_ID('তথ্যপ্রযুক্তি')); ?>"> তথ্যপ্রযুক্তি </a>
            </div>


            <?php
                
				$firstPost = new WP_Query(
					array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'orderby' => 'date',
				'order' => 'DESC',
				'posts_per_page' => 1,
				'category_name' => 'তথ্যপ্রযুক্তি',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>


            <div class="middle_news">
                <!------------Post Image------------>
                <a href="<?php the_permalink();?>">
                    <img class="lazyload"
                        src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                        data-src="<?php the_post_thumbnail_url(); ?>" />

                </a>
                <!------------Post Image------------>
                <h4 class="hadding_1"><a href="<?php the_permalink();?>"><?php the_title();?></a> </h4>
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
				'category_name' => 'তথ্যপ্রযুক্তি',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>
            <div class="image-title border">
                <!------------Post Image------------>
                <a href="<?php the_permalink();?>">
                    <img class="lazyload"
                        src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                        data-src="<?php the_post_thumbnail_url(); ?>" />

                    <!------------Post Image------------>
                    <h4 class="hadding_3"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
            </div>



            <?php
		
					endwhile;
				?>




            <div class="row">
                <div class="col-md-12">
                    <div class="more-news">
                        <a href="<?php echo get_category_link(get_cat_ID('তথ্যপ্রযুক্তি')); ?>"> তথ্যপ্রযুক্তি </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<hr />

<div class="section-six">

    <div class="catagory-title">
        <a href="<?php echo get_category_link(get_cat_ID('বিনোদন')); ?>"> বিনোদন </a>
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
				'category_name' => 'বিনোদন',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>


            <div class="middle_news">
                <!------------Post Image------------>
                <a href="<?php the_permalink();?>">
                    <img class="lazyload"
                        src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                        data-src="<?php the_post_thumbnail_url(); ?>" />
                </a>
                <!------------Post Image------------>
                <h4 class="hadding_2"><a href="<?php the_permalink();?>"><?php the_title();?></h4>
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
				'offset'=> 2,
				'posts_per_page' => 1,
				'category_name' => 'বিনোদন',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>

            <div class="leadnews">

                <a href="<?php the_permalink();?>">
                    <img class="lazyload"
                        src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                        data-src="<?php the_post_thumbnail_url(); ?>" />
                </a>


                <div class="hadding_1">
                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                </div>
                <div class="content-dtls">
                    <?php echo wp_trim_words(get_the_content(), $num_words = 50, $more="");?>
                    <span style="text-align:right">
                        <a href="<?php the_permalink();?>">বিস্তারিত...</a></span>
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
				'offset'=> 3,
				'posts_per_page' => 5,
				'category_name' => 'বিনোদন',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>

            <div class="image-title border">

                <a href="<?php the_permalink();?>">
                    <img class="lazyload"
                        src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                        data-src="<?php the_post_thumbnail_url(); ?>" />
                </a>

                <!------------Post Image------------>
                <h4 class="hadding_3"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
            </div>



            <?php
		
					endwhile;
				?>





            <div class="row">
                <div class="col-md-12">
                    <div class="more-news">
                        <a
                            href="https://newssitedesign.com/newsfresh/archives/category/%e0%a6%ac%e0%a6%bf%e0%a6%a8%e0%a7%8b%e0%a6%a6%e0%a6%a8">
                            আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
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
                <a href="<?php echo get_category_link(get_cat_ID('ঢাকা')); ?>"> ঢাকা বিভাগ </a>
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
				'category_name' => 'ঢাকা',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>

                    <div class="leadnews">
                        <!------------Post Image------------>
                        <a href="<?php the_permalink();?>">
                            <img class="lazyload middle-image"
                                src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                                data-src="<?php the_post_thumbnail_url(); ?>" />

                        </a>
                        <!------------Post Image------------>
                        <div class="hadding_1">
                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
                        </div>
                        <div class="content-dtls">
                            <?php echo wp_trim_words(get_the_content(), $num_words = 100, $more="");?>
                            <span style="text-align:right">
                                <a href="<?php the_permalink();?>">
                                    বিস্তারিত...
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
				'category_name' => 'ঢাকা',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>


                    <div class="image-title border">
                        <!------------Post Image------------>
                        <a href="<?php the_permalink();?>">
                            <img class="lazyload"
                                src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                                data-src="<?php the_post_thumbnail_url(); ?>" />
                        </a>
                        <!------------Post Image------------>
                        <h4 class="hadding_3">
                            <a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    </div>

                    <?php
		
					endwhile;
				?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="more-news">
                                <a href="<?php echo get_category_link(get_cat_ID('ঢাকা')); ?>"> আরো খবর <i
                                        class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>





        <div class="col-md-4 col-sm-4">

            <div class="catagory-title">
                <a href="<?php echo get_category_link(get_cat_ID('রাজশাহী')); ?>"> রাজশাহী বিভাগ </a>
            </div>


            <?php
                
				$firstPost = new WP_Query(
					array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'orderby' => 'date',
				'order' => 'DESC',
				'posts_per_page' => 1,
				'category_name' => 'রাজশাহী',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>


            <div class="middle_news">
                <!------------Post Image------------>
                <a href="<?php the_permalink();?>">
                    <img class="lazyload"
                        src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                        data-src="<?php the_post_thumbnail_url(); ?>" />

                </a>
                <!------------Post Image------------>
                <h4 class="hadding_1"><a href="<?php the_permalink();?>"><?php the_title();?></a> </h4>
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
				'category_name' => 'রাজশাহী',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>
            <div class="image-title border">
                <!------------Post Image------------>
                <a href="<?php the_permalink();?>">
                    <img class="lazyload"
                        src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                        data-src="<?php the_post_thumbnail_url(); ?>" />

                    <!------------Post Image------------>
                    <h4 class="hadding_3"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
            </div>



            <?php
		
					endwhile;
				?>




            <div class="row">
                <div class="col-md-12">
                    <div class="more-news">
                        <a href="<?php echo get_category_link(get_cat_ID('রাজশাহী')); ?>"> আরও খবর <i
                                        class="fa fa-angle-double-right" aria-hidden="true"></i>  </a>
                    </div>
                </div>
            </div>

        </div>
	</div>
	
<hr />


<div class="row">
    <div class="col-md-4 col-sm-4">


        <div class="catagory-title">
            <a href="<?php echo get_category_link(get_cat_ID('খুলনা')); ?>"> খুলনা বিভাগ </a>
        </div>

        <?php
                
				$firstPost = new WP_Query(
					array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'orderby' => 'date',
				'order' => 'DESC',
				'posts_per_page' => 1,
				'category_name' => 'খুলনা',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>


        <div class="middle_news_1">
            <!------------Post Image------------>
            <a href="<?php the_permalink();?>">
                <img class="lazyload middle-image"
                    src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                    data-src="<?php the_post_thumbnail_url(); ?>" />
            </a>
            <!------------Post Image------------>
            <h4 class="hadding_1"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
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
				'offset'=>1,
				'posts_per_page' => 4,
				'category_name' => 'খুলনা',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>


        <div class="hadding_2 border-again">
            <a href="<?php the_permalink();?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                <?php the_title();?></a>
        </div>

        <?php
        
        endwhile;
		?>


        <div class="row">
            <div class="col-md-12">
                <div class="more-news">
                    <a
					href="<?php echo get_category_link(get_cat_ID('খুলনা')); ?>">  আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-4 col-sm-4">


        <div class="catagory-title">
            <a href="<?php echo get_category_link(get_cat_ID('বরিশাল')); ?>"> বরিশাল বিভাগ </a>
        </div>

        <?php
                
				$firstPost = new WP_Query(
					array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'orderby' => 'date',
				'order' => 'DESC',
				'posts_per_page' => 1,
				'category_name' => 'বরিশাল',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>


        <div class="middle_news_1">
            <!------------Post Image------------>
            <a href="<?php the_permalink();?>">
                <img class="lazyload middle-image"
                    src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                    data-src="<?php the_post_thumbnail_url(); ?>" />
            </a>
            <!------------Post Image------------>
            <h4 class="hadding_1"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
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
				'offset'=>1,
				'posts_per_page' => 4,
				'category_name' => 'বরিশাল',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>


        <div class="hadding_2 border-again">
            <a href="<?php the_permalink();?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                <?php the_title();?></a>
        </div>

        <?php
        
        endwhile;
		?>


        <div class="row">
            <div class="col-md-12">
                <div class="more-news">
                    <a
						href="<?php echo get_category_link(get_cat_ID('বরিশাল')); ?>">
                        আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-4 col-sm-4">


        <div class="catagory-title">
            <a href="<?php echo get_category_link(get_cat_ID('চট্টগ্রাম')); ?>"> চট্টগ্রাম বিভাগ </a>
        </div>

        <?php
                
				$firstPost = new WP_Query(
					array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'orderby' => 'date',
				'order' => 'DESC',
				'posts_per_page' => 1,
				'category_name' => 'চট্টগ্রাম',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>


        <div class="middle_news_1">
            <!------------Post Image------------>
            <a href="<?php the_permalink();?>">
                <img class="lazyload middle-image"
                    src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
                    data-src="<?php the_post_thumbnail_url(); ?>" />
            </a>
            <!------------Post Image------------>
            <h4 class="hadding_1"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
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
				'offset'=>1,
				'posts_per_page' => 4,
				'category_name' => 'চট্টগ্রাম',
				));
		
				while ($firstPost->have_posts()) : $firstPost->the_post();    
				   ?>


        <div class="hadding_2 border-again">
            <a href="<?php the_permalink();?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                <?php the_title();?></a>
        </div>

        <?php
        
        endwhile;
		?>


        <div class="row">
            <div class="col-md-12">
                <div class="more-news">
                    <a
					href="<?php echo get_category_link(get_cat_ID('চট্টগ্রাম')); ?>">
                        আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>