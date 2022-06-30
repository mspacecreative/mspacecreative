<?php
/*
Template Name: Project with Lightbox Page
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
														<!--<?php echo the_post_thumbnail(); ?>-->
														<div class="gallery_grid clearfix">
															<?php if( have_rows('lightbox') ):
																while ( have_rows('lightbox') ) : the_row();
																
																$imageID = get_sub_field('lb_thumb');
																$image = wp_get_attachment_image_src( $imageID, 'full' );
																$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>
															
															<div class="gallery-img">
																<a class="fancybox" title="<?php the_sub_field('caption'); ?>" rel="<?php the_sub_field('group'); ?>" href="<?php the_sub_field('lb_img'); ?>">
																	<img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
																</a>
																<div class="thumb-hover">
																	<i class="fa fa-search-plus zoom-icon"></i>
																</div>
															</div>
															
															<?php endwhile; else : endif; ?>
														</div>
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