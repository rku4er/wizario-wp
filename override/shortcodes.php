<?php
// Clean HTML from empty <p> and <br />
function cleanHTML($string){
    $regexpArray = array(
        '/^\s*<\/p>/',
        '/<p>\s*$/',
        '/<p>\s*<\/p>/',
        '/(?<=>)\s*<br\s*\/?>\s*(?=<)/'
    );

    $output = preg_replace( $regexpArray, '', $string );
    $output = preg_replace( '/<p>\s*(\[\/?\w[^]]*?\])\s*<\/p>/', '$1', $output );
    $output = preg_replace( '/\s?<br\s?[^>?]>\s?/', '', $output );
    /*$output = preg_replace( '/(\[\/.*?\])+\s*(<\/p>)?/', '$2$1', $output );
    $output = preg_replace( '/(<p>)?\s*(\[[^\/].*?\])+/', '$2$1', $output );*/

    return $output;
}

// socials
add_shortcode( 'socials', 'shoestrap_socials' );
function shoestrap_socials( $attr, $content = null ){
    extract(
        shortcode_atts( array(
            'location' => __('Location', WEBUZA_THEME_NAME),
            'items' => __( 'Social Networks', WEBUZA_THEME_NAME ),
            'color' => __( 'Icon Color', WEBUZA_THEME_NAME )
        ), $attr )
    );

    $location = $attr['location'] ? $attr['location'] : 'footer';

    $items = explode ( ',' , $items );

    foreach( $items as $item ){
        $content .= '<li><a class="fa fa-'. $item .'" target="_blank" href="#'. $item .'"></a></li>';
    }

    return '<ul class="'.$location.'-social-links">'.$content.'</ul>';
}

// site-address
add_shortcode( 'address', 'shoestrap_address' );
function shoestrap_address( $attr, $content = null ){
    extract( shortcode_atts( array( ), $attr ) );

    return '<div class="site-address">'.do_shortcode( $content ).'</div>';
}

// Icon
add_shortcode( 'my_icon', 'shoestrap_icon' );
function shoestrap_icon( $attr ){
    extract(
        shortcode_atts( array(
            'slug' => __( 'Icon Slug', WEBUZA_THEME_NAME )
        ), $attr )
    );

    return '<i class="fa fa-'. $slug .'"></i>';
}

// lorem-block
add_shortcode( 'lorem_block', 'shoestrap_lorem_block' );
function shoestrap_lorem_block( $attr, $content = null ){
    extract( shortcode_atts( array(), $attr ) );

    return '<div class="lorem-block">'.do_shortcode( $content ).'</div>';
}

// sp-list
add_shortcode( 'sp_list', 'shoestrap_sp_list' );
function shoestrap_sp_list( $attr, $content = null ){
    extract( shortcode_atts( array(), $attr ) );

    $content = do_shortcode( $content );
    $content = str_replace( '<ul>', '<ul class="sp-list">', $content );

    return $content;
}

// Best Proposal Wrap
add_shortcode( 'best_prop_wrap', 'shoestrap_best_prop_wrap' );
function shoestrap_best_prop_wrap( $attr, $content = null ){
    extract(
        shortcode_atts( array(
            'bg_color' => __( 'Background Color', WEBUZA_THEME_NAME ),
            'title' => __( 'Title', WEBUZA_THEME_NAME ),
            'tagline' => __( 'Tagline', WEBUZA_THEME_NAME )
        ), $attr )
    );

    $content = cleanHTML($content);
    $content = do_shortcode( $content );
    $props = explode( '<endcontent>', $content );
    $content = '';
    $width = 12/(count($props)-1);
    foreach( $props as $prop ){
        $content .= $prop;
    }

    $content = preg_replace( '/class="prop-block/', '$0 col-sm-' . $width . ' col-md-' . $width , $content );

    return '<section class="best-prop-block" style="background-color:'.$bg_color.'">'.
            '<div class="container">'.
                '<h2 class="lg-h">'.$title.'</h2>'.
                '<h4 class="lg-h-subcaption">'.$tagline.'</h4>'.
                '<div class="row">'.$content.'</div>'.
            '</div>'.
        '</section>';
}

