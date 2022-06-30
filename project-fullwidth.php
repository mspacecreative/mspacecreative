<?php
/*
Template Name: Project Full Width Page
 */

get_header('page'); ?>
	<div id="primary">
		<div id="content" role="main" class="clearfix">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
					<section>
						<article class="post clearfix">
							<div class="the-content">
								<div class="half">
									<h1 class="title"><?php the_title(); ?></h1>
								</div>
								<div class="half">
									<?php the_content(); ?>
								</div>
								<div class="feature-images">
									<?php 
									
									$images = get_field('feature_images');
									
									if( $images ): ?>
									
										<ul>
											<?php foreach( $images as $image ): ?>
											<li>
											<h3><?php echo $image['title']; ?></h3>
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
											<?php endforeach; ?>
										</ul>
									
									<?php endif; ?>
									
								</div>
							</div>
						</article>
					</section>
				
				<?php endwhile; ?>
				<?php else : ?>
					<article class="post error">
						<h1 class="404">Nothing posted yet</h1>
					</article>
			<?php endif; ?>
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); ?>