<?php global $option_setting; ?>
<?php if ($option_setting['mail-id']) : ?>
	<div class="top-right">
		<i><?php _e('MAIL US','veal'); ?></i>
			<span><?php echo $option_setting['mail-id']; ?></span>
	</div>
<?php endif; ?>
<?php if ($option_setting['phone-number']) :?>
	<div class="top-right">
		<i><?php _e('CALL US','veal'); ?></i>
		 <span><?php echo $option_setting['phone-number'] ?></span>
	</div>	
<?php endif; ?>