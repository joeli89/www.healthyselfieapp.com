<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

       <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg about-head">
                <div class="container">
                    <div class="row">
                    	
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
        </div>

                      <!-- Who's behind this -->
        <div class="whos-behind-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 whos-behind">
	                    <h1>Meet The Team</h1>
	                </div>
	            </div>
	            <div class="row">
	            	<?php 

	            	$args = array(
	            		'post_type' => 'team'
	            		);
	            	$query = new WP_Query($args);

	            	if( $query->have_posts()) : while($query->have_posts()) : $query->the_post();
	            		
	            	?>

	                <div class="col-md-6 whos-behind-box-1">
	                	<div class="whos-behind-photo">
	                		<?php if( get_field('profile_image') ): ?>

			                     <img class="animated slideInDown" src="<?php the_field('profile_image'); ?>" itemprop="screenshot">

			                  <?php endif; ?>
	                		<div class="whos-behind-social">
	                			<a href="<?php the_field('facebook_link'); ?>"><i class="fa fa-facebook"></i></a>
	                			<a href="<?php the_field('instagram_link'); ?>"><i class="fa fa-instagram"></i></a>
	                			<a href="<?php the_field('email'); ?>"><i class="fa fa-envelope"></i></a>
	                		</div>
	                	</div>
	                    <h4><?php the_field('name'); ?></h4>
	                    <h5><?php the_field('position'); ?></h5>

						<!-- Button trigger modal -->
						<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#<?php the_field('target'); ?>">
						  about me
						</button>

						<!-- Modal -->
						<div class="modal fade" id="<?php the_field('target'); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">About me</h4>
						      </div>
						      <div class="modal-body">
						        <p>
						        	<?php the_field('about'); ?>
								</p>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						      </div>
						    </div>
						  </div>
						</div>

	                </div>
					<?php 
					  endwhile; endif; wp_reset_postdata();
					?>
	            </div>

	        </div>
	    </div>

                        <!-- Single feature -->
        <div class="single-feature-container single-feature-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 single-feature-text why">
	                    <?php the_content(); ?>
	                </div>
	            </div>
	        </div>
        </div>






	<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<!-- Subscription form -->
<?php get_template_part( 'subscribe' ); ?>

<?php get_footer(); ?>