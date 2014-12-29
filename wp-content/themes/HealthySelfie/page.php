<?php get_header(); ?>

<div class="inner-bg">
<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-md-12">
			    <h2><?php the_title(); ?></h2>
	            <p><?php the_content(); ?></p>
		</div>
	<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>
</div>



<?php get_footer(); ?>