<?php
/*-----------------------------------------------------------------*
*   Init TinyMce ShortCodes
*-----------------------------------------------------------------*/

#-----------------------------------------------------------------#
# Init Webuza TinyMce plugin
#-----------------------------------------------------------------#
function webuza_tinymce_init(){
    if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
        return;
    }
    if ( get_user_option( 'rich_editing' ) == 'true' ) {
        add_filter( 'mce_external_plugins', 'webuza_add_js_plugin' );
        add_filter( 'mce_buttons', 'webuza_add_tinymce_buttons' );
    }
    wp_enqueue_style( 'webuza_shortcodes_dialog', get_template_directory_uri() . '/shortcodes/tinymce/css/style.css', false );
    wp_enqueue_style( 'webuza_shortcodes_css', get_template_directory_uri() . '/shortcodes/tinymce/css/jquery.ui.dialog.min.css', false );
    wp_enqueue_style( 'webuza_font_awesome', get_template_directory_uri() . '/css/font-awesome.min.css', false );

    wp_enqueue_script( 'jcolor-picker', get_template_directory_uri() . '/js/jscolor/jscolor.js' );
}
add_action('init', 'webuza_tinymce_init');

#-----------------------------------------------------------------#
# Add Webuza TinyMce js file
#-----------------------------------------------------------------#
function webuza_add_js_plugin( $plugin_array ) {
    $plugin_array['jquery-ui-dialog'] = get_template_directory_uri() . '/js/jquery-ui-dialog.min.js';
    $plugin_array['webuza_buttons'] = get_template_directory_uri() . '/shortcodes/tinymce/js/tinymce.js';
    return $plugin_array;
}

#-----------------------------------------------------------------#
# Create Webuza ShortCodes Button
#-----------------------------------------------------------------#
function webuza_add_tinymce_buttons ( $buttons ) {
    array_push( $buttons, 'webuza_shortcodes_button' );
    return $buttons;
}

#-----------------------------------------------------------------#
# Add Ajax action to handle dialog
#-----------------------------------------------------------------#
function webuza_shortcodes_dialog_open() {
    include 'templates/dialog.php';
    die();
}
add_action( 'wp_ajax_shortcodes_dialog_open', 'webuza_shortcodes_dialog_open' );

