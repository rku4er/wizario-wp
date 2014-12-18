<?php
global $ss_menus, $ss_footer;

remove_action('shoestrap_inside_nav_begin', array($ss_menus, 'navbar_pre_searchbox'), 11);
remove_action('shoestrap_post_main_nav', array($ss_menus, 'navbar_sidebar'));
remove_action('shoestrap_pre_wrap', array($ss_menus, 'secondary_navbar'));
remove_action('shoestrap_footer_html', array($ss_footer, 'html'));

add_action('get_header', 'get_super_header_func');
function get_super_header_func(){
    $options = webuza_get_options();

    if( webuza_is_superheader_enabled( $options ) ): ?>

            <div class="super-header">

                <div class="no-target-block_empty">
                    <div class="container">
                        <div class="row">
                            <?php echo do_shortcode(stripslashes( $options['wbz_superheader_content'] ) ); ?>
                        </div>
                    </div>
               </div>

                <!--  Hide super header button    -->
                <?php if( webuza_is_superheader_enabled( $options, true )): ?>
                    <div class="sh-line" id="js-sh-line">
                        <span class="sh-dottes">
                            <i class="dott"></i>
                            <i class="dott"></i>
                            <i class="dott"></i>
                        </span>
                    </div>
                <?php endif; ?>

            </div>

    <?php endif;

}

