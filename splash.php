<?php 
/*
Template Name: Splash Page
*/
get_header(); ?>
	
	<div class="site-wrap">
		<div id="color-wrapper" class="full">
			<div id="container">
				<div id="logo-container">
					<img src="<?php bloginfo('template_url'); ?>/images/logo.svg" style="display: block; width: 100%;" />
					<p style="margin-top: 50px; font-size: 18px; letter-spacing: .4em;">IDENTITY<br /><span><?php echo('  |  '); ?></span>PRINT<br /><span><?php echo('  |  '); ?></span>WEB</p>
				</div>
				<div id="portfolio-button-container">
					<div id="port-button">
						<a href="#portfolio" class="button">SEE LATEST WORK<i class="fa fa-chevron-down" style="display: block;"></i></a>
					</div>
					<!--<div class="arrow-down"></div>-->
				</div>
			</div>
		</div>
	</div>
	<section id="portfolio" style="width: 100%; margin: auto;">
		<article>
			<div class="grid-container clearfix">
			
				<?php get_template_part('portfolio_loop'); ?>
			
			</div>
		</article>
	</section>
<?php get_footer(); ?>