// Best Proposal
add_shortcode( 'best_prop', 'shoestrap_best_prop' );
function shoestrap_best_prop( $attr, $content = null ){
    extract(
        shortcode_atts( array(
            //'col_class' => __( 'Column Class', WEBUZA_THEME_NAME ),
            'url' => __( 'Link URL', WEBUZA_THEME_NAME )
        ), $attr )
    );

    $content = cleanHTML($content);
    $content = preg_replace( '/<p[^>]*?>(<img[^>]*?>)<\/p>/', '<div class="prop-thumb">$1</div>', $content );

    return '<div class="prop-block">'.
            '<a href="'.$url.'" class="waves-effect waves-light js-has-link">'.
                '<div class="prop-content-block">'.do_shortcode( $content ).'</div>'.
            '</a>'.
        '</div>'.
        '<endcontent>';
}

// Parallax section
add_shortcode( 'parallax', 'shoestrap_parallax' );
function shoestrap_parallax( $attr, $content = null ){
    extract(
        shortcode_atts( array(
            'bg_image' => __( 'Background Image', WEBUZA_THEME_NAME )
        ), $attr )
    );

    $content = cleanHTML($content);
    $content = do_shortcode( $content );

    return '<section class="parallax-back" id="js-parallax-back" style="background-image: url('.$bg_image.')">'.
            '<div id="trigger-parallax_2"></div>'.
            '<div class="container">'.
                '<div class="row">'.$content.'</div>'.
            '</div>'.
        '</section>';
}

// Button
add_shortcode( 'button', 'shoestrap_button' );
function shoestrap_button( $attr ){
    extract(
        shortcode_atts(array(
            'size' => __( 'Size', WEBUZA_THEME_NAME ),
            'type' => __( 'Type', WEBUZA_THEME_NAME ),
            'title' => __( 'Title', WEBUZA_THEME_NAME ),
            'url' => __( 'URL', WEBUZA_THEME_NAME )
        ), $attr )
    );

    $size = $size ? $size : 'btn-md';
    $type = $type ? $type : 'btn-primary';
    $title = $title ? $title : '';
    $url = $url ? $url : '#';

    return '<a href="'.$url.'" class="btn waves-effect waves-button '.$size.' '.$type.'">'.$title.'</a>';
}

/*** Full Width Section ***/
add_shortcode( 'fullwidth', 'webuza_fullwidth_container' );
function webuza_fullwidth_container( $attr, $content = null ){
    extract(
        shortcode_atts(
            array(
                'bg_color' => 'transparent'
            ), $attr )
    );
    return '<div class="collapse-block" style="background-color:#'.$bg_color.'"><div class="container">' . do_shortcode( cleanHTML($content) ) . '</div></div>';
}

/***** Columns *****/

/*** One Half ***/
add_shortcode('one_half', 'webuza_one_half');
function webuza_one_half( $attr, $content = null ){
    extract( shortcode_atts( array(), $attr ) );
    $class = 'col-md-6 col-sm-6';
    return '<div class="' . $class. '">'. do_shortcode( cleanHTML($content) ) . '</div>';
}

/*** One Third ***/
add_shortcode( 'one_third', 'webuza_one_third' );
function webuza_one_third( $attr, $content = null ){
    extract( shortcode_atts( array(), $attr ) );
    $class = 'col-md-4 col-sm-4';
    return '<div class="' . $class. '">'. do_shortcode( cleanHTML($content) ) . '</div>';
}

/*** One Fourth ***/
add_shortcode( 'one_fourth', 'webuza_one_fourth' );
function webuza_one_fourth( $attr, $content = null ){
    extract( shortcode_atts( array(), $attr ) );
    $class = 'col-md-3 col-sm-3';
    return '<div class="' . $class. '">'. do_shortcode( cleanHTML($content) ) . '</div>';
}

