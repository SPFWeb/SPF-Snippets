
// Meta Box SPF


function property_info_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function property_info_add_meta_box() {
	add_meta_box(
		'property_info-property-info',
		__( 'Property Info', 'property_info' ),
		'property_info_html',
		'page',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'property_info_add_meta_box' );

function property_info_html( $post) {
	wp_nonce_field( '_property_info_nonce', 'property_info_nonce' ); ?>

	<p>
		<label for="property_info_people"><?php _e( 'People', 'property_info' ); ?></label><br>
		<input type="text" name="property_info_people" id="property_info_people" value="<?php echo property_info_get_meta( 'property_info_people' ); ?>">
	</p>	<p>
		<label for="property_info_price_"><?php _e( 'Price ($)', 'property_info' ); ?></label><br>
		<input type="text" name="property_info_price_" id="property_info_price_" value="<?php echo property_info_get_meta( 'property_info_price_' ); ?>">
	</p><?php
}

function property_info_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['property_info_nonce'] ) || ! wp_verify_nonce( $_POST['property_info_nonce'], '_property_info_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['property_info_people'] ) )
		update_post_meta( $post_id, 'property_info_people', esc_attr( $_POST['property_info_people'] ) );
	if ( isset( $_POST['property_info_price_'] ) )
		update_post_meta( $post_id, 'property_info_price_', esc_attr( $_POST['property_info_price_'] ) );
}
add_action( 'save_post', 'property_info_save' );
