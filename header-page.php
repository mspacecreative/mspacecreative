<!DOCTYPE html <?php language_attributes(); ?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php if( is_front_page() ) : ?><?php bloginfo('name'); ?> | <?php bloginfo('description');?>
	<?php elseif( is_404() ) : ?>Page Not Found | <?php bloginfo('name'); ?>
	<?php elseif( is_search() ) : ?><?php print 'Search Results for ' . wp_specialchars($s); ?> | <?php bloginfo('name'); ?>
	<?php else : ?><?php wp_title($sep = ''); ?> | <?php bloginfo('name');?>
	<?php endif; ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/touch.png" />
	
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	
	<!--	
	<script type="text/javascript">
		if (!Modernizr.svg) {
		    var imgs = document.getElementsByTagName('img');
		    var svgExtension = /.*\.svg$/
		    var l = imgs.length;
		    for(var i = 0; i < l; i++) {
		        if(imgs[i].src.match(svgExtension)) {
		            imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
		            console.log(imgs[i].src);
		        }
		    }
		}
	</script>
	-->
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="toggle-button">
		<div id="nav-icon">
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
	</div>
	
	<div class="main-nav">
			<?php wp_nav_menu (array('theme_location' => 'primary'));?>
		</div>
	
			<div class="header-bg">
				<header>
					<div class="inner clearfix">
						<div class="logo">
							<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="M Space Creative" /></a>
						</div>
					</div>
				</header>
			</div>
	
	<div class="wrapper">
		<div class="white-overlay" style="position: fixed;left:0;top: 0;height: 100%;width: 100%;background: #fff;z-index: 1;"></div>