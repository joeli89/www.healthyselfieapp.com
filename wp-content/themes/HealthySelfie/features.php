<div class="features-container" id="features" style="background-image: url('http://localhost:8888/www.healthyselfieapp.com/wp-content/uploads/2014/12/features-background1.png')">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 features">
                <h2>Main features</h2>
                
            </div>
        </div>
        <div class="row">
        	<div class="col-md-11 col-md-offset-1">
		        <div class="row">
					<?php 
						$args = array(
							'post_type' => 'features',
							'order' => 'ASC'
							);
						$query = new WP_Query($args);

						if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

				            <div class="col-xs-4 col-md-2">
				            	<a href="http://localhost:8888/www.healthyselfieapp.com/features#<?php the_field('scroll_to'); ?>" class="float-shadow">
				            		<div class="feature-icn">
				            			<img src="<?php the_field('feature_icon'); ?>" alt="Healthy Selfie App, track and monitor your bodys progression through taking selfies, with our new iOS mobile application." />
				            		</div>
				            	</a>
				                <h4><?php the_field('feature_title'); ?></h4>
				                <p>
				                	<?php the_field('short_description'); ?>
				                </p>
				            </div>

			        <?php endwhile; endif; wp_reset_postdata();?>
		        </div>
		    </div>
	    </div>
    </div>
</div>
