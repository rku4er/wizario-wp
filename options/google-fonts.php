<?php

#-----------------------------------------------------------------#
# Check Typography Options & Load Google Fonts
#-----------------------------------------------------------------#

$_browserFonts = array( 'Arial', 'Cambria', 'Georgia', 'Helvetica', 'Tahoma' );

$_fontReg = get_option( 'wbz_typography_use' );
$_fonts[] = get_option( 'wbz_typography_body' );
$_fonts[] = get_option( 'wbz_typography_navigation' );
$_fonts[] = get_option( 'wbz_typography_home_slider' );
$_fonts[] = get_option( 'wbz_typography_header' );
$_fonts[] = get_option( 'wbz_typography_other' );
$_fonts[] = get_option( 'wbz_typography_sub-headers' );



if( isset( $_fontReg ) && $_fontReg == 'yes' ) {

    foreach( $_fonts as $_font ){

        if( isset( $_font['font'] ) && ( in_array( $_font['font'], $_browserFonts ) === false ) ) {

            $_renderFont = '';
            $_renderFont .= $_font['font'];

            if( isset( $_font['style'] ) && $_font['style'] != '-' ) {

                switch( $_font['style'] ) {
                    case 'normal':
                        $_renderFont .= ':400';
                        break;
                    case 'italic':
                        $_renderFont .= ':400,400italic';
                        break;
                    case 'bold':
                        $_renderFont .= ':700';
                        break;
                    case 'bolder':
                        $_renderFont .= ':900';
                        break;
                    case 'all':
                        $_renderFont .= ':400,400italic,700,700italic,900,900italic';
                        break;
                    default:
                        $_renderFont .= ':400,400italic,700,700italic,900,900italic';
                        break;
                }

                $_renderFont .= '&subset=latin,cyrillic';
            }

            wp_enqueue_style( 'typography_options_'. $_font['font'] .'_'. $_font['style'] , 'http://fonts.googleapis.com/css?family='. $_renderFont , false, null, 'all' );
        }

    }

}