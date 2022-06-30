<?php
/**
 * The template for displaying any single page.
 *
 */

get_header('page'); ?>
	<div id="primary">
		<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have a page to show, start a loop that will display it
				?>

					<article class="post">
					
						<h1 class="title"><?php the_title(); // Display the title of the page ?></h1>
						
						<div class="the-content">
							<?php the_content();
							?>
							
							<?php wp_link_pages(); ?>
						</div><!-- the-content -->
						
					</article>

				<?php endwhile; ?>

			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); ?>