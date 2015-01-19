<?php global $option_setting;
$count = 1;
$slider_enable = get_post_meta( get_the_ID(), 'slider-checkbox',true );
if (isset($option_setting['slider-enable-on-home'])) :
	if( ($option_setting['slider-enable-on-home'] && (is_front_page() || is_home() )) || ($slider_enable == "yes")  ) : 
		if ( isset($option_setting['slider-main']) ) : ?>
	
	    <div id="slider-wrapper">
	    <ul class="bxslider">
	    	<?php
			  		foreach ( $option_setting['slider-main'] as $slider ) {
			  				if ($count > 5) { break; }
							echo "<li><a class='slideurl' href='".esc_url($slider['url'])."'><img src='".$slider['image']."'></a><div class='slider-caption container'><div class='slider-caption-title'><span>".$slider['title']."</span></div><div class='slider-caption-desc'>".$slider['description']."</div></div></li>";  
							$count++;  
					}
	           ?>
	     </ul>   
		</div>
	    
	<?php endif;
	endif;
endif;?>