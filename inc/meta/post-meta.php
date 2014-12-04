<?php

add_action( 'add_meta_boxes', 'webuza_metabox_posts' );
function webuza_metabox_posts(){

    #-----------------------------------------------------------------#
    # Gallery
    #-----------------------------------------------------------------# 
    $meta_box = array(
        'id' => 'webuza-metabox-post-gallery',
        'title' =>  __( 'Gallery Settings', WEBUZA_THEME_NAME ),
        'description' => __( 'Please use the sections that have appeared under the Featured Image block labeled "Second Slide, Third Slide..." etc to add images to your gallery.', WEBUZA_THEME_NAME ),
        'post_type' => 'post',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(

        )
    );
    $callback = create_function( '$post,$meta_box', 'webuza_create_meta_box( $post, $meta_box["args"] );' );
    add_meta_box( $meta_box['id'], $meta_box['title'], $callback, $meta_box['post_type'], $meta_box['context'], $meta_box['priority'], $meta_box );

    #-----------------------------------------------------------------#
    # Quote
    #-----------------------------------------------------------------# 
    $meta_box = array(
        'id' => 'webuza-metabox-post-quote',
        'title' =>  __( 'Quote Settings', WEBUZA_THEME_NAME ),
        'description' => '',
        'post_type' => 'post',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' =>  __( 'Quote Content', WEBUZA_THEME_NAME ),
                'desc' => __( 'Please type the text for your quote here.', WEBUZA_THEME_NAME ),
                'id' => '_webuza_quote',
                'type' => 'textarea',
                'std' => ''
            )
        )
    );
    add_meta_box( $meta_box['id'], $meta_box['title'], $callback, $meta_box['post_type'], $meta_box['context'], $meta_box['priority'], $meta_box );

    #-----------------------------------------------------------------#
    # Link
    #-----------------------------------------------------------------# 
    $meta_box = array(
        'id' => 'webuza-metabox-post-link',
        'title' => __( 'Link Settings', WEBUZA_THEME_NAME ),
        'description' => '',
        'post_type' => 'post',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __( 'Link URL', WEBUZA_THEME_NAME ),
                'desc' => __( 'Please input the URL for your link. I.e. http://www.themewebuza.com', WEBUZA_THEME_NAME ),
                'id' => '_webuza_link',
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
        'id' => 'webuza-metabox-post-video',
        'title' => __('Video Settings', 'webuza'),
        'description' => '',
        'post_type' => 'post',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __( 'M4V File URL', WEBUZA_THEME_NAME ),
                'desc' => __( 'Please enter in the URL to your .m4v video file', WEBUZA_THEME_NAME ),
                'id' => '_webuza_video_m4v',
                'type' => 'text',
                'std' => ''
            ),
            array(
                'name' => __( 'OGV File URL', WEBUZA_THEME_NAME ),
                'desc' => __( 'Please enter in the URL to your .ogv video file', WEBUZA_THEME_NAME ),
                'id' => '_webuza_video_ogv',
                'type' => 'text',
                'std' => ''
            ),
            array(
                'name' => __( 'Preview Image', WEBUZA_THEME_NAME ),
                'desc' => __( 'This will be the image displayed when the video has not been played yet. The image should be at least 680px wide. Click the "Upload" button to begin uploading your image, followed by "Select File" once you have made your selection.', WEBUZA_THEME_NAME ),
                'id' => '_webuza_video_poster',
                'type' => 'file',
                'std' => ''
            ),
            array(
                'name' => __( 'Embedded Code', WEBUZA_THEME_NAME ),
                'desc' => __( 'If the video is an embed rather than self hosted, enter in a Youtube or Vimeo embed code here. The width should be a minimum of 670px.', WEBUZA_THEME_NAME ),
                'id' => '_webuza_video_embed',
                'type' => 'textarea',
                'std' => ''
            )
        )
    );
    add_meta_box( $meta_box['id'], $meta_box['title'], $callback, $meta_box['post_type'], $meta_box['context'], $meta_box['priority'], $meta_box );

    #-----------------------------------------------------------------#
    # Audio
    #-----------------------------------------------------------------# 
    $meta_box = array(
        'id' => 'webuza-metabox-post-audio',
        'title' =>  __( 'Audio Settings', WEBUZA_THEME_NAME ),
        'description' => '',
        'post_type' => 'post',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __( 'MP3 File URL', WEBUZA_THEME_NAME ),
                'desc' => __( 'Please enter in the URL to the .mp3 file', WEBUZA_THEME_NAME ),
                'id' => '_webuza_audio_mp3',
                'type' => 'text',
                'std' => ''
            ),
            array(
                'name' => __( 'OGA File URL', WEBUZA_THEME_NAME ),
                'desc' => __( 'Please enter in the URL to the .ogg or .oga file', WEBUZA_THEME_NAME ),
                'id' => '_webuza_audio_ogg',
                'type' => 'text',
                'std' => ''
            )
        )
    );
    add_meta_box( $meta_box['id'], $meta_box['title'], $callback, $meta_box['post_type'], $meta_box['context'], $meta_box['priority'], $meta_box );


    $meta_box = array(
        'id' => 'custom_sidebar',
        'title' => __( 'Custom Sidebar', WEBUZA_THEME_NAME ),
        'description' => '',
        'post_type' => 'post',
        'context' => 'side',
        'priority' => 'high',
        'callback' => 'custom_sidebar_callback'
    );
     add_meta_box( $meta_box['id'], $meta_box['title'], $meta_box['callback'], $meta_box['post_type'], $meta_box['context'], $meta_box['priority'], $meta_box );

}