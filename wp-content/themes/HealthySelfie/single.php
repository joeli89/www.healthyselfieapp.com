<?php get_header(); ?>

<section class="blog">
<div class="container">


  	<?php 
 		get_sidebar();
 	?>

    <div class="col-md-9">

    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    		<div class="single-body">
		    	<h3 class="text-center"><?php the_title();?></h3>
					<p class="about-post text-center">
						<?php echo get_avatar( get_the_author_meta('ID'), 24, array('class'=>'img-circle') ); ?> by <?php the_author_posts_link(); ?> | 
						<i class="ion-ios7-calendar-outline"></i> <?php the_time('F j, Y'); ?> | 
						<i class="ion-ios7-pricetags"></i> <?php the_category( ', ' ); ?>
					</p>
				<?php if( get_the_post_thumbnail() ): ?>
					<?php the_post_thumbnail('large', array('class'=>'img-responsive')); ?>
				<?php endif; ?>

				<?php the_content(); ?>
			</div>

			<!-- Comments -->

			<?php comments_template(); ?>

      
        <?php endwhile; endif; ?>

    </div> <!-- end col-md-8 -->

  </div> <!-- end row -->

</div><!--  end container -->
</section>

<?php get_footer(); ?> 