#-----------------------------------------------------------------#
# Get Font Awesome Icons array()
#-----------------------------------------------------------------#
function webuza_get_icons_array( $group_icons = null ){
    $icons = array();

    /*** Social Icons ***/
    $icons['Social Icons'] = array(
        'icon-twitter-sign' => 'twitter-sign',
        'icon-facebook-sign' => 'facebook-sign',
        'icon-linkedin-sign' => 'linkedin-sign',
        'icon-github-sign' => 'github-sign',
        'icon-phone' => 'phone',
        'icon-phone-sign' => 'phone-sign',
        'icon-twitter' => 'twitter',
        'icon-facebook' => 'facebook',
        'icon-github' => 'github',
        'icon-sign-blank' => 'sign-blank',
        'icon-pinterest' => 'pinterest',
        'icon-pinterest-sign' => 'pinterest-sign',
        'icon-google-plus-sign' => 'google-plus-sign',
        'icon-google-plus' => 'google-plus',
        'icon-linkedin' => 'linkedin',
        'icon-github-alt' => 'github-alt'
    );

    /*** Web Application Icons ***/
    $icons['Web Application Icons'] = array(
        'icon-glass' => 'Glass',
        'icon-music' => 'Music',
        'icon-search' => 'Search',
        'icon-envelope' => 'Envelope',
        'icon-heart' => 'Heart',
        'icon-star' => 'Star',
        'icon-star-empty' => 'Star Empty',
        'icon-user' => 'User',
        'icon-film' => 'Film',
        'icon-ok' => 'OK',
        'icon-remove' => 'Remove',
        'icon-zoom-in' => 'Zoom In',
        'icon-zoom-out' => 'Zoom Out',
        'icon-off' => '',
        'icon-signal' => 'signal',
        'icon-cog' => 'cog',
        'icon-trash' => 'trash',
        'icon-home' => 'home',
        'icon-time' => 'time',
        'icon-road' => 'road',
        'icon-download-alt' => 'download-alt',
        'icon-download' => 'download',
        'icon-upload' => 'upload',
        'icon-inbox' => 'inbox',
        'icon-refresh' => 'refresh',
        'icon-lock' => 'lock',
        'icon-flag' => 'flag',
        'icon-headphones' => 'headphones',
        'icon-volume-off' => 'volume-off',
        'icon-volume-down' => 'volume-down',
        'icon-volume-up' => 'volume-up',
        'icon-qrcode' => 'qrcode',
        'icon-barcode' => 'barcode',
        'icon-tag' => 'tag',
        'icon-tags' => 'tags',
        'icon-book' => 'book',
        'icon-bookmark' => 'bookmark',
        'icon-print' => 'print',
        'icon-camera' => 'camera',
        'icon-facetime-video' => 'facetime-video',
        'icon-picture' => 'picture',
        'icon-pencil' => 'pencil',
        'icon-map-marker' => 'map-marker',
        'icon-adjust' => 'adjust',
        'icon-tint' => 'tint',
        'icon-edit' => 'edit',
        'icon-share' => 'share',
        'icon-check' => 'check',
        'icon-move' => 'move',
        'icon-plus-sign' => 'plus-sign',
        'icon-minus-sign' => 'minus-sign',
        'icon-remove-sign' => 'remove-sign',
        'icon-ok-sign' => 'ok-sign',
        'icon-question-sign' => 'question-sign',
        'icon-info-sign' => 'info-sign',
        'icon-screenshot' => 'screenshot',
        'icon-remove-circle' => 'remove-circle',
        'icon-ok-circle' => 'ok-circle',
        'icon-ban-circle' => 'ban-circle',
        'icon-share-alt' => 'share-alt',
        'icon-plus' => 'plus',
        'icon-minus' => 'minus',
        'icon-asterisk' => 'asterisk',
        'icon-exclamation-sign' => 'exclamation-sign',
        'icon-gift' => 'gift',
        'icon-leaf' => 'leaf',
        'icon-fire' => 'fire',
        'icon-eye-open' => 'eye-open',
        'icon-eye-close' => 'eye-close',
        'icon-warning-sign' => 'warning-sign',
        'icon-plane' => 'plane',
        'icon-calendar' => 'calendar',
        'icon-random' => 'random',
        'icon-comment' => 'comment',
        'icon-magnet' => 'magnet',
        'icon-retweet' => 'retweet',
        'icon-shopping-cart' => 'shopping-cart',
        'icon-folder-close' => 'folder-close',
        'icon-folder-open' => 'folder-open',
        'icon-resize-vertical' => 'resize-vertical',
        'icon-resize-horizontal' => 'resize-horizontal',
        'icon-bar-chart' => 'bar-chart',
        'icon-camera-retro' => 'camera-retro',
        'icon-key' => 'key',
        'icon-cogs' => 'cogs',
        'icon-comments' => 'comments',
        'icon-thumbs-up' => 'thumbs-up',
        'icon-thumbs-down' => 'thumbs-down',
        'icon-star-half' => 'star-half',
        'icon-heart-empty' => 'heart-empty',
        'icon-signout' => 'signout',
        'icon-pushpin' => 'pushpin',
        'icon-external-link' => 'external-link',
        'icon-signin' => 'signin',
        'icon-trophy' => 'trophy',
        'icon-upload-alt' => 'upload-alt',
        'icon-lemon' => 'lemon',
        'icon-check-empty' => 'check-empty',
        'icon-bookmark-empty' => 'bookmark-empty',
        'icon-unlock' => 'unlock',
        'icon-credit-card' => 'credit-card',
        'icon-rss' => 'rss',
        'icon-hdd' => 'hdd',
        'icon-bullhorn' => 'bullhorn',
        'icon-bell' => 'bell',
        'icon-certificate' => 'certificate',
        'icon-globe' => 'globe',
        'icon-wrench' => 'wrench',
        'icon-tasks' => 'tasks',
        'icon-filter' => 'filter',
        'icon-briefcase' => 'briefcase',
        'icon-group' => 'group',
        'icon-cloud' => 'cloud',
        'icon-beaker' => 'beaker',
        'icon-reorder' => 'reorder',
        'icon-magic' => 'magic',
        'icon-truck' => 'truck',
        'icon-money' => 'money',
        'icon-sort' => 'sort',
        'icon-sort-down' => 'sort-down',
        'icon-sort-up' => 'sort-up',
        'icon-envelope-alt' => 'envelope-alt',
        'icon-legal' => 'legal',
        'icon-dashboard' => 'dashboard',
        'icon-comment-alt' => 'comment-alt',
        'icon-comments-alt' => 'comments-alt',
        'icon-bolt' => 'bolt',
        'icon-sitemap' => 'sitemap',
        'icon-umbrella' => 'umbrella',
        'icon-lightbulb' => 'lightbulb',
        'icon-exchange' => 'exchange',
        'icon-cloud-download' => 'cloud-download',
        'icon-cloud-upload' => 'cloud-upload',
        'icon-suitcase' => 'suitcase',
        'icon-bell-alt' => 'bell-alt',
        'icon-coffee' => 'coffee',
        'icon-food' => 'food',
        'icon-building' => 'building',
        'icon-fighter-jet' => 'fighter-jet',
        'icon-beer' => 'beer',
        'icon-desktop' => 'desktop',
        'icon-laptop' => 'laptop',
        'icon-tablet' => 'tablet',
        'icon-mobile-phone' => 'mobile-phone',
        'icon-circle-blank' => 'circle-blank',
        'icon-quote-left' => 'quote-left',
        'icon-quote-right' => 'quote-right',
        'icon-spinner' => 'spinner',
        'icon-circle' => 'circle',
        'icon-reply' => 'reply',
        'icon-folder-close-alt' => 'folder-close-alt',
        'icon-folder-open-alt' => 'folder-open-alt',
        'icon-expand-alt' => 'expand-alt',
        'icon-collapse-alt' => 'collapse-alt',
        'icon-smile' => 'smile',
        'icon-frown' => 'frown',
        'icon-meh' => 'meh',
        'icon-gamepad' => 'gamepad',
        'icon-keyboard' => 'keyboard',
        'icon-flag-alt' => 'flag-alt',
        'icon-flag-checkered' => 'flag-checkered',
        'icon-terminal' => 'terminal',
        'icon-code' => 'code',
        'icon-reply-all' => 'reply-all',
        'icon-mail-reply-all' => 'mail-reply-all',
        'icon-star-half-empty' => 'star-half-empty',
        'icon-location-arrow' => 'location-arrow',
        'icon-crop' => 'crop',
        'icon-code-fork' => 'code-fork',
        'icon-question' => 'question',
        'icon-info' => 'info',
        'icon-exclamation' => 'exclamation',
        'icon-superscript' => 'superscript',
        'icon-subscript' => 'subscript',
        'icon-eraser' => 'eraser',
        'icon-puzzle-piece' => 'puzzle-piece',
        'icon-microphone' => 'microphone',
        'icon-microphone-off' => 'microphone-off',
        'icon-shield' => 'shield',
        'icon-calendar-empty' => 'calendar-empty',
        'icon-fire-extinguisher' => 'fire-extinguisher',
        'icon-rocket' => 'rocket',
        'icon-maxcdn' => 'MaxCDN'
    );

    /*** Currency Icons ***/
    $icons['Currency Icons'] = array(
        'icon-euro' => 'Icon Euro',
        'icon-bitcoin' => 'icon-bitcoin',
        'icon-jpy' => 'icon-jpy',
        'icon-usd' => 'icon-usd',
        'icon-krw' => 'icon-krw',
        'icon-cny' => 'icon-cny',
        'icon-gbp' => 'icon-gbp',
        'icon-inr' => 'icon-inr',
    );

    /*** Text Editor Icons ***/
    $icons['Text Editor Icons'] = array(
        'icon-th-large' => 'th-large',
        'icon-th' => 'th',
        'icon-th-list' => 'th-list',
        'icon-file' => 'file',
        'icon-repeat' => 'repeat',
        'icon-list-alt' => 'list-alt',
        'icon-font' => 'font',
        'icon-bold' => 'bold',
        'icon-italic' => 'italic',
        'icon-text-height' => 'text-height',
        'icon-text-width' => 'text-width',
        'icon-align-left' => 'align-left',
        'icon-align-center' => 'align-center',
        'icon-align-right' => 'align-right',
        'icon-align-justify' => 'align-justify',
        'icon-list' => 'list',
        'icon-indent-left' => 'indent-left',
        'icon-indent-right' => 'indent-right',
        'icon-link' => 'link',
        'icon-cut' => 'cut',
        'icon-copy' => 'copy',
        'icon-paper-clip' => 'paper-clip',
        'icon-save' => 'save',
        'icon-list-ul' => 'list-ul',
        'icon-list-ol' => 'list-ol',
        'icon-strikethrough' => 'strikethrough',
        'icon-underline' => 'underline',
        'icon-table' => 'table',
        'icon-columns' => 'columns',
        'icon-undo' => 'undo',
        'icon-paste' => 'paste',
        'icon-file-alt' => 'file-alt',
        'icon-unlink' => 'unlink'
    );

    /*** Directional Icons ***/
    $icons['Directional Icons'] = array(
        'icon-chevron-left' => 'chevron-left',
        'icon-chevron-right' => 'chevron-right',
        'icon-arrow-left' => 'arrow-left',
        'icon-arrow-right' => 'arrow-right',
        'icon-arrow-up' => 'arrow-up',
        'icon-arrow-down' => 'arrow-down',
        'icon-chevron-up' => 'chevron-up',
        'icon-chevron-down' => 'chevron-down',
        'icon-hand-right' => 'hand-right',
        'icon-hand-left' => 'hand-left',
        'icon-hand-up' => 'hand-up',
        'icon-hand-down' => 'hand-down',
        'icon-circle-arrow-left' => 'circle-arrow-left',
        'icon-circle-arrow-right' => 'circle-arrow-right',
        'icon-circle-arrow-up' => 'circle-arrow-up',
        'icon-circle-arrow-down' => 'circle-arrow-down',
        'icon-caret-down' => 'caret-down',
        'icon-caret-up' => 'caret-up',
        'icon-caret-left' => 'caret-left',
        'icon-caret-right' => 'caret-right',
        'icon-double-angle-left' => 'double-angle-left',
        'icon-double-angle-right' => 'double-angle-right',
        'icon-double-angle-up' => 'double-angle-up',
        'icon-double-angle-down' => 'double-angle-down',
        'icon-angle-left' => 'angle-left',
        'icon-angle-right' => 'angle-right',
        'icon-angle-up' => 'angle-up',
        'icon-angle-down' => 'angle-down',
        'icon-circle-blank' => 'circle-blank',
        'icon-circle' => 'circle'
    );

    /*** Video Player Icons ***/
    $icons['Video Player Icons'] = array(
        'icon-play-circle' => 'play-circle',
        'icon-step-backward' => 'step-backward',
        'icon-fast-backward' => 'fast-backward',
        'icon-backward' => 'backward',
        'icon-play' => 'play',
        'icon-pause' => 'pause',
        'icon-stop' => 'stop',
        'icon-forward' => 'forward',
        'icon-fast-forward' => 'fast-forward',
        'icon-step-forward' => 'step-forward',
        'icon-eject' => 'eject',
        'icon-resize-full' => 'resize-full',
        'icon-resize-small' => 'resize-small',
        'icon-fullscreen' => 'fullscreen'
    );

    /*** Medical Icons ***/
    $icons['Medical Icons'] = array(
        'icon-user-md' => 'user-md',
        'icon-stethoscope' => 'stethoscope',
        'icon-hospital' => 'hospital',
        'icon-ambulance' => 'ambulance',
        'icon-medkit' => 'medkit',
        'icon-h-sign' => 'h-sign',
        'icon-plus-sign-alt' => 'plus-sign-alt'
    );

    return $group_icons ? $icons[$group_icons] : $icons;
}