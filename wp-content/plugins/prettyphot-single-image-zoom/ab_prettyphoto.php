<?php
/*
Plugin Name: Prettyphoto Zoom
Plugin URI: http://wordpress.org/extend/plugins/ab_prettyphoto/
Description: Add a checkbox to media window for showing large image with prettyphoto javascript
Author: Andrea Bersi
Version: 2.0
Author URI: http://www.andreabersi.com/
*/


// constants for adding ab_prettyphoto to ADD MEDIA WINDOW
define ('ab_prettyphotoZOOM_JS', plugin_dir_url(__FILE__)."prettyPhoto_3.1.4");
$wp_version=get_bloginfo('version');

/* Load localization */
load_plugin_textdomain('ab_prettyphoto',false,dirname( plugin_basename( __FILE__ ) ) . '/languages/');


/* FOR Wordpress 3.5 new logic: thank you to ungestalatbar 
//http://wordpress.stackexchange.com/questions/76219/wordpress-3-5-attachment-fields-to-edit-and-media-send-to-editor
*/
// add highslide option to media dialog
function ab_prettyphoto_attachment_fields_to_edit_35( $form_fields, $post ) {
   if(get_option('ab_prettyphoto_enabledForDefault') == 1)  $ab_prettyphoto = 'checked="checked" ';
   		$my_form_fields = array(
      	 'ab_prettyphoto' => array(
         	'label'     => __('Automatic Zoom on click', 'ab_prettyphoto'),
         	'input'     => 'html',
         	'html'      => "
            <input type='checkbox' name='attachments[{$post->ID}][ab_prettyphoto]' id='ab_prettyphoto-{$post->ID}' value='1' $ab_prettyphoto/>


            <label for='ab_prettyphoto-{$post->ID}'>" . __('Enable zoom', 'ab_prettyphoto') . "</label>" )
    );
    if( $post->post_mime_type == 'image/jpeg' OR  $post->post_mime_type == 'image/gif' OR $post->post_mime_type == 'image/png' OR $post->post_mime_type == 'image/tiff')
      return array_merge( $form_fields, $my_form_fields );
    else
      return $form_fields;
}

function ab_prettyphoto_add_meta_35($post, $attachment_data){
 // use this filter to add post meta if key exists or delete it if not
    if ( !empty($attachment_data['ab_prettyphoto']) && $attachment_data['ab_prettyphoto'] == '1' )
         update_post_meta($post['ID'], 'ab_prettyphoto', true);
    else
         delete_post_meta($post['ID'], 'ab_prettyphoto');
    return $post;
}



function ab_prettyphoto_send_to_editor_35( $html, $id, $att ) {
	$is_set = get_post_meta($id,'ab_prettyphoto', true);
    if ($is_set and $is_set == '1'){	
	 	$title=get_the_title($id);
      	return str_replace('<a', '<a rel="prettyPhoto-img" title="'.$title.'"', $html);
	}
   else
      return $html;
}



if(version_compare( $wp_version, '3.5', '>=' )){
	add_filter('attachment_fields_to_save', 'ab_prettyphoto_add_meta_35',10,2);
}

if(version_compare( $wp_version, '3.5', '>=' )){
	add_filter( 'attachment_fields_to_edit', 'ab_prettyphoto_attachment_fields_to_edit_35', 100, 2 );
}else{
	add_filter( 'attachment_fields_to_edit', 'ab_prettyphoto_attachment_fields_to_edit', 100, 2 );
}

if(version_compare( $wp_version, '3.5', '>=' )){
	add_filter( 'media_send_to_editor', 'ab_prettyphoto_send_to_editor_35', 66, 3 );
}else{
	add_filter( 'media_send_to_editor', 'ab_prettyphoto_send_to_editor', 66, 3 );
}


####### OLD WP VERSION < 3.5 #########
// add highslide option to media dialog
function ab_prettyphoto_attachment_fields_to_edit( $form_fields, $post ) {
   if(get_option('ab_prettyphoto_enabledForDefault') == 1)
      $ab_prettyphoto = 'checked="checked" ';
   		$my_form_fields = array(
      	 'ab_prettyphoto' => array(
         	'label'     => __('Automatic Zoom on click', 'ab_prettyphoto'),
         	'input'     => 'html',
         	'html'      => "
            <input type='checkbox' name='ab_prettyphoto-{$post->ID}' id='ab_prettyphoto-{$post->ID}' value='1' $ab_prettyphoto/>
            <label for='ab_prettyphoto-{$post->ID}'>" . __('Enable zoom', 'ab_prettyphoto') . "</label>" )
    );
    if( $post->post_mime_type == 'image/jpeg' OR  $post->post_mime_type == 'image/gif' OR $post->post_mime_type == 'image/png' OR $post->post_mime_type == 'image/tiff')
      return array_merge( $form_fields, $my_form_fields );
    else
      return $form_fields;
}


// filter and modify html code send to editor

function ab_prettyphoto_send_to_editor( $html, $send_id, $attachment ) {
   if( isset($_POST["ab_prettyphoto-$send_id"]) ){
	 	$title=($_POST['attachments'][$send_id]['post_title']);
      	return str_replace('<a', '<a rel="prettyPhoto-img" title="'.$title.'"', $html);
	}
   else
      return $html;
}


// activating the plugin

function ab_prettyphoto_activate() {

   // save plugin options to database
   add_option('jcolorbox_enabledForDefault', 1);
}

register_activation_hook( __FILE__, 'ab_prettyphoto_activate' );

function ab_prettyphoto_add_js() {
		wp_enqueue_style('ab_prettyphotozoom2', ab_prettyphotoZOOM_JS."/css/prettyPhoto.css");
		wp_enqueue_script('ab_prettyphotozoom1', ab_prettyphotoZOOM_JS."/js/jquery.prettyPhoto.js", array('jquery'),'1.0' );
		wp_enqueue_script('ab_prettyphotozoom2', ab_prettyphotoZOOM_JS."/js/launch.js");

}// end function

add_action('template_redirect', 'ab_prettyphoto_add_js');