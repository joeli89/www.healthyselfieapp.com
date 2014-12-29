<?php get_header(); ?>


<section>
  <div class="container">

    <div class="row blog">


	    <!-- === 1st COLUMN === -->
	      	<div class="col-sm-12 col-md-9">

	      		<div class="leader">
	      			<h1><?php wp_title(''); ?></h1>
	      			<p>Results for : <?php wp_title(''); ?>.</p>
	      		</div>
	      		<hr>
		      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	      		<div class="row recipe-item">

						<div class="media col-xs-3">
							<a class="media-left media-middle" href="<?php the_permalink(); ?>">
								<?php if( get_the_post_thumbnail() ): ?>
									<?php the_post_thumbnail('large'); ?>
								<?php endif; ?>
							</a>
						</div>

						<div class="media-body col-xs-9">
							<div class="posts">
								<a href="<?php the_permalink(); ?>"><h4 class="media-heading"><?php the_title(); ?></h4></a>
								<p class="excerpt">
									<?php echo strip_tags( get_the_excerpt()); ?>
								</p>
								<button class="btn btn-default"><a href="<?php the_permalink(); ?>">VIEW</a></button>
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