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
			<img  class="lazyload img-thumbnail mb-2" width="100%"
			 data-src="<?php the_post_thumbnail_url(); ?>"
           src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
            alt=""/>
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
				   <img  class="lazyload img-bordered mb-3" width="100%"  height="150px" 
				   data-src="<?php the_post_thumbnail_url(); ?>"
				   src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>"
				   alt="">
				   <span class="hadding_2 mb-2"><a class="recent-two" href="<?php the_permalink();?>"> <?php the_title();?> </a></span></br>
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
							<li id="tab1" role="presentation" class="col-6 text-center active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="true">সর্বশেষ আপডেট</a></li>
							<li id="tab2" role="presentation" class="col-6 text-center"><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="false">জনপ্রিয় সংবাদ</a></li>
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
										data-src="<?php the_post_thumbnail_url(); ?>"
										alt="<?php the_title();?>"
										title="<?php the_title();?>"
										/>
										
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
	                                     
																														
										<div class="small-img tab-border">
	                                        <span>২</span>									
											<!------------Post Image------------>
							    <a href="https://newssitedesign.com/newsfresh/archives/462">
							    									<img class="lazyload" src="https://newssitedesign.com/newsfresh/wp-content/uploads/2020/01/0002.jpg" data-src="https://newssitedesign.com/newsfresh/wp-content/uploads/2020/01/0002.jpg" alt="পদ্মা সেতুতে বসল ২২তম স্প্যান, দৃশ্যমান ৩৩০০ মিটার" title="পদ্মা সেতুতে বসল ২২তম স্প্যান, দৃশ্যমান ৩৩০০ মিটার">
										
																			</a>
							    <!------------Post Image------------>
	                                        <h4 class="hadding_3"><a href="https://newssitedesign.com/newsfresh/archives/462">পদ্মা সেতুতে বসল ২২তম স্প্যান, দৃশ্যমান ৩৩০০ মিটার </a></h4> 
	                                    </div>
										
							
											                                    
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
										$i =1;
										
										while ($firstPost->have_posts()) : $firstPost->the_post();    
										?>

                                       <div class="col-md-4 pb-2">
										   
							    <a href="<?php the_permalink();?>">
									<img class="lazyload img-bordered middle-image"
									 src="<?php echo get_template_directory_uri().'/assets/images/imageloader.png'; ?>" 
									 data-src="<?php the_post_thumbnail_url(); ?>"
									 
									  />
										</a>
										
									<h4 class="hadding_2"><a href="<?php the_permalink();?>"> <?php the_title();?>	</a> </h4>	
									   </div>

										<?php
										
		
											endwhile;
										?>
	</div>
</div>
	<div class="col-md-4">
	<div class="add_01">
							<div class="widget_area">			<div class="textwidget"></div>
		</div>						</div>
						
												
							<div class="facebook_title"><a href="#">ফেসবুকে আমরা...</a></div>
							<div class="fb-root">
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>
								<div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/themesbazar" data-tabs="timeline" data-width="390" data-height="420" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=360&amp;height=420&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fthemesbazar&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=true&amp;tabs=timeline&amp;width=390"><span style="vertical-align: bottom; width: 360px; height: 420px;"><iframe name="f3737ff2d7a3b94" width="390px" height="420px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.5/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D46%23cb%3Df32fa5eab54e49%26domain%3Dnewssitedesign.com%26origin%3Dhttps%253A%252F%252Fnewssitedesign.com%252Ff342093cbd825d8%26relation%3Dparent.parent&amp;container_width=360&amp;height=420&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fthemesbazar&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=true&amp;tabs=timeline&amp;width=390" style="border: none; visibility: visible; width: 360px; height: 420px;" class=""></iframe></span></div>
							</div>	
							
																			   
						   
					   							<div class="archive_calender_sec">
								<div class="archive_title">পুরাতন খবর</div>
								 <form class="example" method="get" action="https://newssitedesign.com/newsfresh/">
									<input type="text" id="datepicker" autocomplete="off" maxlength="64" placeholder="তারিখ সিলেক্ট করুন" value="" name="m" required="" class="hasDatepicker">
									<button type="submit">খুজুন</button>
								</form>
							</div>
								
											
	</div>
</div>
<hr/>




<?php get_footer(); ?>