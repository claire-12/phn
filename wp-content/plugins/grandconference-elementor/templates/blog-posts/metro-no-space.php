<?php
	if($counter == 1)
	{
		$next_count_for_large_grid = 5;
		$count_for_large_grid = 0;
	}
	
	$blog_featured_image_size = 'grandconference-gallery-list';
	$large_grid_class = '';
	
	if($counter == 1 OR $count_for_large_grid == $next_count_for_large_grid)
	{
		$blog_featured_image_size = 'large';
		$large_grid_class = 'large-grid';
		
		if($counter > 1)
		{
			$count_for_large_grid = 0;
			if($next_count_for_large_grid == 5)
			{
				$next_count_for_large_grid = 1;
			} 
			else if($next_count_for_large_grid == 1)
			{
				$next_count_for_large_grid = 5;
			}
		}
	}
	
	$blog_featured_img_url = '';
	if(!empty($image_thumb))
	{
		$blog_featured_img_url = get_the_post_thumbnail_url($post_ID, $blog_featured_image_size);
	}
	
	if(!isset($queue))
	{
		$queue = 1;	
	}
	
	if($queue > 3)
	{
		$queue = 1;
	}
	
	$animation_class = '';
	$smoove_class = 'smoove';
?>

<!-- Begin each blog post -->
<div <?php post_class(array('blog-posts-'.$settings['layout'], 'blog-tilt', $smoove_class, $animation_class, $large_grid_class, 'count_for_large_'.$count_for_large_grid, 'next_for_large'.$next_count_for_large_grid)); ?> <?php if(!empty($blog_featured_img_url)) { ?>style="background-image:url(<?php echo esc_url($blog_featured_img_url); ?>);"<?php } ?> data-delay="<?php echo intval($queue*100); ?>">

	<div class="post-wrapper">
		
		<div class="post-content-wrapper text-<?php echo esc_attr($settings['text_align']); ?>">
			<a class="post-block-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
			
			<?php
			  	if($settings['show_date'] == 'yes') 
			  	{
			?>
			<div class="post-featured-date-wrapper">
			    <div class="post-featured-date"><?php echo date_i18n('d', get_the_time('U')); ?></div>
			    <div class="post-featured-month"><?php echo date_i18n('M', get_the_time('U')); ?></div>
			</div>
			<?php
				}
			?>
		    
		    <div class="post-header">
				<div class="post-header-title">
				    <h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
				</div>
				
				<div class="post-detail single-post">
				<?php
				  	if($settings['show_categories'] == 'yes') 
				  	{
				?>
				    <div class="post-info-date"><?php echo date_i18n(GRANDCONFERENCE_THEMEDATEFORMAT, get_the_time('U')); ?></div>

			    	<span class="post-info-cat <?php if($settings['show_date'] != 'yes') { ?>post-info-nodate<?php } ?>">
						<?php
						   //Get Post's Categories
						   $post_categories = wp_get_post_categories($post_ID);
						   
						   $count_categories = count($post_categories);
						   $i = 0;
						   
						   if(!empty($post_categories))
						   {
						      	foreach($post_categories as $key => $c)
						      	{
						      		$cat = get_category( $c );
						?>
						      	<a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><?php echo esc_html($cat->name); ?></a>
						<?php
							   		if(++$i != $count_categories) 
							   		{
							   			echo '&nbsp;&middot;&nbsp;';
							   		}
						      	}
						   }
						?>
			    	</span>
			 	<?php
				 	}
				?>
				</div>
				
				<div class="post-header-wrapper">
				<?php
			    	switch($settings['text_display'])
			    	{
				    	case 'full_content':
				    		if($settings['strip_html'] == 'yes')
				    		{
					    		echo strip_tags(get_the_content());
				    		}
				    		else
				    		{
				    			echo get_the_content();
				    		}
				    	break;
				    	
				    	case 'excerpt':
				    		if($settings['strip_html'] == 'yes')
				    		{
					    		echo grandconference_limit_get_excerpt(strip_tags(get_the_excerpt()), $settings['excerpt_length']['size'], '...');
					    	}
					    	else
					    	{
				    			echo grandconference_limit_get_excerpt(get_the_excerpt(), $settings['excerpt_length']['size'], '...');
				    		}
				    	break;
			    	}
			    ?>
			</div>
			</div>
	    </div>
	    
	</div>

</div>

<!-- End each blog post -->
<?php
	$count_for_large_grid++;
	$queue++;
?>