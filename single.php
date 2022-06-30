<?php
/*
Template Name Posts: Project Full Width Page
 */

get_header('page'); ?>
	<div id="primary">
		<div id="content" role="main" class="clearfix">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
					<section>
						<article class="post">
							
							<!--THE CONTENT-->
							<div class="the-content">
								
								<!--CONTENT COLUMNS-->
								<div class="clearfix">
									<div class="half">
										<h1 class="title"><?php the_title(); ?></h1>
									</div>
									<div class="half">
										<?php the_content(); ?>
									</div>
								</div>
								<!--CONTENT COLUMNS-->
								
								<!--SCROLLING SCREENS-->
								<?php 
								$image = get_field('screenshot');
								if( $image ):
								 ?>
								<!--<h3><?php echo $image['title']; ?></h3>-->
								<div class="desktop browser-desk rel">
									<img src="<?php echo get_template_directory_uri(); ?>/images/cinema-screen.png" alt="Desktop View" />
									<div class="screenshot">
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									</div>
								</div>
								<?php endif; ?>
								<!--SCROLLING SCREENS-->
								
								<!--FEATURED IMAGES-->
								<div class="feature-images">
									<?php 
									
									$images = get_field('feature_images');
									
									if( $images ): ?>
									
										<ul>
											<?php foreach( $images as $image ): ?>
											<li>
												<h3><?php echo $image['title']; ?></h3>
												<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
											</li>
											<?php endforeach; ?>
										</ul>
									
									<?php endif; ?>
								</div>
								<!--FEATURED IMAGES-->
								
							</div>
							<div class="post-navigation clearfix">
								<div class="half prev-link">
									<?php previous_post_link('%link', 'Previous Project'); ?>
								</div>
								<div class="half next-link">
									<?php next_post_link('%link', 'Next Project'); ?>
								</div>
							</div>
							<!--THE CONTENT-->
							
						</article>
					</section>
				
				<?php endwhile; ?>
			<?php endif; ?>
			
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); ?>