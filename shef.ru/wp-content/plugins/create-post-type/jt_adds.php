<?php

add_action( 'add_meta_boxes', 'jt_post_meta' );
add_action( 'save_post', 'jt_meta_save',10,3 );


/*---------------------------------------------*/

function jt_post_meta() {
    add_meta_box( 'jt_actionSite', 'Доп изображения', 'jt_actionSite_box', 'jt_actionSite','normal', 'high'  );
}

function jt_actionSite_box( $post ) {
   
	$custom_meta = get_post_meta($post->ID, '_actionSite_data',true);	
	echo '<div class="li_box_special">';
	echo '<textarea  rows="5" cols="150" name="actionSite_data" placeholder="Пути к картинке через ;" >'.$custom_meta.'</textarea>';
	echo '</div>';	
}




function jt_meta_save($post_id, $post){
  
	 if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	    return $post_id;

	 if ( !('jt_actionSite' == $post->post_type) ) 
	 return $post_id;
		
	 if ( !current_user_can( 'edit_post', $post_id ) )
	 return $post_id;

	 if ( ('jt_actionSite' == $post->post_type) ) { 
	 
	 $meta_tabs = array('actionSite_data');
		  
		foreach ($meta_tabs as $key => $value){ 
			$promo_actions = $_POST[$value];
			$value_meta = '_'.$value;
			$old_meta = get_post_meta($post_id, $value_meta, true);
			if (!empty($promo_actions)){
				if(!empty($old_meta)){
					update_post_meta( $post_id, $value_meta, $promo_actions );
				} else {
					add_post_meta( $post_id, $value_meta, $promo_actions );
				} 
			}else{
				if(empty($old_meta)){
					delete_post_meta( $post_id, $value_meta );
				}
				else {
					delete_post_meta( $post_id, $value_meta );
				}
			}
		 } 
	}	
}


