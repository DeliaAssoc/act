<?php 

function testimonials_slider_module() { ?>
	<section class="testimonials slider-module p60" style="background-image: url( '<?php the_field( 'testimonials_slider_background_image', 'options' ); ?>' );">
		<div class="constrain">
			<div class="heading-content">
				<?php the_field( 'testimonials_slider_heading_content', 'options' ); ?>
			</div>
			<div class="t-slider">
				<?php
					// WP_Query arguments
					$args = array(
						'post_type' => array( 'testimonial' ),
					);

					// The Query
					$query = new WP_Query( $args );

					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post(); ?>
							
							<div class="slide">
								<?php the_content(); ?>
								<div class="t-date">
									~ <?php the_field( 'testimonial_date' ); ?>
								</div>
							</div>

						<?php }
					} else {
						// no posts found
					}

					// Restore original Post Data
					wp_reset_postdata();
				?>
			</div><!-- .tslider -->
		</div><!-- .constrain -->
	</section>
 <?php }