<?php
// @package veal
// Template for Testimonials area for Business Page
//
global $option_setting;

if (isset($option_setting['testimonial-title']) && isset( $option_setting['testimonial-main'] )) :
?>
	<div id="testimonials" class="col-md-6">
		<div id="testimonials-title">
			<?php echo $option_setting['testimonial-title']; ?>
		</div>
		<?php foreach($option_setting['testimonial-main'] as $testimonial) : ?>
			<div class="testimonial">
				<div class="tframe">
					<?php if($testimonial['image']) : ?>
						<div class="testimonial-image">
							<img src="<?php echo $testimonial['image'] ?>">
						</div>
					<?php endif; ?>
					<div class="testimonial-content">
						<?php echo $testimonial['description']; ?>
					</div>		
				</div>
			</div>
				<cite><a href="<?php echo $testimonial['url'] ?>"><?php echo $testimonial['title'] ?></a></cite>	
			<?php endforeach; ?>			
	</div><!--#testimonials-->

<?php
endif;
?>