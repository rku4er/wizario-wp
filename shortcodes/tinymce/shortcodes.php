<?php
/*-----------------------------------------------------------------
* Declare ShortCodes
*-----------------------------------------------------------------*/


$yes_no_options = array( '1' => __( 'Yes', WEBUZA_THEME_NAME ), '0' => __( 'No', WEBUZA_THEME_NAME ) );
$short_codes = array();

#-----------------------------------------------------------------#
# Typography/Columns ShortCodes
#-----------------------------------------------------------------#

$short_codes[] = array(
    'title' => __( 'Typography', WEBUZA_THEME_NAME ),
    'name' => 'group-open'
);

/*** Headings ***/
$short_codes[] = array(
    'name' => 'heading',
    'title' => __( 'Headings', WEBUZA_THEME_NAME ),
    'content' => array( 'type' => 'textarea' ),
    'attr' => array(
        'type' => array(
            'title' => __( 'Html Tag (H1, H2, ..., H6)', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                ''   => __( 'Select heading...', WEBUZA_THEME_NAME ),
                'h1' => __( 'H1 heading', WEBUZA_THEME_NAME ),
                'h2' => __( 'H2 heading', WEBUZA_THEME_NAME ),
                'h3' => __( 'H3 heading', WEBUZA_THEME_NAME ),
                'h4' => __( 'H4 heading', WEBUZA_THEME_NAME ),
                'h5' => __( 'H5 heading', WEBUZA_THEME_NAME ),
                'h6' => __( 'H6 heading', WEBUZA_THEME_NAME )
            ),
            'std' => ''
        )
    )
);

