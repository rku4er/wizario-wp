<?php
/*-----------------------------------------------------------------
*  Create Theme Options
*-----------------------------------------------------------------*/


#-----------------------------------------------------------------#
# Declare options
#-----------------------------------------------------------------#
$options = array();
$selectYesNoOptions = array(
    'yes' => __( 'Yes', WEBUZA_THEME_NAME ),
    'no' => __( 'No', WEBUZA_THEME_NAME )
);

$selectOpacity = array();
for( $ii = 1; $ii < 10; $ii++ ) { $selectOpacity["0.$ii"] = "0.$ii"; }
$selectOpacity["1"] = "1";


#-----------------------------------------------------------------#
# General  Options Section
#-----------------------------------------------------------------#
$options[] = array(
    'name' => __( 'General Settings', WEBUZA_THEME_NAME ),
    'type' => 'section',
    'desc' => __( 'Welcome to the Webuza options panel! You can switch between option groups by using the left-hand tabs.', WEBUZA_THEME_NAME ),
);

$options[] = array( 'type' => 'open' );

$options[] = array( 'type' => 'divider' );

$options[] = array(
    'name' => __( 'Import dummy data', WEBUZA_THEME_NAME ),
    'type' => 'custom',
    'desc' => __( 'If you are new to wordpress or have problems creating posts or pages that look like the theme preview you can import dummy posts and pages here that will definitely help to understand how those tasks are done.', WEBUZA_THEME_NAME ),
    'callback' => 'webuza_options_import_data'
);

$options[] = array(
    'name' => __( 'Check and repair', WEBUZA_THEME_NAME ),
    'type' => 'custom',
    'desc' => __( 'After importing data, run a script check the imported data.', WEBUZA_THEME_NAME ),
    'callback' => 'webuza_options_repair_data'
);


$options[] = array( 'type' => 'divider' );

$options[] = array(
    'name' => __( 'Upload Logo', WEBUZA_THEME_NAME ),
    'type' => 'img-upload',
    'id' => 'wbz_gen_logo',
    'desc' => 'Upload a logo image. The themes default logo gets applied if the input field is left blank. Logo Dimension: 200px * 100px (if your logo is larger you might need to modify style.css to align it perfectly)',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Upload Favicon', WEBUZA_THEME_NAME ),
    'type' => 'img-upload',
    'id' => 'wbz_gen_favicon',
    'desc' => __( 'Specify a favicon for your site. Accepted formats: .ico, .png, .gif', WEBUZA_THEME_NAME ),
    'std' => ''
);

$options[] = array( 'type' => 'divider' );

$options[] = array(
    'name' => __( 'Accent Color !!!!!!!!!', WEBUZA_THEME_NAME ),
    'desc' => __( 'Change this color to alter the accent color globally for your site. If you\'re stuck, try one of the six pre-picked colors that are guaranteed to look awesome!', WEBUZA_THEME_NAME ),
    'id' => 'wbz_gen_accent_color',
    'class' => 'color',
    'type' => 'text',
    'std' => '#f7524a'
);

