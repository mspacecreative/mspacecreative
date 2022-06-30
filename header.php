<!DOCTYPE html <?php language_attributes(); ?>>
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
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/fitie.js" type="text/javascript"></script>
	
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/touch.png" />
	
	<!-- Add fancyBox -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/fancybox/source/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.6"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox();
		});
	</script>
	
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


	<div class="white-overlay"></div>
	<?php get_template_part('contact'); ?>
	
	<div class="wrapper">