/*** Two Thirds ***/
add_shortcode('two_thirds', 'webuza_two_thirds');
function webuza_two_thirds( $attr, $content = null ){
    extract( shortcode_atts( array(), $attr ) );
    $class = 'col-md-8 col-sm-8';
    return '<div class="' . $class. '">'. do_shortcode( cleanHTML($content) ) . '</div>';
}

/*** Tree Fourth ***/
add_shortcode ( 'three_fourth', 'webuza_three_fourth' );
function webuza_three_fourth( $attr, $content = null ){
    extract( shortcode_atts( array(), $attr ) );
    $class = 'col-md-9 col-sm-9';
    return '<div class="' . $class. '">'. do_shortcode( cleanHTML($content) ) . '</div>';
}


/*** Divider (hr) ***/
add_shortcode( 'divider', 'webuza_divider' );
function webuza_divider( $attr, $content = null ){
    extract( shortcode_atts( array( 'color' => __( 'Color', WEBUZA_THEME_NAME ), ), $attr ) );
    return '<div class="clearfix"></div><hr style="background-color: #' . $color . '" />';
}

/*** Dropcaps ***/
add_shortcode( 'dropcaps', 'webuza_dropcaps' );
function webuza_dropcaps( $attr, $content = null ){
    extract(
        shortcode_atts( array(
            'type' => __('Type', WEBUZA_THEME_NAME),
            'text_color' => __( 'Text Color', WEBUZA_THEME_NAME ),
            'bg_color' => __( 'Background Color', WEBUZA_THEME_NAME )
        ), $attr)
    );
    $style = ' style="color: #' . $text_color . '; background-color: #' . $bkg_color . '"';
    return '<span class="dropcaps '. $type .'-letter" ' . $style. '>'. do_shortcode( $content ) . '</span>';
}

/*** Hightlight Text ***/
add_shortcode( 'hightlight_text', 'webuza_hightlight_text' );
function webuza_hightlight_text( $attr, $content = null ){
    extract(
        shortcode_atts(array(
            'text_color' => __( 'Text Color', WEBUZA_THEME_NAME ),
            'bkg_color' => __( 'Background Color', WEBUZA_THEME_NAME )
        ), $attr )
    );

    $style = ' style="color: #' . $text_color . '; background-color: #' . $bkg_color . '"';
    return '<span ' . $style. '>'. do_shortcode( $content ) . '</span>';
}

/*** Tooltip Text ***/
add_shortcode( 'tooltip', 'webuza_tooltip' );
function webuza_tooltip( $attr, $content = null ){
    extract(
        shortcode_atts( array(
            'text' => __( 'Tooltip Text', WEBUZA_THEME_NAME ),
            'position' => 'top',
        ), $attr )
    );

    return '<a title="'.$text.'" data-toggle="tooltip" href="#" data-placement="'.$position.'">'.$content.'</a>';
}

/*** Testimonial Slider ***/
add_shortcode('testimonial_slider', 'webuza_testimonial_slider');
function webuza_testimonial_slider($atts, $content = null) {
    extract( shortcode_atts( array( 'interval' => '5000' ), $atts ) );
    $content = do_shortcode( str_replace( array( '<br>', '<br />', '&nbsp' ), '', $content ) );
    return '<div class="col span_12 carousel slide" data-interval="'. $interval .'"><div class="carousel-inner" role="listbox">'. $content .'</div></div>';
}

/*** Testimonial (for Testimonial Slider) ***/
add_shortcode('testimonial', 'webuza_testimonial');
function webuza_testimonial( $atts, $content = null ) {
    extract( shortcode_atts( array( 'name' => '', "quote" => '' ), $atts ) );

    return '<blockquote class="item"><p>"'. $quote .'"</p>'. '<span>&minus; '. $name .'</span></blockquote>';
}

