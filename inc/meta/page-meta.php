<?php
/*-----------------------------------------------------------------*
*   Page Meta
*-----------------------------------------------------------------*/


add_action( 'add_meta_boxes', 'webuza_metabox_page' );

function webuza_metabox_page(){

    #-----------------------------------------------------------------#
    # Header Settings
    #-----------------------------------------------------------------#
    $meta_box = array(
        'id' => 'webuza-metabox-page-header',
        'title' => __( 'Page Header Settings', WEBUZA_THEME_NAME ),
        'description' => __( 'Here you can configure how your page header will appear. <br/> For a full width background image behind your header text, simply upload the image below. To have a standard header just fill out the fields below and don\'t upload an image.', WEBUZA_THEME_NAME ),
        'post_type' => 'page',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __( 'Page Header Show', WEBUZA_THEME_NAME ),
                'desc' => __( 'Show header on page', WEBUZA_THEME_NAME ),
                'id' => '_webuza_header_show',
                'type' => 'checkbox',
                'std' => 'on'
            ),
            array(
                'name' => __( 'Page Header Style', WEBUZA_THEME_NAME ),
                'desc' => __( 'Header will have selected style.', WEBUZA_THEME_NAME ),
                'id' => '_webuza_header_style',
                'type' => 'select',
                'options' => array(
                    'style1' => 'Style 1',
                    'style2' => 'Style 2'
                ),
                'std' => 'style1'
            ),
            array(
                'name' => __( 'Page Header Image', WEBUZA_THEME_NAME ),
                'desc' => __( 'The image should be between 1600px - 2000px wide and have a minimum height of 475px for best results. Click "Browse" to upload and then "Insert into Post".', WEBUZA_THEME_NAME ),
                'id' => '_webuza_header_bg',
                'type' => 'file',
                'std' => ''
            ),
            array(
                'name' => __( 'Page Header Height', WEBUZA_THEME_NAME ),
                'desc' => __( 'How tall do you want your header? <br/>Don\'t include "px" in the string. e.g. 350 <br/><strong>This only applies when you are using an image.</strong>', WEBUZA_THEME_NAME ),
                'id' => '_webuza_header_bg_height',
                'type' => 'text',
                'std' => ''
            ),
            array(
                'name' => __( 'Page Header Align', WEBUZA_THEME_NAME ),
                'id' => '_webuza_header_align',
                'type' => 'select',
                'options' => array(
                    'left' => 'left',
                    'center' => 'center',
                    'right' => 'right'
                ),
                'std' => 'left'
            ),
            array(
                'name' => __( 'Page Header Super Title', WEBUZA_THEME_NAME ),
                'desc' => __( 'Super Title will be shown above the Title.', WEBUZA_THEME_NAME ),
                'id' => '_webuza_header_supertitle',
                'type' => 'text',
                'std' => ''
            ),
            array(
                'name' => __( 'Page Header Title', WEBUZA_THEME_NAME ),
                'desc' => __( 'This title will shown instead of default page title.', WEBUZA_THEME_NAME ),
                'id' => '_webuza_header_title',
                'type' => 'text',
                'std' => ''
            ),
            array(
                'name' => __( 'Page Header Subtitle', WEBUZA_THEME_NAME ),
                'desc' => __( 'Super Title will be shown below the Title', WEBUZA_THEME_NAME ),
                'id' => '_webuza_header_subtitle',
                'type' => 'text',
                'std' => ''
            )
        )
    );

    $callback = create_function( '$post,$meta_box', 'webuza_create_meta_box( $post, $meta_box["args"] );' );
    add_meta_box( $meta_box['id'], $meta_box['title'], $callback, $meta_box['post_type'], $meta_box['context'], $meta_box['priority'], $meta_box );
}
