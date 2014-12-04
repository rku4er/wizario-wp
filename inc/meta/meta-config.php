<?php
/*-----------------------------------------------------------------*
*   Meta Configuration
*-----------------------------------------------------------------*/


#-----------------------------------------------------------------#
# Create Meta
#-----------------------------------------------------------------#
function webuza_create_meta_box( $post, $meta_box )
{

    if( !is_array( $meta_box ) ) return false;

    if( isset( $meta_box['description']) && $meta_box['description'] != '' ){
        echo '<p>'. $meta_box['description'] .'</p>';
    }

    wp_nonce_field( basename(__FILE__), 'webuza_meta_box_nonce' );
    echo '<table class="form-table webuza-metabox-table">';

    foreach( $meta_box['fields'] as $field ){

        $meta = get_post_meta( $post->ID, $field['id'], true );
        echo '<tr><th><label for="'. $field['id'] .'"><strong>'. $field['name'] .'</strong>
			  <span>'. $field['desc'] .'</span></label></th>';

        switch( $field['type'] ){
            case 'text':
                echo '<td><input type="text" name="webuza_meta['. $field['id'] .']" id="'. $field['id'] .'" value="'. ( $meta ? $meta : $field['std'] ) .'" size="30" /></td>';
                break;

            case 'textarea':
                echo '<td><textarea name="webuza_meta['. $field['id'] .']" id="'. $field['id'] .'" rows="8" cols="5">'. ( $meta ? $meta : $field['std'] ) .'</textarea></td>';
                break;

            case 'editor' :
                $settings = array(
                    'textarea_name' => 'webuza_meta['. $field['id'] .']',
                    'editor_class' => '',
                    'wpautop' => true
                );
                wp_editor( $meta, $field['id'], $settings );

                break;
            case 'file':

                echo '<td><input type="hidden" id="' . $field['id'] . '" name="webuza_meta[' . $field['id'] . ']" value="' . ( $meta ? $meta : $field['std' ]) . '" />';
                if( $meta != '' ) echo '<img class="redux-opts-screenshot" id="redux-opts-screenshot-' . $field['id'] . '" src="' . ( $meta ? $meta : $field['std'] ) . '" />';
                if( ($meta ? $meta : $field['std']) == '') {$remove = ' style="display:none;"'; $upload = ''; } else {$remove = ''; $upload = ' style="display:none;"'; }
                echo ' <a data-update="Select File" data-choose="Choose a File" href="javascript:void(0);"class="redux-opts-upload button-secondary"' . $upload . ' rel-id="' . $field['id'] . '">' . __( 'Upload', WEBUZA_THEME_NAME ) . '</a>';
                echo ' <a href="javascript:void(0);" class="redux-opts-upload-remove"' . $remove . ' rel-id="' . $field['id'] . '">' . __( 'Remove Upload', WEBUZA_THEME_NAME ) . '</a></td>';

                break;

            case 'images':
                echo '<td><input type="button" class="button" name="' . $field['id'] . '" id="webuza_images_upload" value="' . $field['std'] .'" /></td>';
                break;

            case 'select':
                echo'<td><select name="webuza_meta['. $field['id'] .']" id="'. $field['id'] .'">';
                foreach( $field['options'] as $key => $option ){
                    echo '<option value="' . $key . '"';
                    if( $meta ){
                        if( $meta == $key ) echo ' selected="selected"';
                    } else {
                        if( $field['std'] == $key ) echo ' selected="selected"';
                    }
                    echo'>'. $option .'</option>';
                }
                echo'</select></td>';
                break;
            case 'slide_alignment' :

                wp_register_style(
                    'redux-opts-jquery-ui-custom-css',
                    apply_filters('redux-opts-ui-theme', get_template_directory_uri() . '/options/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                    '',
                    time(),
                    'all'
                );
                wp_enqueue_style('redux-opts-jquery-ui-custom-css');
                wp_enqueue_script(
                    'redux-opts-field-button_set-js',
                    get_template_directory_uri() . '/options/fields/button_set/field_button_set.js',
                    array('jquery', 'jquery-ui-core', 'jquery-ui-dialog'),
                    time(),
                    true
                );
                echo '<td>';
                echo '<fieldset class="buttonset">';
                foreach( $field['options'] as $key => $option ){

                    echo '<input type="radio" id="webuza_meta_'. $key .'" name="webuza_meta['. $field["id"] .']" value="'. $key .'" ';
                    if( $meta ){
                        if( $meta == $key ) echo ' checked="checked"';
                    } else {
                        if( $field['std'] == $key ) echo ' checked="checked"';
                    }
                    echo ' /> ';
                    echo '<label for="webuza_meta_'. $key .'"> '.$option.'</label>';

                }
                echo '</fieldset>';
                echo '</td>';
                break;
            case 'radio':
                echo '<td>';
                foreach( $field['options'] as $key => $option ){
                    echo '<label class="radio-label"><input type="radio" name="webuza_meta['. $field['id'] .']" value="'. $key .'" class="radio"';
                    if( $meta ){
                        if( $meta == $key ) echo ' checked="checked"';
                    } else {
                        if( $field['std'] == $key ) echo ' checked="checked"';
                    }
                    echo ' /> '. $option .'</label> ';
                }
                echo '</td>';
                break;

            case 'checkbox':
                echo '<td>';
                $val = '';
                if( $meta ) {
                    if( $meta == 'on' ) $val = ' checked="checked"';
                } else {
                    if( $field['std'] == 'on' ) $val = ' checked="checked"';
                }
                echo '<input type="hidden" name="webuza_meta['. $field['id'] .']" value="off" />
                <input type="checkbox" id="'. $field['id'] .'" name="webuza_meta['. $field['id'] .']" value="on"'. $val .' /> ';
                echo '</td>';
                break;
        }
        echo '</tr>';
    }
    echo '</table>';
}


#-----------------------------------------------------------------#
# Save Meta
#-----------------------------------------------------------------#

function webuza_save_meta_box( $post_id ) {

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
        return;
    if ( !isset($_POST['webuza_meta']) || !isset($_POST['webuza_meta_box_nonce']) || !wp_verify_nonce( $_POST['webuza_meta_box_nonce'], basename( __FILE__ ) ) )
        return;
    if ( 'page' == $_POST['post_type'] ) {
        if ( !current_user_can( 'edit_page', $post_id ) ) return;
    }
    else {
        if ( !current_user_can( 'edit_post', $post_id ) ) return;
    }
    foreach( $_POST['webuza_meta'] as $key=>$val ){
        update_post_meta( $post_id, $key, $val );
    }
}

add_action( 'save_post', 'webuza_save_meta_box' );