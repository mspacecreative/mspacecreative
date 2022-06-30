<?php
/*
Template Name: Sidebar Page
 */

get_header('page'); ?>
	<div id="primary" class="row-fluid">
		<div class="primary-inner"></div>
		<div id="content" role="main" class="span8 offset2 clearfix">

			<main>
				<?php if ( have_posts() ) : ?>
				
								<?php while ( have_posts() ) : the_post(); ?>
				
									<article class="post">
									
										<h1 class="title"><?php the_title(); ?></h1>
										
										<div class="the-content clearfix">
										
											<?php the_content(); ?>
											
										</div><!-- the-content -->
										
									</article>
				
								<?php endwhile; ?>
				
							<?php else : ?>
								
								<article class="post error">
									<h1 class="404">Nothing posted yet</h1>
								</article>
				
							<?php endif; ?>
			</main>
			
			<?php get_sidebar(); ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); ?>