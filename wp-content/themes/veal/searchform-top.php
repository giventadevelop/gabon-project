<?php
/**
 * The template for displaying search forms in veal
 *
 * @package veal
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="search-form-top">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'veal' ); ?></span>
		<input type="text" class="search-field" placeholder="<?php echo esc_attr_x( 'Search....', 'placeholder', 'veal' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	</div>
</form>