/*** Tabs ***/
add_shortcode( 'tabs', 'webuza_tabs' );
function webuza_tabs( $attr, $content = null ){
    extract(
        shortcode_atts(
            array(
                'style' => 'regular', // regular, bordered, pills
                'orientation' => 'horizontal', // horizontal, vertical
            ), $attr )
    );
    $vertical = $orientation=='vertical' ? '-vertical nav-stacked' : '';
    $class = ($style=='regular' ? 'nav-tabs'.$vertical : ($style=='bordered' ? 'nav-tabs-bordered'.$vertical : ($style=='pills' ? 'nav-pills'.$vertical : '')));
    $content = do_shortcode( preg_replace( "/\s?<br\s?[^>?]>\s?/", '', $content ) );
    $tabs = explode( '<endcontent>', $content );
    $titles = '<ul class="nav '.$class.'" role="tablist">';
    $content = '';
    foreach( $tabs as $tab ){
        $title_content = explode( '<endtitle>', $tab );
        $titles .= $title_content[0];
        $content .= $title_content[1];
    }
    $titles .= '</ul>';
    return '<div role="tabpanel">'.($vertical ? '<div class="row media"><div class="col-md-4">' : ''). $titles .($vertical ? '</div><div class="col-md-8">' : '') .'<div class="tab-content nav-tabs-body-ctx">' . $content . ($vertical ? '</div></div>' : '') . '</div></div>';
}

/*** Tab (from Tabs) ***/
add_shortcode( 'tab', 'webuza_tab' );
function webuza_tab( $attr, $content = null ){
    extract(
        shortcode_atts(
            array(
                'title' => __( 'Tab Title', WEBUZA_THEME_NAME ),
                'id' => __( 'Tab Id', WEBUZA_THEME_NAME ),
            ), $attr )
    );
    return '<li class="title"><a href="#' . $id .'" role="tab" data-toggle="tab">' . $title . '</a></li><endtitle><div id="' . $id . '" class="tab-pane fade"><p>' . do_shortcode( $content ) . '<p></div><endcontent>';
}

/** Collapse ***/
add_shortcode( 'toggles', 'webuza_toggles' );
function webuza_toggles( $attr, $content = null ){
    extract(
        shortcode_atts( array(
            'id' => __( 'Accordion Id', WEBUZA_THEME_NAME ),
        ), $attr )
    );
    $content = do_shortcode( preg_replace( "/\s?<br\s?[^>?]>\s?/", '', $content ) );
    return '<div id="'.$id.'" class="panel-group" role="tablist" aria-multiselectable="true">' . $content . '</div>';
}

/** Toggle (for Togles) ***/
add_shortcode( 'toggle', 'webuza_toggle' );
function webuza_toggle( $attr, $content = null ){
    extract(
        shortcode_atts( array(
            'title' => __( 'Toggle Title', WEBUZA_THEME_NAME ),
            'id' => __( 'Toggle Id', WEBUZA_THEME_NAME ),
            'expanded' => false,
            'accordion_id' => __( 'Accordion Id', WEBUZA_THEME_NAME ),
        ), $attr )
    );
    return '<div class="panel panel-default">'.
                '<div id="heading-'.$id.'" class="panel-heading" role="tab">'.
                    '<h4 class="panel-title">'.
                        '<a class="collapsed" data-toggle="collapse" data-parent="#'.$accordion_id.'" href="#collapse-'.$id.'" aria-expanded="'.$expanded.'" aria-controls="collapse-'.$id.'">'.$title.'</a>'.
                        '<span class="status-panel"></span>'.
                    '</h4>'.
                '</div>'.
                '<div class="panel-collapse collapse '.($expanded ? 'in' : '').'" id="collapse-'.$id.'" role="tabpanel">'.
                    '<div class="panel-body">'.$content.'</div>'.
                '</div>'.
            '</div>';
}