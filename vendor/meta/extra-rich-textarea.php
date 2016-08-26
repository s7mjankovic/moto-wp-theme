<?php
	
	// foreach ( get_post_types( '', 'names' ) as $post_type ) :
	// 	if($post_type != 'testimonials' && $post_type != 'languages') :

	// 	endif;
	// endforeach;
	

	add_action( 'add_meta_boxes', 'adding_new_metaabox' );              
	function adding_new_metaabox() 
	    {   	
	        add_meta_box('html_myid_61_section', 'SRPSKI JEZIK', 'my_output_function');
	        //add_meta_box('html_myid_61_section', 'SRPSKI JEZIK', 'my_output_function'); 		
	    }

	function my_output_function( $post ) 
	    {
	    //so, dont ned to use esc_attr in front of get_post_meta
	    $valueeee3 =  get_post_meta($_GET['post'], 'TITLE_SERBIAN' , true ) ;?>
	    <br>
	    <div class="form-field form-required">
	    <label for="title_sr">Naslov</label><br>
	    <input type="text" class="" name="title_sr" value="<?php echo htmlspecialchars_decode($valueeee2); ?>" />
	    </div>
	    <br>
	    <?php  
	    $valueeee2 =  get_post_meta($_GET['post'], 'CONTENT_SERBIAN' , true ) ;
	    wp_editor( htmlspecialchars_decode($valueeee2), 'mettaabox_ID_stylee', $settings = array('textarea_name'=>'content_sr') );
	    }


	function save_my_postdata( $post_id ) 
	{                   
	    if (!empty($_POST['content_sr']))
	        {
	        $datta=htmlspecialchars($_POST['content_sr']);
	        update_post_meta($post_id, 'CONTENT_SERBIAN', $datta );
	        }
	    if (!empty($_POST['title_sr']))
	        {
	        $datta=htmlspecialchars($_POST['title_sr']);
	        update_post_meta($post_id, 'TITLE_SERBIAN', $datta );
	        }
	}
	add_action( 'save_post', 'save_my_postdata' );  

	
?>