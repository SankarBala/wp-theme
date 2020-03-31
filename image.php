
			<?php
				
			while ( have_posts() ) :
                the_post();
                
				?>
                <img style="width: 100%; height: auto"
                   src="<?php echo wp_get_attachment_image_src( get_the_ID(), false )[0] ?>"
                  />

                </a>

			<?php
				
				endwhile;
			?>

	