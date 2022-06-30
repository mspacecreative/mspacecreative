<?php if( have_rows('portfolio', 'options') ):
	while ( have_rows('portfolio', 'options') ) : the_row(); 
	
	$image = get_sub_field('project_image');
	
	if( !empty($image) ): 
	
	// vars
		$url = $image['url'];
		$title = $image['title'];
		$alt = $image['alt'];
		$caption = $image['caption'];
	
		// thumbnail
		$size = 'large';
		$thumb = $image['sizes'][ $size ];
		$width = $image['sizes'][ $size . '-width' ];
		$height = $image['sizes'][ $size . '-height' ];
	?>

  	<div class="grid-box">
  		<div class="img-hover">
  			<a class="taphover" href="<?php the_sub_field('link', 'options'); ?>"></a>
  		</div>
  		<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" class="port-img" />
  		<div class="grid-box_text">
  			<h3><?php the_sub_field('project_title', 'options'); ?></h3>
  			<p><?php the_sub_field('project_description', 'options'); ?></p>
  		</div>
  	</div>
  	
  	<?php endif; ?>

<?php endwhile; else : endif; ?>