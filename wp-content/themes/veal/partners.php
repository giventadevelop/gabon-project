<?php
//Partners Section
global $option_setting;
if (isset($option_setting['partner-images'])): ?>
<div id="partner-images" class="col-md-12">
	<div id="sponsors-title">
		<?php echo $option_setting['sponsors-title'] ?>
	</div>
<?php
foreach ($option_setting['partner-images'] as $image) :
	echo "<div class='partner col-md-3'><a href='".$image['url']."'><img src='".$image['image']."'></a></div>";
endforeach;
echo "</div>";
endif;
?>