add_action( 'widgets_init', 'custom_footer_widget');
function custom_footer_widget(){
    $class        = apply_filters( 'shoestrap_widgets_class', '' );
    $before_title = apply_filters( 'shoestrap_widgets_before_title', '<h3 class="widget-title">' );
    $after_title  = apply_filters( 'shoestrap_widgets_after_title', '</h3>' );

    register_sidebar( array(
        'name'          => __( 'Footer Widget Area 5', 'shoestrap' ),
        'id'            => 'sidebar-footer-5',
        'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ));
}

add_action('shoestrap_footer_html', 'footer_html');
function footer_html(){
    global $ss_framework, $ss_social, $ss_settings;

    // The blogname for use in the copyright section
    $blog_name  = get_bloginfo( 'name', 'display' );

    // The copyright section contents
    if ( isset( $ss_settings['footer_text'] ) ) {
        $ftext = $ss_settings['footer_text'];
    } else {
        $ftext = '&copy; [year] [sitename]';
    }

    // Replace [year] and [sitename] with meaninful content
    $ftext = str_replace( '[year]', date( 'Y' ), $ftext );
    $ftext = str_replace( '[sitename]', $blog_name, $ftext );

    // Do we want to display social links?
    if ( isset( $ss_settings['footer_social_toggle'] ) && $ss_settings['footer_social_toggle'] == 1 ) {
        $social = true;
    } else {
        $social = false;
    }

    // How many columns wide should social links be?
    if ( $social && isset( $ss_settings['footer_social_width'] ) ) {
        $social_width = $ss_settings['footer_social_width'];
    } else {
        $social_width = false;
    }

    // Social is enabled, we're modifying the width!
    if ( $social_width && $social && intval( $social_width ) > 0 ) {
        $width = 12 - intval( $social_width );
    } else {
        $width = 12;
    }

    if ( isset( $ss_settings['footer_social_new_window_toggle'] ) && ! empty( $ss_settings['footer_social_new_window_toggle'] ) ) {
        $blank = ' target="_blank"';
    } else {
        $blank = null;
    }

    $networks = $ss_social->get_social_links();

    do_action( 'shoestrap_footer_before_copyright' );

    echo $ss_framework->open_row( 'div' );
        echo $ss_framework->open_col( 'div', array( 'large' => $width ), 'copyright-bar' ) . $ftext . '</div>';

            if ( $social && ! is_null( $networks ) && count( $networks ) > 0 ) {
                echo $ss_framework->open_col( 'div', array( 'large' => $social_width ), 'footer_social_bar' );

                    foreach ( $networks as $network ) {
                        // Check if the social network URL has been defined
                        if ( isset( $network['url'] ) && ! empty( $network['url'] ) && strlen( $network['url'] ) > 7 ) {
                            echo '<a href="' . $network['url'] . '"' . $blank . ' title="' . $network['icon'] . '"><span class="el-icon-' . $network['icon'] . '"></span></a>';
                        }
                    }

                echo $ss_framework->close_col( 'div' );
            }

        echo $ss_framework->close_col( 'div' );

    echo $ss_framework->close_row( 'div' );
}


add_action('shoestrap_navbar_search', 'custom_navbar_search');
function custom_navbar_search(){
    global $ss_settings;

    $show_searchbox = $ss_settings['navbar_search'];
    if ( $show_searchbox == '1' ) : ?>
    <form role="search" method="get" id="searchform" class="site-search" action="<?php echo home_url('/'); ?>">
        <input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" id="s" class="form-control-search" placeholder="<?php _e('Search', 'shoestrap'); ?> <?php bloginfo('name'); ?>">
        <button type="sumbit" class="visible-xs visible-sm sumbit-search"><i class="icon el-icon-search"></i></button>
        <a href="#" class="js-trigger-search visible-md visible-lg">
            <i class="icon el-icon-search"></i>
            <i class="icon el-icon-close hide"></i>
        </a>
    </form>
    <?php endif;
}

add_action('shoestrap_header_top_navbar_override', 'custom_header_template');
function custom_header_template(){
    ?>
    <header class='header'>
        <div class="container-fluid">
            <div class="header-container clearfix">

                <div class="h-left-bar">
                    <div class="h-logo">
                        <a href="#">
                            <span class="logo-b">
                                <span class="logo-back"></span>
                                <span class="logo-back"></span>
                                <span class="logo-back"></span>
                                <span class="logo-back"></span>
                                <span class="logo-back"></span>
                                <span class="logo-back"></span>
                                <span class="logo-back"></span>
                                <span class="logo-back"></span>
                                <span class="logo-back"></span>
                                <span class="logo-back"></span>
                                <span class="logo-back"></span>
                                <span class="logo-back"></span>
                                <span class="logo-back"></span>
                                <span class="logo-back"></span>
                                <img src="<?php echo SHOESTRAP_ASSETS_URL ?>/img/logo.png" alt="..." title="..." class="rtn_img">
                            </span>
                            <span class="title-logo"><?php echo get_bloginfo( 'name' ); ?></span>
                        </a>
                    </div>
                </div>

                <div class="h-right-bar" id="js-navbar">
                    <div class="no-target-block_empty">

                        <nav class="primary-nav" role="navigation">
                            <?php
                            do_action( 'shoestrap_inside_nav_begin' );
                            if ( has_nav_menu( 'primary_navigation' ) )
                                wp_nav_menu( array( 'theme_location' => 'primary_navigation', 'menu_id' => 'js-primary-list', 'menu_class' => 'primary-list sf-menu' ) );

                            do_action( 'shoestrap_inside_nav_end' );
                            ?>
                        </nav>

                        <?php do_action( 'shoestrap_post_main_nav' ); ?>

                        <?php do_action( 'shoestrap_navbar_search' ); ?>

                    </div>
                </div>

                <button type="button" class="navbar-toggle visible-xs visible-sm" id="js-trigger-mobile-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
        </div>
    </header>
    <?php do_action( 'shoestrap_do_navbar' ); ?>

<?php
}

function shoestrap_custom_footer_content(){
    global $ss_framework;
    // Finding the number of active widget sidebars
    $num_of_sidebars = 0;

    //for ( $i = 0; $i < 5; $i++ ) {
    for ( $i = 0; $i < 6; $i++ ) {
        $sidebar = 'sidebar-footer-' . $i;
        if ( is_active_sidebar( $sidebar ) ) {
            $num_of_sidebars++;
        }
    }

    ?>
    <section class="widget-block">
        <div class="container">
            <?php

            // If sidebars exist, open row.
            if ( $num_of_sidebars >= 0 ) {
                echo $ss_framework->open_row( 'div' );
            }

            // Showing the active sidebars
            //for ( $i = 0; $i < 5; $i++ ) {
            for ( $i = 0; $i < 6; $i++ ) {
                $sidebar = 'sidebar-footer-' . $i;

                if ( is_active_sidebar( $sidebar ) ) {
                    // Setting each column width accordingly
                    //$col_class = 12 / $num_of_sidebars;

                    $col_class = ($i == 5) ? 'md' : 'lg';

                    //echo $ss_framework->open_col( 'div', array( 'medium' => $col_class ) );
                    echo '<div class="widget-col-'. $col_class .'">';
                    dynamic_sidebar( $sidebar );
                    //echo $ss_framework->close_col( 'div' );
                    echo '</div>';

                }
            }

            // If sidebars exist, close row.
            if ( $num_of_sidebars >= 0 ) {
                echo $ss_framework->close_row( 'div' );

                // add a clearfix div.
                echo $ss_framework->clearfix();
            }

            ?>
        </div>
    </section>

    <section class="f-bottom-block">
        <div class="container">
            <?php
            if ( has_nav_menu( 'secondary_navigation' ) )
                wp_nav_menu( array( 'theme_location' => 'secondary_navigation', 'menu_class' => 'dash-list' ) );
            ?>

            <div class="contact-site">
                <?php do_action( 'shoestrap_footer_html' ); ?>
            </div>

            <?php do_action('footer_socials'); ?>

        </div>
    </section>

    <?php
}


/* Footer Social Icons*/
add_action('footer_socials', 'shoestrap_footer_socials');
function shoestrap_footer_socials(){
    echo do_shortcode('[socials items="twitter,facebook,pinterest,google-plus,rss"]');
}