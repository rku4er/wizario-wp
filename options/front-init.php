<?php
/*-----------------------------------------------------------------*
*   Front-end theme options
*-----------------------------------------------------------------*/


#-----------------------------------------------------------------#
# Declare Vars
#-----------------------------------------------------------------#
global $options;
include (TEMPLATEPATH . '/options/templates/options.php');

#-----------------------------------------------------------------#
# Get Options Values
#-----------------------------------------------------------------#
function webuza_get_options(){

    global $options;
    global $webuza_options;

    if( !empty( $webuza_options ) ){
        return $webuza_options;
    }

    $webuza_options = array();

    /*** Loop the options ***/
    foreach( $options as $option ) {

        /*** If not open or close ***/
        if( $option['type'] != 'open' && $option['type'] != 'close' ) {

            /*** If it is not in the database ***/
            if( get_option( $option['id'] ) === false ) {

                /*** Get the default value ***/
                if( $option['std'] != '' ) {
                    $webuza_options[ $option['id'] ] = $option['std'];
                }
            /*** If it is in the database ***/
            } else {
                /*** Get the value from the database ***/
                $option_value = get_option( $option['id'] );
                if ( $option_value != '' ) {
                    $webuza_options[ $option['id'] ] = $option_value;
                }
            }
        }
    }
    /*** Return the option values ***/
    return $webuza_options;
}

#-----------------------------------------------------------------#
# Show Typography Options ( font family, font size, font style )
#-----------------------------------------------------------------#
function webuza_typography_option_renderer( $selector, $option_values ){
    if( !$option_values['font'] && !$option_values['size'] && !$option_values['style']) return;

    $result = $selector . ' { ' . "\n";
    if( isset( $option_values['font'] ) ){
        $result .= '    font-family: ' . $option_values['font'] . " !important;\n";
    }
    if( isset( $option_values['size'] ) ){
        $result .= '    font-size: ' . $option_values['size'] . " !important;\n";
    }
    $font_style = isset( $option_values['style'] ) ? $option_values['style'] : '';
    if( $font_style ){
        $result .= $font_style == 'italic' ? '    font-style: ' : '    font-weight: ';
        $result .= $option_values['style'] . " !important;\n";
    }
    $result .= '}' . "\n";
    echo $result;
}

#-----------------------------------------------------------------#
# Check if super header enabled
#-----------------------------------------------------------------#
function webuza_is_superheader_enabled( $options, $check_is_hide = false ){
    $result = isset( $options['wbz_superheader_enabled'] ) && $options['wbz_superheader_enabled'] == 'yes';
    if ( $result && $check_is_hide ){
        $result = $result && $options['wbz_superheader_hide'] == 'yes';
    }
    return $result;
}