$options[] = array(
    'name' => __( 'Back To Top Button', WEBUZA_THEME_NAME ),
    'desc' => __( 'Toggle whether or not to enable a back to top button on your pages.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_gen_back_to_top',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'yes'
);

$options[] = array(
    'name' => __( 'Call to Action Text', WEBUZA_THEME_NAME ),
    'desc' => __( 'Add the text that you would like to appear in the global call to action section.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_gen_call_to_action',
    'type' => 'textarea',
    'wp_editor' => true,
    'std' => ''
);

$options[] = array( 'type' => 'divider' );

$options[] = array(
    'name' => __( 'Your facebook page/group/account', WEBUZA_THEME_NAME ),
    'desc' => __( 'Enter the url to your facebook page/group/account. If you leave this blank the facebook link in the head and footer of your site wont be displayed.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_gen_facebook_url',
    'type' => 'text',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Your twitter account', WEBUZA_THEME_NAME ),
    'desc' => __( 'Enter your twitter account name. If you leave this blank the twitter link in the head and footer of your site wont be displayed.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_gen_twitter_account',
    'type' => 'text',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Your Google+ account', WEBUZA_THEME_NAME ),
    'desc' => __( 'Enter your Google+ account name. If you leave this blank the Google+ link in the head and footer of your site wont be displayed.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_gen_google_plus_account',
    'type' => 'text',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Your YouTube url', WEBUZA_THEME_NAME ),
    'desc' => __( 'Enter the url to your YouTube account. If you leave this blank the YouTube link in the head and footer of your site wont be displayed.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_gen_youtube_url',
    'type' => 'text',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Your Vimeo url', WEBUZA_THEME_NAME ),
    'desc' => __( 'Enter the url to your Vimeo account. If you leave this blank the Vimeo link in the head and footer of your site wont be displayed.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_gen_vimeo_url',
    'type' => 'text',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Your LinkedIn url', WEBUZA_THEME_NAME ),
    'desc' => __( 'Enter the url to your LinkedIn account. If you leave this blank the LinkedIn link in the head and footer of your site wont be displayed.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_gen_linkedin_url',
    'type' => 'text',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Your Dribble url', WEBUZA_THEME_NAME ),
    'desc' => __( 'Enter the url to your Vimeo account. If you leave this blank the Dribble link in the head and footer of your site wont be displayed.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_gen_dribble_url',
    'type' => 'text',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Your RSS url', WEBUZA_THEME_NAME ),
    'desc' => __( 'Enter the RSS url. If you leave this blank the RSS link in the head and footer of your site wont be displayed.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_gen_rss_url',
    'type' => 'text',
    'std' => ''
);

$options[] = array( 'type' => 'divider' );

$options[] = array(
    'name' => __( 'Google Analytics Tracking Code', WEBUZA_THEME_NAME ),
    'desc' => __( 'Enter your Google analytics tracking Code here. It will automatically be added to the themes footer so google can track your visitors behaviour.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_gen_google_analytics',
    'type' => 'textarea',
    'wp_editor' => false,
    'std' => ''
);

$options[] = array(
    'name' => __( 'Custom CSS', WEBUZA_THEME_NAME ),
    'desc' => __( 'If you have any custom CSS you would like added to the site, please enter it here.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_gen_custom_css',
    'type' => 'textarea',
    'wp_editor' => false,
    'std' => ''
);

$options[] = array( 'type' => 'close' );

#-----------------------------------------------------------------#
# Typography  Options Section
#-----------------------------------------------------------------#
$options[] = array(
    'name' => __( 'Typography Options', WEBUZA_THEME_NAME ),
    'type' => 'section'
);

$options[] = array( 'type' => 'open' );

$options[] = array(
    'name' => __( 'Use Custom Fonts?', WEBUZA_THEME_NAME ),
    'desc' => __( 'The Font heading utilizes google fonts and allows you to use a wide range of custom fonts for your headings.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_typography_use',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'no'
);
$options[] = array( 'type' => 'divider' );

$options[] = array(
    'name' => __( 'Body', WEBUZA_THEME_NAME ),
    'desc' => '',
    'id' => 'wbz_typography_body',
    'type' => 'font',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Navigation & navigation Dropdown', WEBUZA_THEME_NAME ),
    'desc' => '',
    'id' => 'wbz_typography_navigation',
    'type' => 'font',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Home Slider Caption', WEBUZA_THEME_NAME ),
    'desc' => '',
    'id' => 'wbz_typography_home_slider',
    'type' => 'font',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Standard Header', WEBUZA_THEME_NAME ),
    'desc' => '',
    'id' => 'wbz_typography_header',
    'type' => 'font-dev',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Sidebar, Carousel, Button & Footer Headers', WEBUZA_THEME_NAME ),
    'desc' => '',
    'id' => 'wbz_typography_other',
    'type' => 'font',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Sub-headers & Team Member Names', WEBUZA_THEME_NAME ),
    'desc' => '',
    'id' => 'wbz_typography_sub-headers',
    'type' => 'font',
    'std' => ''
);

$options[] = array( 'type' => 'divider' );

$options[] = array( 'type' => 'close' );


#-----------------------------------------------------------------#
# SuperHeader Options Section
#-----------------------------------------------------------------#
$options[] = array(
    'name' => __( 'Superheader options', WEBUZA_THEME_NAME ),
    'type' => 'section'
);

$options[] = array( 'type' => 'open' );

$options[] = array(
    'name' => __( 'Superheader', WEBUZA_THEME_NAME ),
    'desc' => __( 'Check if you want to use superheader', WEBUZA_THEME_NAME ),
    'id' => 'wbz_superheader_enabled',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'no'
);

$options[] = array(
    'name' => __( 'Superheader Background Color', WEBUZA_THEME_NAME ),
    'desc' => __( 'Change background color of superheader.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_superheader_bkg_color',
    'class' => 'color',
    'type' => 'text',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Superheader Content', WEBUZA_THEME_NAME ),
    'desc' => __( 'To use shortcodes you can create superheader that what you want. This can be advertising text, columns with contact information, etc.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_superheader_content',
    'type' => 'textarea',
    'wp_editor' => true,
    'std' => ''
);

$options[] = array(
    'name' => __( 'Hide Superheader', WEBUZA_THEME_NAME ),
    'desc' => __( 'Option to hide superheader. If option is not checked then superheader will be shown above header.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_superheader_hide',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'no'
);

$options[] = array( 'type' => 'close' );


#-----------------------------------------------------------------#
# Home Slider Options Section
#-----------------------------------------------------------------#

$options[] = array(
    'name' => __( 'Home Slider Options', WEBUZA_THEME_NAME ),
    'type' => 'section'
);

$options[] = array( 'type' => 'open' );


$options[] = array(
    'name' => __( 'Slider Background Color', WEBUZA_THEME_NAME ),
    'desc' => __( '', WEBUZA_THEME_NAME ),
    'id' => 'wbz_home_slider_bg',
    'class' => 'color',
    'type' => 'text',
    'std' => '000000'
);

$options[] = array(
    'name' => __( 'Slider Height', WEBUZA_THEME_NAME ),
    'desc' => __( '', WEBUZA_THEME_NAME ),
    'id' => 'wbz_home_slider_height',
    'type' => 'text',
    'std' => '650'
);


$options[] = array(
    'name' => __( 'Slider Animation Speed', WEBUZA_THEME_NAME ),
    'desc' => __( '', WEBUZA_THEME_NAME ),
    'id' => 'wbz_home_slider_anim_speed',
    'type' => 'text',
    'std' => '800'
);

$options[] = array(
    'name' => __( 'Slider Advance Speed', WEBUZA_THEME_NAME ),
    'desc' => __( '', WEBUZA_THEME_NAME ),
    'id' => 'wbz_home_slider_adv_speed',
    'type' => 'text',
    'std' => '5500'
);

$options[] = array(
    'name' => __( 'Autoplay Slider', WEBUZA_THEME_NAME ),
    'desc' => __( '', WEBUZA_THEME_NAME),
    'id' => 'wbz_home_slider_autoplay',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'yes'
);

$options[] = array(
    'name' => __( 'Slider Image Resize', WEBUZA_THEME_NAME ),
    'desc' => __( '', WEBUZA_THEME_NAME),
    'id' => 'wbz_home_slider_img_resize',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'yes'
);

$options[] = array(
    'name' => __( 'Slider Caption Animation', WEBUZA_THEME_NAME ),
    'desc' => __( '', WEBUZA_THEME_NAME),
    'id' => 'wbz_home_slider_capt_animation',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'yes'
);





$options[] = array( 'type' => 'close' );

#-----------------------------------------------------------------#
# Portfolio Options Section
#-----------------------------------------------------------------#
$options[] = array(
    'name' => __( 'Portfolio Options', WEBUZA_THEME_NAME ),
    'type' => 'section'
);

$options[] = array( 'type' => 'open' );

$options[] = array(
    'name'    => __( 'Main Layout', WEBUZA_THEME_NAME ),
    'desc'    => __( 'Please select the number of columns you would like for your portfolio.', WEBUZA_THEME_NAME ),
    'id'      => 'wbz_portfolio_main_layout',
    'type'    => 'select',
    'options' => array( '2' => __( '2 columns', WEBUZA_THEME_NAME ), '3' => __( '3 columns', WEBUZA_THEME_NAME ), '4' => __( '4 columns', WEBUZA_THEME_NAME ) ),
    'std'     => '4'
);

$options[] = array(
    'name'    => __( 'Portfolio Page Layout', WEBUZA_THEME_NAME ),
    'desc'    => __( 'Choose the portfolio layout here. This will overwrite any individual page settings.', WEBUZA_THEME_NAME ),
    'id'      => 'wbz_portfolio_page_layout',
    'type'    => 'select',
    'options' => array( 'nosidebar' => __( 'No Sidebar', WEBUZA_THEME_NAME ), 'right' => __( 'Right', WEBUZA_THEME_NAME ), 'left' => __( 'left', WEBUZA_THEME_NAME ) ),
    'std'     => 'right'
);

$options[] = array(
    'name'    => __( 'Portfolio Posts Number', WEBUZA_THEME_NAME ),
    'desc'    => __( 'How many items should be displayed per page?', WEBUZA_THEME_NAME ),
    'id'      => 'wbz_portfolio_posts_number',
    'type'    => 'select',
    'options' => array( '2' => __( '2 Posts', WEBUZA_THEME_NAME ), '3' => __( '3 Posts', WEBUZA_THEME_NAME ), '4' => __( '4 Posts', WEBUZA_THEME_NAME ), '5' => __( '5 Posts', WEBUZA_THEME_NAME ), '6' => __( '6 Posts', WEBUZA_THEME_NAME ), '8' => __( '8 Posts', WEBUZA_THEME_NAME ), '10' => __( '10 Posts', WEBUZA_THEME_NAME ), '12' => __( '12 Posts', WEBUZA_THEME_NAME ), '16' => __( '16 Posts', WEBUZA_THEME_NAME ) ),
    'std'     => '4'
);

$options[] = array( 'type' => 'divider' );

$options[] = array(
    'name' => __( 'Facebook', WEBUZA_THEME_NAME ),
    'desc' => __( 'Share it.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_portfolio_facebook_share',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'yes'
);

$options[] = array(
    'name' => __( 'Twitter', WEBUZA_THEME_NAME ),
    'desc' => __( 'Tweet it.', WEBUZA_THEME_NAME),
    'id' => 'wbz_portfolio_tweeter_share',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'yes'
);

$options[] = array(
    'name' => __( 'Google+', WEBUZA_THEME_NAME ),
    'desc' => __( 'Google+ it.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_portfolio_google_share',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'yes'
);

$options[] = array( 'type' => 'divider' );

$options[] = array(
    'name' => __( 'Portfolio Sortable?', WEBUZA_THEME_NAME ),
    'desc' => __( 'Should the sorting options based on categories be displayed?', WEBUZA_THEME_NAME ),
    'id' => 'wbz_portfolio_sortable',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'yes'
);

$options[] = array(
    'name' => __( 'Portfolio Pagination', WEBUZA_THEME_NAME ),
    'desc' => __( 'Should a portfolio pagination be displayed?', WEBUZA_THEME_NAME ),
    'id' => 'wbz_portfolio_pagination',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'no'
);

$options[] = array(
    'name' => __( 'Display Dates on Projects?', WEBUZA_THEME_NAME ),
    'desc' => __( 'Should a portfolio dates be displayed?', WEBUZA_THEME_NAME ),
    'id' => 'wbz_portfolio_dates',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'no'
);

$options[] = array( 'type' => 'divider' );

$options[] = array(
    'name' => __( 'Custom Slug', WEBUZA_THEME_NAME ),
    'desc' => __( 'If you want your portfolio post type to have a custom slug in the url, please enter it here.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_portfolio_slug',
    'type' => 'text',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Custom Recent Projects Title', WEBUZA_THEME_NAME ),
    'desc' => __( 'This is be used anywhere you place the recent work shortcode and on the "Recent Work" home layout. e.g. Recent Work.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_portfolio_custom_title',
    'type' => 'text',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Custom Recent Projects Link Text', WEBUZA_THEME_NAME ),
    'desc' => __( 'This is be used anywhere you place the recent work shortcode and on the "Recent Work" home layout. e.g. View All Work', WEBUZA_THEME_NAME ),
    'id' => 'wbz_portfolio_custom_link',
    'type' => 'text',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Custom Portfolio Page Sortable Text', WEBUZA_THEME_NAME ),
    'desc' => __( 'e.g. Sort Portfolio.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_portfolio_sort_text',
    'type' => 'text',
    'std' => ''
);

$options[] = array( 'type' => 'close' );


#-----------------------------------------------------------------#
# Blog Options Section
#-----------------------------------------------------------------#
$options[] = array(
    'name' => __( 'Blog Settings', WEBUZA_THEME_NAME ),
    'type' => 'section',
    'desc' => __( 'All blog related options are listed here.', WEBUZA_THEME_NAME )
);

$options[] = array( 'type' => 'open' );

$options[] = array( 'type' => 'divider' );

$options[] = array(
    'name' => __( 'Author\'s Bio', WEBUZA_THEME_NAME ),
    'desc' => __( 'Display the author\'s bio at the bottom of posts?', WEBUZA_THEME_NAME ),
    'id' => 'wbz_blog_authors_bio',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'no'
);

$options[] = array( 'type' => 'divider' );

$options[] = array(
    'name' => __( 'Facebook', WEBUZA_THEME_NAME ),
    'desc' => __( 'Share it.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_blog_facebook_share',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'yes'
);

$options[] = array(
    'name' => __( 'Twitter', WEBUZA_THEME_NAME ),
    'desc' => __( 'Tweet it.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_blog_tweeter_share',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'yes'
);

$options[] = array(
    'name' => __( 'Pinterest', WEBUZA_THEME_NAME ),
    'desc' => __( 'Pin it.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_blog_pinterest_share',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'yes'
);

$options[] = array(
    'name' => __( 'Display Tags', WEBUZA_THEME_NAME ),
    'desc' => __( 'Display tags at the bottom of posts?', WEBUZA_THEME_NAME ),
    'id' => 'wbz_blog_display_tags',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'no'
);

$options[] = array(
    'name' => __( 'Display Full Date', WEBUZA_THEME_NAME ),
    'desc' => __( 'This will add the year to the date post meta on all blog pages.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_blog_display_date',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'no'
);

$options[] = array(
    'name' => __( 'Display Pagination Numbers', WEBUZA_THEME_NAME ),
    'desc' => __( 'Do you want the page numbers to be visible in your pagination?', WEBUZA_THEME_NAME ),
    'id' => 'wbz_blog_display_page_numbers',
    'type' => 'select',
    'options' => $selectYesNoOptions,
    'std' => 'no'
);

$options[] = array(
    'name' => __( 'Custom Recent Posts Title', WEBUZA_THEME_NAME ),
    'desc' => __( 'This is be used anywhere you place the recent posts shortcode and on the "Recent Posts" home layout. e.g. Recent Posts', WEBUZA_THEME_NAME ),
    'id' => 'wbz_recent_posts_title',
    'type' => 'text',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Custom Recent Posts Link Text', WEBUZA_THEME_NAME ),
    'desc' => __( 'This is be used anywhere you place the recent posts shortcode and on the "Recent Posts" home layout. e.g. View All Posts', WEBUZA_THEME_NAME ),
    'id' => 'wbz_recent_posts_link_text',
    'type' => 'text',
    'std' => ''
);

$options[] = array('type' => 'close');


#-----------------------------------------------------------------#
# Footer Options Section
#-----------------------------------------------------------------#
$options[] = array(
    'name' => __( 'Footer Options', WEBUZA_THEME_NAME ),
    'type' => 'section'
);

$options[] = array( 'type' => 'open' );

$options[] = array(
    'name' => __( 'Footer Columns', WEBUZA_THEME_NAME ),
    'desc' => __( 'How many colmns should be diplayed in your footer.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_footer_columns',
    'type' => 'select',
    'options' => array( '2' => __( '2 columns', WEBUZA_THEME_NAME ), '3' => __( '3 columns', WEBUZA_THEME_NAME ), '4' => __( '4 columns', WEBUZA_THEME_NAME ), '5' => __( '5 columns', WEBUZA_THEME_NAME ) ),
    'std' => '3'
);

$options[] = array(
    'name' => __( 'Subfooter Content', WEBUZA_THEME_NAME ),
    'desc' => __( 'To use shortcodes you can create sufooter that what you want. This can be text of copyrights, selected menu items with links, social widgets and so on.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_sub-footer_content',
    'type' => 'textarea',
    'wp_editor' => true,
    'std' => ''
);

$options[] = array( 'type' => 'close' );


#-----------------------------------------------------------------#
# Layout & Settings
#-----------------------------------------------------------------#
$options[] = array(
    'name' => __( 'Layout & Settings', WEBUZA_THEME_NAME ),
    'type' => 'section'
);

$options[] = array( 'type' => 'open' );

$options[] = array(
    'name' => __( 'Default Blog Layout', WEBUZA_THEME_NAME ),
    'desc' => __( 'Choose the default blog layout here. You can create multiple blogs with different layouts by using the template builder if you want to.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_layout_blog',
    'type' => 'select',
    'options' => array(
        'none' => 'Without sidebar',
        'left' => 'Left sidebar',
        'right' => 'Right sidebar'
    ),
    'std' => 'right'
);

$options[] = array(
    'name'    => __( 'Default Page Layout', WEBUZA_THEME_NAME ),
    'desc'    => __( 'Choose the default page layout here. You can change the setting of each individual page when editing that page.', WEBUZA_THEME_NAME ),
    'id'      => 'wbz_layout_page',
    'type'    => 'select',
    'options' => array(
        'none' => 'Without sidebar',
        'left' => 'Left sidebar',
        'right' => 'Right sidebar'
    ),
    'std'     => 'right'
);

$options[] = array( 'type' => 'close' );


#-----------------------------------------------------------------#
# Sidebar Options Section
#-----------------------------------------------------------------#
$options[] = array(
    'name' => __( 'Sidebars', WEBUZA_THEME_NAME ),
    'type' => 'section'
);

$options[] = array( 'type' => 'open' );

$options[] = array(
    'name'    => __( 'Add Sidebar', WEBUZA_THEME_NAME ),
    'desc'    => __( 'Select which page should be used to display your contact form.', WEBUZA_THEME_NAME ),
    'id'      =>  'wbz_custom_sidebar',
    'type'    => 'custom',
    'callback' => 'webuza_settings_field_custom_sidebar'
);


#-----------------------------------------------------------------#
# Contacts Options Section
#-----------------------------------------------------------------#
$options[] = array(
    'name' => __( 'Contacts', WEBUZA_THEME_NAME ),
    'type' => 'section'
);

$options[] = array( 'type' => 'open' );

// Google Map

$options[] = array(
    'name' => __( 'Default Map Zoom Level', WEBUZA_THEME_NAME ),
    'desc' => __( 'Value should be between 1-18, 1 being the entire earth and 18 being right at street level.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_contact_zoom_level',
    'type' => 'text',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Enable Map Zoom In/Out', WEBUZA_THEME_NAME ),
    'desc' => __( 'Do you want users to be able to zoom in/out on the map?', WEBUZA_THEME_NAME ),
    'id' => 'wbz_contact_zoom_in_out',
    'type' => 'checkbox',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Map Center Latitude', WEBUZA_THEME_NAME ),
    'desc' => __( 'Please enter the latitude for the maps center point.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_contact_map_latitude',
    'type' => 'text',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Map Center Longitude', WEBUZA_THEME_NAME ),
    'desc' => __( 'Please enter the longitude for the maps center point.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_contact_map_longitude',
    'type' => 'text',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Marker Latitude', WEBUZA_THEME_NAME ),
    'desc' => __( 'Please enter the latitude for your location.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_marker_latitude',
    'type' => 'text',
    'std' => ''
);

$options[] = array(
    'name' => __( 'Marker Longitude', WEBUZA_THEME_NAME ),
    'desc' => __( 'Please enter the longitude for your location.', WEBUZA_THEME_NAME ),
    'id' => 'wbz_marker_longitude',
    'type' => 'text',
    'std' => ''
);


$options[] = array( 'type' => 'close' );

$options[] = array( 'type' => 'open' );

$default_theme_options = array(
    'theme_layout' => 'content-sidebar',
    'custom_sidebar' => array()
);
$options[] = array( 'type' => 'close' );