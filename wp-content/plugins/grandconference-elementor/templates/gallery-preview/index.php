<?php
	global $post;
	$widget_id = $this->get_id();
	
	//Get all settings
	$settings = $this->get_settings();

	//Get selected gallery
	if($settings['gallery_content_type'] == 'gallery_post')
	{
		$images = grandconference_get_gallery_images($settings['gallery_id'], $settings['sort']);
	}
	else
	{
		$images = $this->get_settings('gallery');
	}
	
	//Get default gallery ID for single gallery page
	if(is_single() && $post->post_type == 'galleries' && empty($images))
	{
		$images = grandconference_get_gallery_images($post->ID, 'drag');
	}
	
	if(!empty($images))
	{
		//Get all settings
		$settings = $this->get_settings();
		$timer_arr = $this->get_settings('timer');
		$timer = intval($timer_arr['size']) * 1000;
?>
<div class="fullscreen-gallery-preview-wrapper slider-wrapper">
	<div class="slider" data-pagination="<?php echo esc_attr($settings['show_pagination']); ?>" data-navigation="<?php echo esc_attr($settings['show_navigation']); ?>" <?php if($settings['autoplay'] == 'yes') { ?>data-autoplay="<?php echo esc_attr($timer); ?>"<?php } ?>>
<?php
		$counter = 0;
	
		foreach ( $images as $image ) 
		{	
			//Get image ID
			if(isset($image['id']) && !empty($image['id']))
			{
				$image_id = $image['id'];
			}
			else if(isset($image['url']) && !empty($image['url']))
			{
				$image_id = grandconference_get_image_id($image['url']);
			}
			else
			{
				$image_id = $image;
			}
			
			if(is_numeric($image_id) && (!isset($_GET['elementor_library']) OR empty($_GET['elementor_library'])))
			{
				$original_image_url = wp_get_attachment_image_src($image_id, 'original', true);
				
				//Get image meta data
				$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
			}
			else
			{
				$original_image_url[0] = $image['url']; 
			}
			
			//Get slideshow content
	        $image_title = '';
	        $image_caption = '';
	        $image_desc = '';
	        
	        $image_title = get_the_title($image_id);
			$image_caption = get_post_field('post_excerpt', $image_id);
			$image_description = get_post_field('post_content', $image_id);
			
			//If select 1 field then add it as array
			if(!is_array($settings['slideshow_content']))
			{
				$settings['slideshow_content'] = array($settings['slideshow_content']);
			}
?>
		<div class="slider--item" style="background-image:url(<?php echo esc_url($original_image_url[0]); ?>);background-size:<?php echo esc_attr($settings['size']); ?>">
			<?php
				if($settings['slideshow_content'] != 'none')
				{
			?>
				<div class="gallery-fullscreen-content">
				<?php
					if(!empty($image_caption) && in_array('caption', $settings['slideshow_content']))
					{
				?>
					<div class="gallery-fullscreen-caption"><?php echo esc_html($image_caption); ?></div>
				<?php
					}
				
					if(!empty($image_title) && in_array('title', $settings['slideshow_content']))
					{
				?>
					<div class="gallery-fullscreen-title"><?php echo esc_html($image_title); ?></div>
				<?php
					}
					
					if(!empty($image_description) && in_array('description', $settings['slideshow_content']))
					{
				?>
					<div class="gallery-fullscreen-description"><?php echo esc_html($image_description); ?></div>
				<?php
					}
				?>
				</div>
			<?php
				}
			?>
		</div>
<?php
			$counter++;
		}
?>
	</div>
</div>
<?php
	}
?>