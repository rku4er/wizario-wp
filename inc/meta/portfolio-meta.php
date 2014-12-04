<?php

#-----------------------------------------------------------------#
# Create the Portfolio meta boxes
#-----------------------------------------------------------------#

add_action( 'add_meta_boxes', 'webuza_metabox_portfolio' );
function webuza_metabox_portfolio(){

    #-----------------------------------------------------------------#
    # Custom Extra Content
    #-----------------------------------------------------------------#
    $meta_box = array(
        'id' => 'webuza-metabox-portfolio-extra',
        'title' =>  __( 'Sidebar Content', WEBUZA_THEME_NAME ),
        'description' => __( 'Please use this section to place any extra content you would like to appear in the sidebar content.', WEBUZA_THEME_NAME ),
        'post_type' => 'portfolio',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => '',
                'desc' => '',
                'id' => '_webuza_portfolio_extra_content',
                'type' => 'editor',
                'std' => ''
            ),
        )
    );

    $callback = create_function( '$post,$meta_box', 'webuza_create_meta_box( $post, $meta_box["args"] );' );
    add_meta_box( $meta_box['id'], $meta_box['title'], $callback, $meta_box['post_type'], $meta_box['context'], $meta_box['priority'], $meta_box );



    #-----------------------------------------------------------------#
    # Custom Thumbnail
    #-----------------------------------------------------------------#
    $meta_box = array(
        'id' => 'webuza-metabox-custom-thummbnail',
        'title' =>  __( 'Project Thumbnail', WEBUZA_THEME_NAME ),
        'description' => __( 'If you would like to have a separate thumbnail for your portfolio item, upload it here. <br/> If left blank, a cropped version of your featured image will be automatically used instead.', WEBUZA_THEME_NAME ),
        'post_type' => 'portfolio',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __( 'Custom Thumbnail Image', WEBUZA_THEME_NAME ),
                'desc' => __( 'The recommended dimensions are 600px by 403px.', WEBUZA_THEME_NAME ),
                'id' => '_webuza_portfolio_custom_thumbnail',
                'type' => 'file',
                'std' => ''
            ),
        )
    );
    $callback = create_function( '$post,$meta_box', 'webuza_create_meta_box( $post, $meta_box["args"] );' );
    add_meta_box( $meta_box['id'], $meta_box['title'], $callback, $meta_box['post_type'], $meta_box['context'], $meta_box['priority'], $meta_box );


    #-----------------------------------------------------------------#
    # Custom Client
    #-----------------------------------------------------------------#
    $meta_box = array(
        'id' => 'webuza-metabox-portfolio-client',
        'title' =>  __( 'Portfolio Client (for portfolio sidebar)', WEBUZA_THEME_NAME ),
        'description' => __( 'If you need to input a few clients use <span style="color:#f7524a;">;</span> to separate them. Also you can add links for clients, but you need to add them with the same sequence.' ),
        'post_type' => 'portfolio',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __( 'Client Titles', WEBUZA_THEME_NAME ),
                'id' => '_webuza_portfolio_client_title',
                'type' => 'text',
                'std' => ''
            ),
            array(
                'name' => __( 'Client Links', WEBUZA_THEME_NAME ),
                'id' => '_webuza_portfolio_client_link',
                'type' => 'text',
                'std' => ''
            )
        )
    );
    add_meta_box( $meta_box['id'], $meta_box['title'], $callback, $meta_box['post_type'], $meta_box['context'], $meta_box['priority'], $meta_box );

    #-----------------------------------------------------------------#
    # Video
    #-----------------------------------------------------------------#
    $meta_box = array(
        'id' => 'webuza-metabox-portfolio-video',
        'title' => __( 'Video Settings', WEBUZA_THEME_NAME ),
        'description' => __( 'If you have a video, please fill out the fields below.', WEBUZA_THEME_NAME ),
        'post_type' => 'portfolio',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __( 'M4V File URL', WEBUZA_THEME_NAME ),
                'desc' => __( 'Enter in the URL to the .m4v video file', WEBUZA_THEME_NAME ),
                'id' => '_webuza_video_m4v',
                'type' => 'text',
                'std' => ''
            ),
            array(
                'name' => __( 'OGV File URL', WEBUZA_THEME_NAME ),
                'desc' => __( 'Enter in the URL to the .ogv video file', WEBUZA_THEME_NAME ),
                'id' => '_webuza_video_ogv',
                'type' => 'text',
                'std' => ''
            ),
            array(
                'name' => __( 'Video Height', WEBUZA_THEME_NAME ),
                'desc' => __( 'This only needs to be filled out if your self hosted video is not in a 16:9 aspect ratio. Enter your height based on an 845px width. This is used to calculate the iframe height for the "Watch Video" link. <br/> <strong>Don\'t include "px" in the string. e.g. 480</strong>', WEBUZA_THEME_NAME ),
                'id' => '_webuza_video_height',
                'type' => 'text',
                'std' => ''
            ),
            array(
                'name' => __( 'Preview Image', WEBUZA_THEME_NAME ),
                'desc' => __( 'Image should be at least 680px wide. Click the "Upload" button to begin uploading your image, followed by "Select File" once you have made your selection. Only applies to self hosted videos.', WEBUZA_THEME_NAME ),
                'id' => '_webuza_video_poster',
                'type' => 'file',
                'std' => ''
            ),
            array(
                'name' => __( 'Embedded Code', WEBUZA_THEME_NAME ),
                'desc' => __( 'If the video is an embed rather than self hosted, enter in a Youtube or Vimeo embed code here. The width should be a minimum of 670px with any height.', WEBUZA_THEME_NAME ),
                'id' => '_webuza_video_embed',
                'type' => 'textarea',
                'std' => ''
            )
        )
    );
    add_meta_box( $meta_box['id'], $meta_box['title'], $callback, $meta_box['post_type'], $meta_box['context'], $meta_box['priority'], $meta_box );

}