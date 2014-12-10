<?php
// Clean HTML from empty <p> and <br />
function cleanHTML($string){
    $regexpArray = array(
        '/^\s*<\/p>/',
        '/<p>\s*$/',
        '/<p>\s*<\/p>/',
        '/<br\s*\/?>/'
    );

    $output = preg_replace( $regexpArray, '', $string );

    return $output;
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
    $content = preg_replace( '/<p[^>]*?>\s*(\[\/?best_prop[^>]*?\])\s*<\/p>/', '$1', $content );
    $content = do_shortcode( $content );
    $props = explode( '<endcontent>', $content );
    $content = '';
    foreach( $props as $prop ){
        $content .= $prop;
    }

    $content = preg_replace( '/class="prop-block/', '$0 col-md-' . 12/(count($props)-1) , $content );

    return '<section class="best-prop-block" style="background-color: ' . $bg_color . '"><div class="container"><h2 class="lg-h">' . $title . '</h2><h4 class="lg-h-subcaption">' . $tagline . '</h4><div class="row">' . $content . '</div></div></section>';
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

    return '<div class="prop-block"><a href="' . $url . '" class="waves-effect waves-light js-has-link"><div class="prop-content-block">' . do_shortcode( $content ) . '</div></a></div><endcontent>';
}

// Parallax
function shoestrap_show_parallax( $attr, $content = null ){
    extract(
        shortcode_atts( array(
            //'text_color' => __( 'Text Color', WEBUZA_THEME_NAME )
        ), $attr )
    );

    $assets = SHOESTRAP_ASSETS_URL;

    $content = <<<EODHTML

        <section class="parallax-back" id="js-parallax-back">
            <div id="trigger-parallax_2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9 pb-left-block">
                        <h3 class="xlg-h">Parallax Background</h3>
                        <div class="pb-text">
                            <p>Vestibulum congue rhoncus odio. Sed eget tellus nisl, id molestie nulla. Duis ac lacinia risus. Vestibulum congue rhoncus odio. Sed eget tellus nisl, id molestie nulla. Duis ac lacinia risus Vestibulum congue rhoncus odio. Sed eget tellus nisl, id molestie nulla. Duis ac lacinia risus</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 pb-right-block">
                        <a href="#" class="waves-effect waves-button btn btn-warning btn-lg">Purchase it Now!</a>
                        <em class="exclusive clearfix">Exclusive on Themeforest <br> only for 1 000 049$ </em>
                    </div>
                </div>
            </div>
        </section>

EODHTML;

    return $content;
}
add_shortcode( 'parallax_front', 'shoestrap_show_parallax' );


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

    return '' . $content . '';
}