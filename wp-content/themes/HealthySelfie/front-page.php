<?php get_header(); ?>


       <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                    	<?php 
							$args = array(
			                'post_type' => 'home'
			              );
			              $query = new WP_Query($args);

			              if( $query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>

	                        <div class="col-sm-7 text" itemscope itemtype="http://schema.org/MobileApplication">
	                        	<div class="logo animated bounceIn delay-1 hover-shadow">
	                        		<a href="index.php"><?php the_post_thumbnail('large'); ?></a>

	                        	</div>
	                            <h2 class="animated slideInUp delay-1"><?php the_field('title') ?><br> <span class="animated fadeInUp delay-3"><?php the_field('sub_title') ?></span></h2>
	                            <div class="description">
	                            	<p><?php the_field('caption') ?></p>
	                            </div>
	                            
	                            <div class="top-button">
	                            	<a class="button-1" href="#"><h5><i class="fa fa-apple"></i> Coming Jan '15</h5></a>
	                            </div>

	                            <a href="http://localhost:8888/www.healthyselfieapp.com/features/" >
	                            	<div class="top-arrow">
	                            		<i class="fa fa-chevron-down"></i>
	                            	</div>
	                            </a>
	                        </div>
	                        <div class="col-sm-5 phone" itemscope itemtype="http://schema.org/MobileApplication">
	                        	<?php if( have_posts() ) : while(have_posts() ) : the_post();  ?>

			                     <?php the_content(); ?>

			                  <?php endwhile;endif; ?>
	                        </div>

	                    <?php endwhile; endif; wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features -->
        <?php get_template_part('features'); ?>

        <!-- Subscription form -->
        <?php get_template_part( 'subscribe' ); ?>

    <!-- ==== BLOG ==== -->
    <section class="blog" id="blog">
      <div class="container">

       	<div class="col-md-4">
       		<h3 class="text-center"><i class="ion-ios-chatbubble"></i></h3>
      		<?php if( !dynamic_sidebar('bloghomepage')): ?>
      			<p>Please add widgets via the admin area.</p>
      		<?php endif; ?>
      	</div>
      	<div class="col-md-4">
       		<h3 class="text-center"><i class="ion-social-instagram"></i></h3>
      		<?php if( !dynamic_sidebar('instagram')): ?>
      			<p>Please add widgets via the admin area.</p>
      		<?php endif; ?>
      	</div>
      	<div class="col-md-4 twitter text-center">
      		<h3><i class="ion-social-twitter"></i></h3>
      		<?php if( !dynamic_sidebar('twitterfeed')): ?>
      			<p>Please add widgets via the admin area.</p>
      		<?php endif; ?>
      	</div>


      </div> <!-- end of container -->

    </section>
<!-- ======= END OF BLOG ========= -->


<?php get_footer(); ?>