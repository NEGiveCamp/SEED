<?php

add_action( 'add_meta_boxes', 'bod_titles' );
function bod_titles() {
    add_meta_box(
        'bod_title',
        __( 'Board of Director Title', 'Board of Director Title' ),
        'bod_title_content',
        'person',
        'side',
        'core'
    );
}

function bod_title_content( $post ){
	// The actual fields for data entry
	// Use get_post_meta to retrieve an existing value from the database and use the value for the form
	$bod_title = get_post_meta( $post->ID, 'bod_title', true );
	echo '<input type="text" id="bod_title" name="bod_title" value="'.esc_attr($bod_title).'" size="25" />';
}

add_action( 'save_post', 'bod_title_save' );
function bod_title_save( $post_id ) {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
	return;

/*	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
		return;
	} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
		return;
	}*/
	$bod_title = !empty( $_POST['bod_title'] ) ? $_POST['bod_title'] : '';

	update_post_meta( $post_id, 'bod_title', $bod_title );
}