/*** One Half ***/
$short_codes[] = array(
    'name' => 'one_half',
    'title' => __( 'One Half Column (1/2)', WEBUZA_THEME_NAME ),
    'content' => array( 'type' => 'textarea' ),
    'attr' => array(
        'is_last' => array(
            'title' => __( 'Is Last Column?', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => $yes_no_options,
            'std' => '0'
        ),
    )
);

/*** One Third ***/
$short_codes[] = array(
    'name' => 'one_third',
    'title' => __( 'One Third Column (1/3)', WEBUZA_THEME_NAME ),
    'content' => array( 'type' => 'textarea' ),
    'attr' => array(
        'is_last' => array(
            'title' => __( 'Is Last Column?', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => $yes_no_options,
            'std' => '0'
        ),
    )
);

/*** One Fourth ***/
$short_codes[] = array(
    'name' => 'one_fourth',
    'title' => __( 'One Fourth Column (1/4)', WEBUZA_THEME_NAME ),
    'content' => array( 'type' => 'textarea' ),
    'attr' => array(
        'is_last' => array(
            'title' => __( 'Is Last Column?', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => $yes_no_options,
            'std' => '0'
        ),
    )
);

/*** Two Thirds ***/
$short_codes[] = array(
    'name' => 'two_thirds',
    'title' => __( 'Two Thirds Column (2/3)', WEBUZA_THEME_NAME ),
    'content' => array( 'type' => 'textarea' ),
    'attr' => array(
        'is_last' => array(
            'title' => __( 'Is Last Column?', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => $yes_no_options,
            'std' => '0'
        ),
    )
);

/*** Three Fourth ***/
$short_codes[] = array(
    'name' => 'three_fourth',
    'title' => __( 'Three Fourth Column (3/4)', WEBUZA_THEME_NAME ),
    'content' => array( 'type' => 'textarea' ),
    'attr' => array(
        'is_last' => array(
            'title' => __( 'Is Last Column?', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => $yes_no_options,
            'std' => '0'
        ),
    )
);

/*** Dropcaps Letter ***/
$short_codes[] = array(
    'name' => 'dropcaps_letter',
    'title' => __( 'Drop Caps Letter', WEBUZA_THEME_NAME ),
    'content' => array( 'type' => 'text' ),
    'attr' => array(
        'color' => array(
            'title' => __( 'Letter color', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'class' => 'color',
            'std' => 'FF0000'
        ),
    )
);

/*** Dropcaps Number ***/
$short_codes[] = array(
    'name' => 'dropcaps_number',
    'title' => __( 'Drop Caps Number', WEBUZA_THEME_NAME ),
    'content' => array( 'type' => 'text' ),
    'attr' => array(
        'text_color' => array(
            'title' => __( 'Number color', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'class' => 'color',
            'std' => 'FFFFFF'
        ),
        'bkg_color' => array(
            'title' => __( 'Background color', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'class' => 'color',
            'std' => '000000'
        ),
    )
);

/*** Blockquote ***/
$short_codes[] = array(
    'name' => 'blockquote',
    'title' => __( 'Blockquote', WEBUZA_THEME_NAME ),
    'content' => array( 'type' => 'textarea' ),
    'attr' => array()
);

/*** Html Styles & Hightlights ***/
$short_codes[] = array(
    'name' => 'hightlight_text',
    'title' => __( 'Hightlight Text', WEBUZA_THEME_NAME ),
    'content' => array( 'type' => 'text' ),
    'attr' => array(
        'text_color' => array(
            'title' => __( 'Text color', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'class' => 'color',
            'std' => 'FFFFFF'
        ),
        'bkg_color' => array(
            'title' => __( 'Background color', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'class' => 'color',
            'std' => 'F7524A'
        ),
    )
);
/*** Tooltip Text ***/
$short_codes[] = array(
    'name' => 'tooltip_text',
    'title' => __( 'Tooltip Text', WEBUZA_THEME_NAME ),
    'content' => array( 'type' => 'text' ),
    'attr' => array(
        'text' => array(
            'title' => __( 'Tooltip Text', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => ''
        ),
        'text_color' => array(
            'title' => __( 'Text Color', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'class' => 'color',
            'std' => 'F7524A'
        ),
        'tooltip_text_color' => array(
            'title' => __( 'Tooltip Text Color', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'class' => 'color',
            'std' => 'FFFFFF'
        ),
        'bkg_tooltip_color' => array(
            'title' => __( 'Background Tooltip Color', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'class' => 'color',
            'std' => '000000'
        ),
    )
);

/*** Bullets List ***/
$short_codes[] = array(
    'name' => 'bullets_list',
    'title' => __( 'Bullets List (ul & ol)', WEBUZA_THEME_NAME ),
    'attr' => array(
        'bullets_color' => array(
            'title' => __( 'Bullets Color', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'class' => 'color',
            'std' => '000000'
        )
    )
);

/*** Numbers List ***/
$short_codes[] = array(
    'name' => 'numbers_list',
    'title' => __( 'Numbers List (ul & ol)', WEBUZA_THEME_NAME ),
    'attr' => array()
);

/*** Aligned items in text ***/
$short_codes[] = array(
    'name' => 'aligned_item',
    'title' => __( 'Left/Right Aligned Item (Image)', WEBUZA_THEME_NAME ),
    'attr' => array(
        'align' => array(
            'title' => __( 'Align by', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                'left' => __( 'Left', WEBUZA_THEME_NAME ),
                'right' => __( 'Right', WEBUZA_THEME_NAME )
            ),
            'std' => 'left'
        ),
        'margin_bottom' => array(
            'title' => __( 'Margin Bottom', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '20px'
        ),
    )
);

/*** Divider ***/
$short_codes[] = array(
    'name' => 'divider',
    'title' => __( 'Divider (hr)', WEBUZA_THEME_NAME ),
    'attr' => array(
        'color' => array(
            'title' => __( 'Color', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'class' => 'color',
            'std' => 'D8D8D8'
        )
    )
);

/*** Vertical Separator ***/
$short_codes[] = array(
    'name' => 'separator',
    'title' => __( 'Vertical Separator', WEBUZA_THEME_NAME ),
    'attr' => array(
        'height' => array(
            'title' => __( 'Height', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '20px'
        ),
        'width' => array(
            'title' => __( 'Width', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '100%'
        ),
        'float' => array(
            'title' => __( 'Float', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                'left' => __( 'Left', WEBUZA_THEME_NAME ),
                'right' => __( 'Right', WEBUZA_THEME_NAME ),
                'none' => __( 'None', WEBUZA_THEME_NAME ),
            ),
            'std' => 'none'
        ),
    )
);

$short_codes[] = array('name' => 'group-close');

#-----------------------------------------------------------------#
# Elements ShortCodes
#-----------------------------------------------------------------#

$short_codes[] = array(
    'title' => __( 'Elements', WEBUZA_THEME_NAME ),
    'name' => 'group-open'
);

/*** Tabs ***/
$short_codes[] = array(
    'name' => 'tabs',
    'title' => __( 'Tabs', WEBUZA_THEME_NAME ),
    'attr' => array(
        'tab' => array(
            'title' => __( 'Add Tab', WEBUZA_THEME_NAME ),
            'type' => 'add-button',
            'std' => '',
            'attr' => array(
                'title' => array(
                    'title' => __( 'Title', WEBUZA_THEME_NAME ),
                    'type' => 'text',
                ),
                'text' => array(
                    'title' => __( 'Content', WEBUZA_THEME_NAME ),
                    'type' => 'textarea',
                )
            )
        )
    )
);

/*** Toggles ***/
$short_codes[] = array(
    'name' => 'toggles',
    'title' => __( 'Toggles', WEBUZA_THEME_NAME ),
    'attr' => array(
        'toggle' => array(
            'title' => __( 'Add Toggle', WEBUZA_THEME_NAME ),
            'type' => 'add-button',
            'std' => '',
            'attr' => array(
                'title' => array(
                    'title' => __( 'Title', WEBUZA_THEME_NAME ),
                    'type' => 'text',
                ),
                'text' => array(
                    'title' => __( 'Content', WEBUZA_THEME_NAME ),
                    'type' => 'textarea',
                )
            )
        )
    )
);

/*** Table ***/
$short_codes[] = array(
    'name' => 'table',
    'title' => __( 'Table', WEBUZA_THEME_NAME ),
    'attr' => array(
        'columns' => array(
            'title' => __( 'Number Of Columns', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '4'
        ),
        'rows' => array(
            'title' => __( 'Number Of Rows', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '3'
        ),
        'add_thead' => array(
            'title' => __( 'Add thead?', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => $yes_no_options,
            'std' => '1'
        ),
        'add_tfoot' => array(
            'title' => __( 'Add tfoot?', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => $yes_no_options,
            'std' => '0'
        )
    )
);

/*** Alert Messages ***/
$short_codes[] = array(
    'name' => 'alert_message',
    'title' => __( 'Alert Message', WEBUZA_THEME_NAME ),
    'content' => array( 'type' => 'text' ),
    'attr' => array(
        'style' => array(
            'title' => __( 'Message Style', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                'red' => __( 'Red', WEBUZA_THEME_NAME ),
                'blue' => __( 'Blue', WEBUZA_THEME_NAME ),
                'green' => __( 'Green', WEBUZA_THEME_NAME ),
                'orange' => __( 'Orange', WEBUZA_THEME_NAME ),
            ),
            'std' => 'red'
        )
    )
);

/*** Promo Box ***/
$short_codes[] = array(
    'name' => 'promo_box',
    'title' => __( 'Promo Box', WEBUZA_THEME_NAME ),
    'attr' => array()
);

/*** Full Width Section ***/
$short_codes[] = array(
    'name' => 'full_width_section',
    'type'=>'custom',
    'title'=>__( 'Full Width Section', WEBUZA_THEME_NAME ),
    'attr' => array(
        'background_color' => array(
            'title'  => __( 'Background Color', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'class' => 'color',
            'std' => 'FFFFFF'
        ),
        'border_color' => array(
            'title'  => __( 'Border Top & Bottom Color', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'class' => 'color',
            'std' => 'E3E3E3'
        ),
        'top_padding' => array(
            'type'=>'text',
            'title'=>__( 'Top Padding', WEBUZA_THEME_NAME ),
            'desc' => __( 'Don\'nt include "px" in your string. e.g. 40', WEBUZA_THEME_NAME ),
        ),
        'bottom_padding' => array(
            'type'=>'text',
            'title'=>__( 'Bottom Padding', WEBUZA_THEME_NAME ),
            'desc' => __( 'Don\'nt include "px" in your string. e.g. 40', WEBUZA_THEME_NAME ),
        ),

    )
);

$short_codes[] = array( 'name' => 'group-close' );

#-----------------------------------------------------------------#
# Buttons ShortCodes
#-----------------------------------------------------------------#
$short_codes[] = array(
    'title' => __('Buttons', WEBUZA_THEME_NAME),
    'name' => 'group-open'
);

/*** Medium & Big Buttons ***/
$short_codes[] = array(
    'name' => 'button_custom',
    'title' => __( 'Button', WEBUZA_THEME_NAME ),
    'attr' => array(
        'size' => array(
            'title' => __( 'Size', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                'medium' => __( 'Medium', WEBUZA_THEME_NAME ),
                'large' => __( 'Large', WEBUZA_THEME_NAME )
            ),
            'std' => 'medium'
        ),
        'title' => array(
            'title' => __( 'Title', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => __( 'Button', WEBUZA_THEME_NAME )
        ),
        'link' => array(
            'title' => __( 'Link', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => ''
        )
    )
);

/*** Small Button ***/
$short_codes[] = array(
    'name' => 'button_small',
    'title' => __( 'Small Button', WEBUZA_THEME_NAME ),
    'attr' => array(
        'style' => array(
            'title' => __( 'Style', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                'red' => __( 'Red', WEBUZA_THEME_NAME ),
                'black' => __( 'Black', WEBUZA_THEME_NAME )
            ),
            'std' => 'red'
        ),
        'title' => array(
            'title' => __( 'Title', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => __( 'Button', WEBUZA_THEME_NAME )
        ),
        'link' => array(
            'title' => __( 'Link', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => ''
        )
    )
);

$short_codes[] = array( 'name' => 'group-close' );

#-----------------------------------------------------------------#
# Icons ShortCodes
#-----------------------------------------------------------------#
$short_codes[] = array(
    'title' => __( 'Icons', WEBUZA_THEME_NAME ),
    'name' => 'group-open'
);

/*** Social Icons ***/
$short_codes[] = array(
    'name' => 'social_icon',
    'title' => __( 'Social Icon', WEBUZA_THEME_NAME ),
    'attr' => array(
        'size' => array(
            'title' => __( 'Size', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                'icon-large' => __( 'Small', WEBUZA_THEME_NAME ),
                'icon-2x' => __( 'Medium', WEBUZA_THEME_NAME ),
                'icon-4x' => __( 'Large', WEBUZA_THEME_NAME ),
            ),
            'std' => 'small'
        ),
        'image' => array(
            'title' => __( 'Select Icon: ', WEBUZA_THEME_NAME ),
            'type' => 'social-icons'
        )
    )
);

/*** Standard Icons ***/
$short_codes[] = array(
    'name' => 'icon',
    'title' => __( 'Standard Icon', WEBUZA_THEME_NAME ),
    'attr' => array(
        'size' => array(
            'title' => __( 'Size', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                'icon-large' => __( 'Small', WEBUZA_THEME_NAME ),
                'icon-2x' => __( 'Medium', WEBUZA_THEME_NAME ),
                'icon-4x' => __( 'Large', WEBUZA_THEME_NAME ),
            ),
            'std' => 'small'
        ),
        'image' => array(
            'type' => 'icons'
        )
    )
);

/*** Custom Icons ***/
$short_codes[] = array(
    'name' => 'custom_icon',
    'title' => __( 'Set Your Style for Icon', WEBUZA_THEME_NAME ),
    'attr' => array(
        'size' => array(
            'title' => __( 'Size', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '30px'
        ),
        'color' => array(
            'title' => __( 'Color', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'class' => 'color',
            'std' => '000000'
        ),
        'bkg_color' => array(
            'title' => __( 'Background Color', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'class' => 'color',
            'std' => 'FFFFFF'
        ),
        'border_width' => array(
            'title' => __( 'Border Width', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '6px'
        ),
        'border_radius' => array(
            'title' => __( 'Border radius (50% - icon is in circle)', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '0px'
        ),
        'padding' => array(
            'title' => __( 'Padding', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '20px'
        ),
        'margin_bottom' => array(
            'title' => __( 'Margin Bottom', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => 'auto'
        ),
        'custom_image' => array(
            'title' => __( 'Custom Image', WEBUZA_THEME_NAME ),
            'type' => 'img-upload'
        ),
        'image' => array(
            'type' => 'icons'
        ),
    )
);

/*** Custom Icons for Main Services ***/
$short_codes[] = array(
    'name' => 'main_services',
    'title' => __( 'Main Services (Big Icon with text and button)', WEBUZA_THEME_NAME ),
    'content' => array('type' => 'textarea'),
    'attr' => array(
        'title' => array(
            'title' => __( 'Title', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => 'Custom Icon Title'
        ),
        'size' => array(
            'title' => __( 'Size', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '60px'
        ),
        'color' => array(
            'title' => __( 'Color', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'class' => 'color',
            'std' => 'A32BFF'
        ),
        'bkg_color' => array(
            'title' => __( 'Background Color', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'class' => 'color',
            'std' => 'EBEBEB'
        ),
        'border_width' => array(
            'title' => __( 'Border Width', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '0px'
        ),
        'border_radius' => array(
            'title' => __( 'Border radius (50% - icon is in circle)', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '50%'
        ),
        'padding' => array(
            'title' => __( 'Padding', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '35px'
        ),
        'custom_image' => array(
            'title' => __( 'Custom Image', WEBUZA_THEME_NAME ),
            'type' => 'img-upload'
        ),
        'image' => array(
            'type' => 'icons'
        ),
    )
);

$short_codes[] = array( 'name' => 'group-close' );

#-----------------------------------------------------------------#
# Others ShortCodes
#-----------------------------------------------------------------#
$short_codes[] = array(
    'title' => __( 'Others', WEBUZA_THEME_NAME ),
    'name' => 'group-open'
);

/*** Custom Archives ***/
$short_codes[] = array(
    'name' => 'custom_archives',
    'title' => __( 'Custom Archives', WEBUZA_THEME_NAME ),
    'attr' => array(
        'title' => array(
            'title' => __( 'Title', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => 'Archive'
        ),
        'items' => array(
            'title' => __( 'Number of Items', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '10'
        ),
        'type' => array(
            'title' => __( 'Type', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                'yearly' => __( 'yearly', WEBUZA_THEME_NAME ),
                'monthly' => __( 'monthly', WEBUZA_THEME_NAME ),
                'daily' => __( 'daily', WEBUZA_THEME_NAME ),
                'weekly' => __( 'weekly', WEBUZA_THEME_NAME ),
            ),
            'std' => 'monthly'
        ),
        'column' => array(
            'title' => __( 'Number of Columns', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                '1' => __( '1 Column', WEBUZA_THEME_NAME ),
                '2' => __( '2 Columns', WEBUZA_THEME_NAME ),
            ),
            'std' => '2'
        )
    )
);

/*** Bar Graph ***/
$short_codes[] = array(
    'name' => 'bar_graphs',
    'title' => __( 'Bar Graphs Section', WEBUZA_THEME_NAME ),
    'attr' => array(
        'bar_graph' => array(
            'title' => __( 'Add Bar Graph', WEBUZA_THEME_NAME ),
            'type' => 'add-button',
            'std' => '',
            'attr' => array(
                'title' => array(
                    'title' => __( 'Title', WEBUZA_THEME_NAME ),
                    'type' => 'text',
                ),
                'bar_percent' => array(
                    'title' => __( 'Bar Percent', WEBUZA_THEME_NAME ),
                    'type' => 'text',
                )
            )
        )
    )
);

/*** Carousel ***/
$short_codes[] = array(
    'name' => 'carousel',
    'title' => __( 'Carousel', WEBUZA_THEME_NAME ),
    'attr' => array(
        'items' => array(
            'title' => __( 'Number of Items', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '5'
        ),
        'visible_items' => array(
            'title' => __( 'Number of Visible Items', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '4'
        )
    )
);

/*** Testimonial Slider ***/
$short_codes[] = array(
    'name' => 'testimonial_slider',
    'title'=> __( 'Testimonial Slider', WEBUZA_THEME_NAME ),
    'attr'=>array(
        'autorotate' => array(
            'title' => __( 'Autorotate', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '5000'
        ),
        'testimonial' => array(
            'title' => __( 'Add Testimonial', WEBUZA_THEME_NAME ),
            'type' => 'add-button',
            'content' => array( 'type' => 'textarea' ),
            'attr' => array(
                'name' => array(
                    'title' => __( 'Name', WEBUZA_THEME_NAME ),
                    'type' => 'text',
                ),
                'quote' => array(
                    'title' => __( 'Quote', WEBUZA_THEME_NAME ),
                    'type' => 'text',
                )
            )
        )
    )
);

/*** Team Member ***/
$short_codes[] = array(
    'name' => 'team_members',
    'title' => __( 'Team Member Section', WEBUZA_THEME_NAME ),
    'attr' => array(
        'columns' => array(
            'title' => __( 'Members in One Line', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                '2' => __( '2 Columns', WEBUZA_THEME_NAME ),
                '3' => __( '3 Columns', WEBUZA_THEME_NAME ),
                '4' => __( '4 Columns', WEBUZA_THEME_NAME ),
                '5' => __( '5 Columns', WEBUZA_THEME_NAME ),
                '6' => __( '6 Columns', WEBUZA_THEME_NAME ),
            ),
            'std' => '3'
        ),
        'team_member' => array(
            'title' => __( 'Add Team Members', WEBUZA_THEME_NAME ),
            'type' => 'add-button',
            'content' => array( 'type' => 'textarea' ),
            'std' => '',
            'attr' => array(
                'image' => array(
                    'title' => __( 'Member Image', WEBUZA_THEME_NAME ),
                    'type' => 'img-upload',
                ),
                'member_url' => array(
                    'title' => __( 'Member URL', WEBUZA_THEME_NAME ),
                    'type' => 'text',
                ),
                'name' => array(
                    'title' => __( 'Member Name', WEBUZA_THEME_NAME ),
                    'type' => 'text',
                ),
                'job' => array(
                    'title' => __( 'Member job', WEBUZA_THEME_NAME ),
                    'type' => 'text',
                )
            )
        )
    )
);

/*** Prising Plans ***/
$short_codes[] = array(
    'name' => 'prising_plan',
    'title' => __( 'Prising Plan', WEBUZA_THEME_NAME ),
    'attr' => array(
        'columns' => array(
            'title' => __( 'Columns', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                '1' => __( '1 Column', WEBUZA_THEME_NAME ),
                '2' => __( '2 Columns', WEBUZA_THEME_NAME ),
                '3' => __( '3 Columns', WEBUZA_THEME_NAME ),
                '4' => __( '4 Columns', WEBUZA_THEME_NAME )
            ),
            'std' => '3'
        )
    )
);

/*** Promo Teasers ***/
$short_codes[] = array(
    'name' => 'promo_teasers',
    'title' => __( 'Promo Teasers', WEBUZA_THEME_NAME ),
    'attr' => array(
        'columns' => array(
            'title' => __( 'Columns', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                '2' => __( '2 Columns', WEBUZA_THEME_NAME ),
                '3' => __( '3 Columns', WEBUZA_THEME_NAME ),
            ),
            'std' => '3'
        ),
    )
);

/*** Recent Posts ***/
$short_codes[] = array(
    'name' => 'recent_posts',
    'title' => __( 'Recent Posts', WEBUZA_THEME_NAME ),
    'attr' => array(
        'ids' => array(
            'title' => __( 'Posts Ids (if Ids is not entered manually, it will be assigned automatically)', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => ''
        ),
        'view_all' => array(
            'title' => __( 'View All Link', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '#'
        ),
        'columns' => array(
            'title' => __( 'Columns', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                '2' => __( '2 Columns', WEBUZA_THEME_NAME ),
                '3' => __( '3 Columns', WEBUZA_THEME_NAME ),
                '4' => __( '4 Columns', WEBUZA_THEME_NAME ),
            ),
            'std' => '3'
        ),
        'format' => array(
            'title' => __( 'Format', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                'full' => __( 'full', WEBUZA_THEME_NAME ),
                'short' => __( 'short', WEBUZA_THEME_NAME ),
            ),
            'std' => 'full'
        )
    )
);

/*** Recent Projects ***/
$short_codes[] = array(
    'name' => 'recent_projects',
    'title' => __( 'Recent Projects', WEBUZA_THEME_NAME ),
    'attr' => array(
        'number' => array(
            'title' => __( 'The Number of Projects', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                '3' => __( '3 Projects', WEBUZA_THEME_NAME ),
                '6' => __( '6 Projects', WEBUZA_THEME_NAME ),
                '9' => __( '9 Projects', WEBUZA_THEME_NAME ),
                '12' => __( '12 Projects', WEBUZA_THEME_NAME ),
            ),
            'std' => '6'
        ),
        'view_all' => array(
            'title' => __( 'View All Link', WEBUZA_THEME_NAME ),
            'type' => 'text',
            'std' => '#'
        ),
        'columns' => array(
            'title' => __( 'Columns', WEBUZA_THEME_NAME ),
            'type' => 'select',
            'options' => array(
                '1' => __( '1 Columns', WEBUZA_THEME_NAME ),
                '2' => __( '2 Columns', WEBUZA_THEME_NAME ),
                '3' => __( '3 Columns', WEBUZA_THEME_NAME ),
            ),
            'std' => '3'
        ),
    )
);

$short_codes[] = array( 'name' => 'group-close' );