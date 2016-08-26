<?php
$key = "testimonial";
$meta_boxes = array(
	"position" => array(
		"name" => "position",
		"title" => "Position in Company",
		"description" => "Enter their position in their specific company."
	),
	"testimonial" => array(
		"name" => "testimonial",
		"title" => "Testimonial content",
		"description" => "Enter testimonial."
	),
	"position_sr" => array(
		"name" => "position_sr",
		"title" => "Funkcija u kompaniji",
		"description" => "Unesite funkciju u kompaniji."
	),
	"testimonial_sr" => array(
		"name" => "testimonial_sr",
		"title" => "Sadržaj izjave",
		"description" => "Unesite izjavu."
	)
);

function wpb_create_meta_box() {
	global $key;
	if( function_exists( 'add_meta_box' ) ) {
		add_meta_box( 'new-meta-boxes', ucfirst( $key ) . ' Information', 'display_meta_box', 'testimonial', 'normal', 'high' );
	}
}

function display_meta_box() {
	global $post, $meta_boxes, $key;
	?>

	<div class="form-wrap">

	<?php
		wp_nonce_field( plugin_basename( __FILE__ ), $key . '_wpnonce', false, true );
		foreach($meta_boxes as $meta_box) {
			$data = get_post_meta($post->ID, $key, true);
	?>
		<div class="form-field form-required">
		<?php if($meta_box[ 'name' ] == 'position_sr') : ?>
			<h3>SRPSKI JEZIK</h3>
			<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
		<?php else : ?>
			<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
		<?php endif; ?>
		

	<?php if($meta_box[ 'name' ] == 'testimonial' || $meta_box[ 'name' ] == 'testimonial_sr') : ?>
		<textarea name="<?php echo $meta_box[ 'name' ]; ?>" value="" rows="8"><?php echo (isset($data[ $meta_box[ 'name' ] ]) ? htmlspecialchars( $data[ $meta_box[ 'name' ] ] ) : ''); ?></textarea>

	<?php else : ?>
		<input type="text" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php echo (isset($data[ $meta_box[ 'name' ] ]) ? htmlspecialchars( $data[ $meta_box[ 'name' ] ] ) : ''); ?>" />
		<p><?php echo $meta_box[ 'description' ]; ?></p>
	<?php endif; ?>
		</div>

		<?php } ?>

		</div>

<?php } ?>

<?php

function wpb_save_meta_box( $post_id ) {

	global $post, $meta_boxes, $key;
	foreach( $meta_boxes as $meta_box ) {
		if (isset($_POST[ $meta_box[ 'name' ] ])) {
			$data[ $meta_box[ 'name' ] ] = $_POST[ $meta_box[ 'name' ] ];
		}
	}

	if (!isset($_POST[ $key . '_wpnonce' ])) {
		return $post_id;
	}

	if ( !wp_verify_nonce( $_POST[ $key . '_wpnonce' ], plugin_basename(__FILE__) ) ) {
		return $post_id;
	}


	if ( !current_user_can( 'edit_post', $post_id )) {
		return $post_id;
	}
	update_post_meta( $post_id, $key, $data );

}

?>