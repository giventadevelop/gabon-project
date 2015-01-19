<?php global $option_setting;
if (isset($option_setting['featured-gallery'])): ?>
<div id="featured-image-slider" class="col-md-6">
	<div id="gallery-title"><?php echo $option_setting['gallery-title'] ?>
</div>
<ul class="fslider">
<?php
foreach ($option_setting['featured-gallery'] as $image) :
echo "<li><a href='".$image['url']."'><img src='".$image['image']."'></a></li>";
endforeach;
?>
</div>
<?php endif; ?>