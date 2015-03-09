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
    $output = preg_replace( '/(\[\/.*?\])+\s*(<\/p>)?/', '$2$1', $output );
    $output = preg_replace( '/(<p>)?\s*(\[[^\/].*?\])+/', '$2$1', $output );

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


    $content = <<<EODHTML

    <ul class="$location-social-links">
        $content
    </ul>

EODHTML;

    return $content;
}

// site-address
add_shortcode( 'address', 'shoestrap_address' );
function shoestrap_address( $attr, $content = null ){
    extract( shortcode_atts( array( ), $attr ) );

    $content = do_shortcode( $content );

    $content = <<<EODHTML

    <div class="site-address">
        $content
    </div>

EODHTML;

    return $content;
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

    $content = do_shortcode( $content );

    $content = <<<EODHTML

    <div class="lorem-block">
        $content
    </div>

EODHTML;

    return $content;
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

    $content = <<<EODHTML

        <section class="best-prop-block" style="background-color:$bg_color">
            <div class="container"><h2 class="lg-h">$title</h2>
                <h4 class="lg-h-subcaption">$tagline</h4>
                <div class="row">$content</div>
            </div>
        </section>

EODHTML;
    return $content;
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
    $content = do_shortcode( $content );

    $content = <<<EODHTML

        <div class="prop-block">
            <a href="$url" class="waves-effect waves-light js-has-link">
                <div class="prop-content-block">$content</div>
            </a>
        </div>
        <endcontent>

EODHTML;

    return $content;
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

    $content = <<<EODHTML

        <section class="parallax-back" id="js-parallax-back" style="background-image: url($bg_image)">
            <div id="trigger-parallax_2"></div>
            <div class="container">
                <div class="row">
                    $content
                </div>
            </div>
        </section>

EODHTML;

    return $content;
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

    $content = <<<EODHTML

        <a href="$url" class="btn waves-effect waves-button $size $type">$title</a>

EODHTML;

    return $content;
}
