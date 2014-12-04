<?php
/*-----------------------------------------------------------------*
*   Webuza Theme Options
*-----------------------------------------------------------------*/

#-----------------------------------------------------------------#
# Declare vars
#-----------------------------------------------------------------#

global $options;
include (TEMPLATEPATH.'/options/templates/options.php');

#-----------------------------------------------------------------#
# Function to handle options: save; update; delete;
#-----------------------------------------------------------------#
function webuza_options_add_admin()
{
    global $options;

    $option_page_name = 'webuza_options';
    $main_ico = site_url() . '/wp-content/themes/webuza/images/icon_webuza.png';
    if( isset( $_GET['page']) && ($_GET['page'] == $option_page_name ) ) {
        if( isset( $_REQUEST['action']) && ('save' == $_REQUEST['action'] ) ) {
            foreach( $options as $value ) {
                if( array_key_exists( 'id', $value ) ) {
                    if( isset( $_REQUEST[$value['id']] ) ) {
                        $values = $_REQUEST[$value['id']];
                        if( is_array( $values ) ){
                            $_values = array();
                            foreach( $values as $_key => $_value ){
                                if ( $_value == '' || $_value == '-' ) continue;
                                $_values[$_key] = $_value;
                            }
                            $values = $_values;
                        }
                        update_option( $value['id'], $values );
                    } else {
                        delete_option( $value['id'] );
                    }
                }
            }
            header( 'Location: admin.php?page=' . $option_page_name . '&saved=true' );
        } elseif( isset( $_REQUEST['action'] ) && ( 'reset' == $_REQUEST['action'] ) ) {
            foreach( $options as $value ) {
                if( array_key_exists( 'id', $value ) ) {
                    delete_option( $value['id'] );
                }
            }
            header( 'Location: admin.php?page=' . $option_page_name . '&reset=true' );
        }
    }

    add_menu_page( WEBUZA_THEME_NAME, WEBUZA_THEME_NAME, 'administrator', $option_page_name, 'webuza_options_show_admin', $main_ico );
    add_submenu_page( basename( __FILE__ ), WEBUZA_THEME_NAME . ' Options', 'Theme Options', 'administrator', $option_page_name, 'webuza_options_show_admin'); // Default
}

#-----------------------------------------------------------------#
# Show options form in Admin
#-----------------------------------------------------------------#
function webuza_options_show_admin()
{
    global $options;

    $message = '';
    if( isset( $_REQUEST['saved'] ) && ( $_REQUEST['saved'] ) ) {
        $message = '<div id="message" class="updated fade"><p><strong>' . WEBUZA_THEME_NAME . ' settings saved.</strong></p></div>';
    }
    if (isset ( $_REQUEST['reset'] ) && ( $_REQUEST['reset'] ) ) {
        $message = '<div id="message" class="updated fade"><p><strong>' . WEBUZA_THEME_NAME . ' settings reset.</strong></p></div>';
    }
    include('templates/view.php');
}

#-----------------------------------------------------------------#
# Init options in admin panel
#-----------------------------------------------------------------#
function webuza_options_add_init()
{
    wp_enqueue_media();
    wp_enqueue_script('media-upload');
    wp_enqueue_style('webuzaCss', get_template_directory_uri() . '/options/css/options.css', false, '1.0', 'all');
    wp_enqueue_script('jquery-ui-tabs');
    wp_enqueue_script('webuzaScript', get_template_directory_uri() . '/options/js/options.js', false, '1.0');
    wp_enqueue_script('jcolor-picker', get_template_directory_uri() . '/js/jscolor/jscolor.js', false, '1.4.1');
}

$option_page_name = 'webuza_options';
if ( isset ( $_GET['page'] ) && ( $_GET['page'] == $option_page_name ) ) {
    add_action( 'admin_init', 'webuza_options_add_init' );
}
add_action( 'admin_menu', 'webuza_options_add_admin' );

#-----------------------------------------------------------------#
# Show Import Dummy Data Button
#-----------------------------------------------------------------#
function webuza_options_import_data( $desc = '' ){
    $html = '';
    $html .= '<div class="options_input options_select">';
    $html .= '    <div class="options_desc">' . $desc . '</div>';
    $html .= '    <span class="labels"><label for="">' . __( 'Import Dummy Content: Posts, Pages, Categories' ) . '</label></span>';
    $html .= '<div class="button-controls">';
    $html .= '    <span class="submit import-dummy-data">';
    $html .= '        <input type="button" class="button" onclick="window.location.href=\'' . admin_url( 'admin.php?import=wordpress' ) . '\'" value="' . __( 'Import Dummy Data' ) . '" >';
    $html .= '    </span>';
    $html .= '</div>';
    $html .= '</div>';
    echo  $html;
}

