<?php get_header(); ?>

<?php if( !dynamic_sidebar('blo-slider')): ?>
  	<img src="http://localhost:8888/www.healthyselfieapp.com/wp-content/uploads/2014/12/products-slider.png" class="img-responsive">
<?php endif; ?>

<section id="blog-page">

  <div class="container">

    <div class="row blog">

    	<div class="col-sm-12 col-md-12">
	      	<h3><?php wp_title(''); ?></h3>
	    </div>

	    <!-- === 1st COLUMN === -->
	      	<div class="col-sm-12 col-md-9">
		      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	      		<div class="row blog-item ">

						<div class="media col-xs-12 col-md-2">
							<div class="calendar-date">
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="eventBlockCalendar">
                                    <tr>
                                        <td align="center" valign="top" class="eventBlockMonth">
                                            <?php the_time('F'); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top" class="eventBlockDay">
                                        <?php the_time('j'); ?>
                                        </td>
                                    </tr>
	                            </table>
                            </div> <!-- end calendar date -->
                            <div class="big-avatar text-centerr">
                            	<?php echo get_avatar( get_the_author_meta('ID')); ?>
                       		</div>
                       		<div class="big-author text-center">
                       			<h4>by <?php the_author_posts_link(); ?></h4>
                       		</div>
						</div>

						<div class="media-body col-xs-10">
							<div class="posts">
								<a class="media-left media-middle" href="<?php the_permalink(); ?>">
								<?php if( get_the_post_thumbnail() ): ?>
									<?php the_post_thumbnail('large'); ?>
									<?php endif; ?>
								</a>
								<a href="<?php the_permalink(); ?>"><h4 class="media-heading"><?php the_title(); ?></h4></a>
									<p class="about-post">
										<?php echo get_avatar( get_the_author_meta('ID'), 24 ); ?> by <?php the_author_posts_link(); ?> | 
										<i class="ion-ios7-calendar-outline"></i> <?php the_time('F j, Y'); ?> | 
										<i class="ion-ios7-pricetags"></i> <?php the_category( ', ' ); ?>
									</p>
								<p class="excerpt">
									<?php echo strip_tags( get_the_excerpt()); ?>
								</p>
								<a href="<?php the_permalink(); ?>">
									<button class="btn btn-default">VIEW</button>
								</a>
							</div>
						</div>
						</div>	
					<?php endwhile; endif; ?>

	      	</div> <!-- end col-md-9 -->

	     <!-- === 2nd COLUMN === -->
	      	<?php 
	     		get_sidebar();
	     	?>



    </div> <!-- end row -->

  </div><!--  end container -->
</section> <!-- end section  -->





<?php get_footer(); ?>