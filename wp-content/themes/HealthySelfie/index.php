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
	                            	<a class="button-1 curl-top-right" href="#subscribe" title="Subscribe for updates!"><i class="fa fa-apple"></i> Coming Jan '15</a>
	                            </div>

	                            <a href="#features" >
	                            	<div class="top-arrow">
	                            		<i class="fa fa-chevron-down"></i>
	                            	</div>
	                            </a>
	                        </div>
	                        <div class="col-sm-5 phone" itemscope itemtype="http://schema.org/MobileApplication">
	                        	<?php if( get_field('head_image') ): ?>

			                     <img class="animated slideInRight" src="<?php the_field('head_image'); ?>" itemprop="screenshot">

			                  <?php endif; ?>
	                        </div>

	                    <?php endwhile; endif; wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include('inc/features.php'); ?>

        <!-- Subscription form -->
        <?php include("inc/subscription.php"); ?>


<?php get_footer(); ?>