#-----------------------------------------------------------------#
# Check And Repair Import Data
#-----------------------------------------------------------------#
function webuza_options_repair_data( $desc = '' ){

    $html = ''; ?>
    <script type="text/javascript">
        var checkRepair = function(){
            var ajaxurl = "/wp-admin/admin-ajax.php";
            var data = { action: "repair", chkrep: "1" };
            jQuery.post(ajaxurl, data, function(response) { alert(response); });
        };
    </script>
    <?php $html .= '<div class="options_input options_select">';
    $html .= '    <div class="options_desc">' . $desc . '</div>';
    $html .= '    <span class="labels"><label for="">' . __( 'Check And Repair Data After Import' ) . '</label></span>';
    $html .= '<div class="button-controls">';
    $html .= '    <span class="submit import-dummy-data">';
    $html .= '        <input id="chk" type="button" class="button" onclick="checkRepair();" value="' . __( 'Check And Repair' ) . '" >';
    $html .= '    </span>';
    $html .= '</div>';
    $html .= '</div>';
    echo  $html;
}

#-----------------------------------------------------------------#
# Sidebars Created
#-----------------------------------------------------------------#
function webuza_options_sidebar_created( $desc = '', $size = '50', $id = '1' ) {
    $html = '';
    $html .= '<input size="'. $size .'" name="sidebar_generator_'. $id .'" id="'. $id .'" type="text" value="" />';
    $html .= '<input name="save" type="submit" value="'. __( 'Add sidebar', WEBUZA_THEME_NAME ) .'" class="button" />';
    echo $html;
}

#-----------------------------------------------------------------#
# Sidebars Deleted
#-----------------------------------------------------------------#
function webuza_options_sidebar_deleted() {
    $get_sidebar_options = '';
    echo '<ul>';
    if( $get_sidebar_options != "" ) {
        $i = 1;
        foreach( $get_sidebar_options as $sidebar_class => $sidebar_gen ) {
            echo '<li id="sidebar_cell_'. $i .'">';
            echo '<strong>'. $sidebar_gen .'</strong>';
            echo '<input type="submit" name="sidebar_rm_'. $i .' id="'. $i .'" class="button" value="'. __('Delete', WEBUZA_THEME_NAME ) .'" />';
            echo '<img class="sidebar_rm_'. $i .'" style="display:none;" src="images/wpspin_light.gif" alt="'. __('Loading', WEBUZA_THEME_NAME ) .'" />';
            echo '<input id="sidebar_generator_'. $i .'" type="hidden" name="sidebar_generator_'. $i .'" value="'. $sidebar_class .'" />';
            echo '</li>';
            $i++;
        }
    }
    echo '</ul>';
}

#-----------------------------------------------------------------#
# Sidebars Settings
#-----------------------------------------------------------------#
function webuza_settings_field_custom_sidebar() {
    $wbz_sidebars = get_option( 'wbz_custom_sidebar' );
    $html = "<script type='text/javascript'>";
    $html .= '
                    var $ = jQuery;
                    $(document).ready(function(){
                        $(".new_sidebars, .register_sidebars").on("click", ".delete", function(){
                            $(this).parent().remove();
                        });
                        $("#add_sidebar").click(function(){
                            $(".new_sidebars ul.news_side").append("<li>"+$("#new_sidebar_name").val()+" <a href=\'#\' class=\'delete\'>'.__( "delete" ).'</a> <input type=\'hidden\' name=\'wbz_custom_sidebar[]\' value=\'"+$("#new_sidebar_name").val()+"\' /></li>");
                            $("#new_sidebar_name").val("");
                        })
                    })
        ';
    $html .= "</script>";
    $html .= "<div class='options_input options_select sidebar_management'>";
    $html .= "<label for='new_sidebar_name'>Add Sidebar</label>";
    $html .= "<div class='options_desc'>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</div>";
    $html .= "<p><input type='text' id='new_sidebar_name' /> <input class='button' type='button' id='add_sidebar' value='".__( "Add" )."' /></p>";
    $html .= "</div>";
    $html .= "<div class='options_divider'></div>";
    $html .= "<div class='options_input options_select new_sidebars'>";
    $html .= "<label for='new_sidebars'>New Sidebars</label>";
    $html .= "<ul class='news_side'></ul>";
    $html .= "</div>";
    $html .= "<div class='options_divider'></div>";
    $html .= "<div class='options_input options_select register_sidebars'>";
    $html .= "<label for='register_sidebars'>Register Sidebars</label>";
    $html .= "<ul>";
    if(isset($wbz_sidebars)) {
        $i = 0;
        foreach($wbz_sidebars as $sidebar) {
            $html .= "<li>".$sidebar." <a href='#' class='delete'>".__( "delete" )."</a> <input type='hidden' name='wbz_custom_sidebar[]' value='". $sidebar ."' /></li>";
            $i++;
        }
    }
    $html .= "</ul>";
    $html .= "</div>";
    $html .= "</div>";
    echo $html;
}