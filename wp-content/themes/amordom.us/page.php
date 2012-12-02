<?php get_header(); ?>

<div id="page">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="container">
			
			<div class="row">
			
				<h1><?php the_title(); ?></h1>
				
				<?php the_content(); ?>
			
			</div>
			
		</div>
		
	<?php endwhile; else: ?>
	 
		Page not found!

	<?php endif; ?>

</div> <!-- end #page -->

<?php get_footer(); ?>