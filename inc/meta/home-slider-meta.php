<?php
/*-----------------------------------------------------------------*
*   Home Slider Meta Boxes
*-----------------------------------------------------------------*/

add_action( 'add_meta_boxes', 'webuza_metabox_home_slider' );
function webuza_metabox_home_slider(){

    $meta_box = array(
        'id' => 'webuza-metabox-home-slider',
        'title' => __( 'Slide Settings', WEBUZA_THEME_NAME ),
        'description' => __( 'If you want a full width header with background image, please fill out the fields below.', WEBUZA_THEME_NAME ),
        'post_type' => 'home_slider',
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __( 'Slide Image', WEBUZA_THEME_NAME ),
                'desc' => __( 'The image should be between 1600px - 2000px in width and have a minimum height of 700px for best results. Click the "Upload" button to begin uploading your image, followed by "Select File" once you have made your selection.', WEBUZA_THEME_NAME ),
                'id' => 'wbz_slider_image',
                'type' => 'file',
                'std' => ''
            ),
            array(
                'name' => __( 'Caption', WEBUZA_THEME_NAME ),
                'desc' => __( 'Enter in the slide caption. (should be fairly short)', WEBUZA_THEME_NAME ),
                'id' => 'wbz_slider_caption',
                'type' => 'text',
                'std' => ''
            ),
            array(
                'name' => __( 'Button Text', WEBUZA_THEME_NAME ),
                'desc' => __( 'If you would like a button to appear below your caption, please enter the text for it here.', WEBUZA_THEME_NAME ),
                'id' => 'wbz_slider_button',
                'type' => 'text',
                'std' => ''
            ),
            array(
                'name' => __( 'Button Link', WEBUZA_THEME_NAME ),
                'desc' => __( 'Please enter the URL for the button here.', WEBUZA_THEME_NAME ),
                'id' => 'wbz_slider_button_url',
                'type' => 'text',
                'std' => ''
            ),
            array(
                'name' => __( 'Slide Alignment', WEBUZA_THEME_NAME ),
                'desc' => __( 'Select the alignment for your caption and button.', WEBUZA_THEME_NAME ),
                'id' => 'wbz_slide_alignment',
                'type' => 'slide_alignment',
                'options' => array(
                    'left' => 'Left',
                    'centered' => 'Centered',
                    'right' => 'Right',
                ),
                'std' => 'left'
            ),
        )
    );
    $callback = create_function( '$post,$meta_box', 'webuza_create_meta_box( $post, $meta_box["args"] );' );
    add_meta_box( $meta_box['id'], $meta_box['title'], $callback, $meta_box['post_type'], $meta_box['context'], $meta_box['priority'], $meta_box );

    #-----------------------------------------------------------------#
    # Video
    #-----------------------------------------------------------------#
    $meta_box = array(
        'id' => 'webuza-metabox-portfolio-video',
        'title' => __( 'Slide Video Settings', WEBUZA_THEME_NAME ),
        'description' => __( 'If you want to feature a video in this slide, please fill out the fields below. <strong>Your video & image should be in a 16:9 aspect ratio.</strong>', WEBUZA_THEME_NAME ),
        'post_type' => 'home_slider',
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
                'name' => __( 'Preview Image', WEBUZA_THEME_NAME ),
                'desc' => __( 'Image should be at least 680px wide. Click the "Upload" button to begin uploading your image, followed by "Select File" once you have made your selection. Only applies to self hosted videos.', WEBUZA_THEME_NAME ),
                'id' => '_webuza_video_poster',
                'type' => 'file',
                'std' => ''
            ),
            array(
                'name' => __( 'Embedded Code', WEBUZA_THEME_NAME),
                'desc' => __( 'If the video is an embed rather than self hosted, enter in a Vimeo or Youtube embed code here. <strong> Embeds work worse with the parallax effect, but if you must use this, Vimeo is recommended. </strong> ', WEBUZA_THEME_NAME ),
                'id' => '_webuza_video_embed',
                'type' => 'textarea',
                'std' => ''
            )

        )
    );
    add_meta_box( $meta_box['id'], $meta_box['title'], $callback, $meta_box['post_type'], $meta_box['context'], $meta_box['priority'], $meta_box );

}