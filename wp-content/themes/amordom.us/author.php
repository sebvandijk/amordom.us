<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php
					/* Queue the first post, that way we know
					 * what author we're dealing with (if that is the case).
					 *
					 * We reset this later so we can run the loop
					 * properly with a call to rewind_posts().
					 */
					the_post();
					
					
				?>

				<header class="page-header">
					<h1 class="page-title author"><?php printf( __( '', 'twentyeleven' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
				</header>
				
				<div id="content">
					
					<?php 
						//$user = get_user_meta( 5 );
						
					?>
				</div>
				<pre>
					<?php var_dump($user); ?>
				</pre>
				
				
			</div><!-- #content -->
		</section><!-- #primary -->
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>