<?php
/*
Template Name: Project Page
 */

get_header('page'); ?>
	<div id="primary">
		<div class="primary-inner"></div>
			<div id="content" role="main" class="clearfix">
			
						<main>
							<?php if ( have_posts() ) : ?>
							
											<?php while ( have_posts() ) : the_post(); ?>
							
												<article class="post">
												
													<h1 class="title"><?php the_title(); ?></h1>
													
													<div class="the-content clearfix">
													
														<div class="half">
															<?php the_content(); ?>
														</div>
														
														<div class="half">
														<?php echo the_post_thumbnail(); ?>
														</div>
														
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