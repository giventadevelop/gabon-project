<?php global $option_setting;
$count = 1;
if ( isset ($option_setting['showcase-main']) ) : ?>
	
    <div id="showcase">
    <div class="container">
    <div id="showcase-title"><?php echo $option_setting['showcase-title']; ?></div>
    	<?php
		  		foreach ( $option_setting['showcase-main'] as $showcase ) {
		  				if ($count > 3) { break; }
						echo "<div class='col-md-4 col-sm-4 showcase'><figure><div><a href='".esc_url($showcase['url'])."'><img src='".$showcase['image']."'><div class='showcase-caption'><div class='showcase-caption-title'>".$showcase['title']."</div><div class='showcase-caption-desc'>".$showcase['description']."</div></div></a></div></figure></div>";  
						$count++;  
				}
           ?>
     </div>   
	</div><!--.showcase-->
	    
	<?php  
endif; ?>