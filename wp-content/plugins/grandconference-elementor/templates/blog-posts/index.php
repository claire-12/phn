<?php
	//Get all settings
	$settings = $this->get_settings();
?>
<div class="blog-post-content-wrapper layout-<?php echo esc_attr($settings['layout']); ?>">
<?php
	//For pagination
	if(is_front_page())
	{
	    $paged = (get_query_var('page')) ? get_query_var('page') : 1;
	}
	else
	{
	    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	}

	$args = array( 
		'posts_per_page' => $settings['posts_per_page']['size'],
		'category__in' => $settings['categories'],
		'paged' => $paged,
	);
	query_posts($args);
	
	$tg_enable_lazy_loading = get_theme_mod('tg_enable_lazy_loading');
	$counter = 0;
	
	if (have_posts()) : while (have_posts()) : the_post();
	
		$post_ID = get_the_ID();
		$image_thumb = '';
		$counter++;
							
		if(has_post_thumbnail($post_ID, 'large'))
		{
		    $image_id = get_post_thumbnail_id($post_ID);
		    $image_thumb = wp_get_attachment_image_src($image_id, 'large', true);
		}
		
		$post_class = get_post_class();
		global $wp_query;
	    
	   	//Start displaying blog post layouts
	   	switch($settings['layout'])
	   	{
		   	case 'classic':
		   	default:
		   		include(GRANDCONFERENCE_ELEMENTOR_PATH.'/templates/blog-posts/classic.php');
		   	break;
		   	
		   	case 'grid':
		   		include(GRANDCONFERENCE_ELEMENTOR_PATH.'/templates/blog-posts/grid.php');
		   	break;
		   	
		   	case 'grid_no_space':
		   		include(GRANDCONFERENCE_ELEMENTOR_PATH.'/templates/blog-posts/grid-no-space.php');
		   	break;
		   	
		   	case 'masonry':
		   		include(GRANDCONFERENCE_ELEMENTOR_PATH.'/templates/blog-posts/masonry.php');
		   	break;
		   	
		   	case 'list':
		   		include(GRANDCONFERENCE_ELEMENTOR_PATH.'/templates/blog-posts/list.php');
		   	break;
		   	
		   	case 'list-circle':
		   		include(GRANDCONFERENCE_ELEMENTOR_PATH.'/templates/blog-posts/list-circle.php');
		   	break;
		   	
		   	case 'metro':
		   		include(GRANDCONFERENCE_ELEMENTOR_PATH.'/templates/blog-posts/metro.php');
		   	break;
		   	
		   	case 'metro_no_space':
		   		include(GRANDCONFERENCE_ELEMENTOR_PATH.'/templates/blog-posts/metro-no-space.php');
		   	break;
	   	}
	   			    
	endwhile; endif;
?>
</div>
<?php
	if($settings['show_pagination'] == 'yes')
	{
		global $wp_query;
		if($wp_query->max_num_pages > 1)
	    {
	    	if (function_exists("grandconference_pagination")) 
	    	{
	    	    grandconference_pagination($wp_query->max_num_pages, 4, 'blog-posts-'.$settings['layout'] );
	    	}
	    	else
	    	{
?>
	    		<div class="pagination blog-posts-<?php echo esc_attr($settings['layout']); ?>"><p><?php posts_nav_link(''); ?></p></div>
<?php
	    	}
?>
			<div class="pagination-detail blog-posts-<?php echo esc_attr($settings['layout']); ?>">
		    	<?php esc_html_e('Page', 'grandconference-elementor' ); ?> <?php echo esc_html($paged); ?> <?php esc_html_e('of', 'grandconference-elementor' ); ?> <?php echo esc_html($wp_query->max_num_pages); ?>
		    </div>
<?php
	    }
	}
	
	wp_reset_query();	
?>
<br class="clear"/>