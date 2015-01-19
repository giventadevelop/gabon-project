<?php
/**
 * Adds a meta box to the post editing screen
 */
function veal_custom_meta() {
    add_meta_box( 'veal_meta', __( 'Display Options', 'veal' ), 'veal_meta_callback', 'page','side','high' );
}
add_action( 'add_meta_boxes', 'veal_custom_meta' );

/**
 * Outputs the content of the meta box
 */
function veal_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'veal_nonce' );
    $veal_stored_meta = get_post_meta( $post->ID );
    ?>
 
    <p>
        <label for="meta-text" class="veal-row-title"><?php _e( 'Example Text Input', 'veal' )?></label>
        <input type="text" name="meta-text" id="meta-text" value="<?php if ( isset ( $veal_stored_meta['meta-text'] ) ) echo $veal_stored_meta['meta-text'][0]; ?>" />
    </p>
    
    <p>
	    <div class="veal-row-content">
	        <label for="slider-checkbox">
	            <input type="checkbox" name="slider-checkbox" id="slider-checkbox" value="yes" <?php if ( isset ( $veal_stored_meta['slider-checkbox'] ) ) checked( $veal_stored_meta['slider-checkbox'][0], 'yes' ); ?> />
	            <?php _e( 'Enable Slider', 'veal' )?>
	        </label>
	        <br />
	        <label for="enable-title">
	            <input type="checkbox" name="enable-title" id="enable-title" value="yes" <?php if ( isset ( $veal_stored_meta['enable-title'] ) ) checked( $veal_stored_meta['enable-title'][0], 'yes' ); ?> />
	            <?php _e( 'Hide Page Title', 'veal' )?>
	        </label>
	    </div>
	</p>
 
    <?php
}


/**
 * Saves the custom meta input
 */
function veal_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'veal_nonce' ] ) && wp_verify_nonce( $_POST[ 'veal_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
    // Checks for input and sanitizes/saves if needed
    if( isset( $_POST[ 'meta-text' ] ) ) {
        update_post_meta( $post_id, 'meta-text', sanitize_text_field( $_POST[ 'meta-text' ] ) );
    }
    
    // Checks for input and saves
	if( isset( $_POST[ 'slider-checkbox' ] ) ) {
	    update_post_meta( $post_id, 'slider-checkbox', 'yes' );
	} else {
	    update_post_meta( $post_id, 'slider-checkbox', '' );
	}
	 
	// Checks for input and saves
	if( isset( $_POST[ 'enable-title' ] ) ) {
	    update_post_meta( $post_id, 'enable-title', 'yes' );
	} else {
	    update_post_meta( $post_id, 'enable-title', '' );
	}
 
}
add_action( 'save_post', 'veal_meta_save' );