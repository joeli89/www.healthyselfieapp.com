<?php get_header(); ?>

<!-- Features -->
<?php get_template_part('features'); ?>


<?php 
	$args = array(
		'post_type' => 'features',
		'order' => 'ASC'
		);
	$query = new WP_Query($args);

	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

    <!-- Single feature -->
    <div class="single-feature-container" id="<?php the_field('scroll_to'); ?>" style="background-color: <?php the_field('background_colour');?>; color: <?php the_field('font_colour'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 single-feature-text">
                	<h2><?php the_field('feature_title'); ?></h2>
                    <p>
                    	<?php the_field('description'); ?>
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div class="featured-slider">
    	<?php the_field('slider'); ?>
   	</div>
   	<!-- <div class="features-image bg-color-orange">
   		<img src="assets/img/index/healthy_selfie_home.png">
   	</div> -->

   	<?php endwhile; endif; wp_reset_postdata();?>




<?php get_footer(); ?>