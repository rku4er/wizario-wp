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
    wp_enqueue_style( 'webuza_font_awesome', SHOESTRAP_ASSETS_URL . '/css/font-awesome.css', false );

    wp_enqueue_script('jcolor-picker', SHOESTRAP_ASSETS_URL . '/js/vendor/jscolor/jscolor.js', false, '1.4.1');
}
add_action('init', 'webuza_tinymce_init');

#-----------------------------------------------------------------#
# Add Webuza TinyMce js file
#-----------------------------------------------------------------#
function webuza_add_js_plugin( $plugin_array ) {
    $plugin_array['jquery-ui-dialog'] = SHOESTRAP_ASSETS_URL . '/js/vendor/jquery-ui-dialog.min.js';
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
        'fa-twitter-sign' => 'twitter-sign',
        'fa-facebook-sign' => 'facebook-sign',
        'fa-linkedin-sign' => 'linkedin-sign',
        'fa-github-sign' => 'github-sign',
        'fa-phone' => 'phone',
        'fa-phone-sign' => 'phone-sign',
        'fa-twitter' => 'twitter',
        'fa-facebook' => 'facebook',
        'fa-github' => 'github',
        'fa-sign-blank' => 'sign-blank',
        'fa-pinterest' => 'pinterest',
        'fa-pinterest-sign' => 'pinterest-sign',
        'fa-google-plus-sign' => 'google-plus-sign',
        'fa-google-plus' => 'google-plus',
        'fa-linkedin' => 'linkedin',
        'fa-github-alt' => 'github-alt'
    );

    /*** Web Application Icons ***/
    $icons['Web Application Icons'] = array(
        'fa-glass' => 'Glass',
        'fa-music' => 'Music',
        'fa-search' => 'Search',
        'fa-envelope' => 'Envelope',
        'fa-heart' => 'Heart',
        'fa-star' => 'Star',
        'fa-star-empty' => 'Star Empty',
        'fa-user' => 'User',
        'fa-film' => 'Film',
        'fa-ok' => 'OK',
        'fa-remove' => 'Remove',
        'fa-zoom-in' => 'Zoom In',
        'fa-zoom-out' => 'Zoom Out',
        'fa-off' => '',
        'fa-signal' => 'signal',
        'fa-cog' => 'cog',
        'fa-trash' => 'trash',
        'fa-home' => 'home',
        'fa-time' => 'time',
        'fa-road' => 'road',
        'fa-download-alt' => 'download-alt',
        'fa-download' => 'download',
        'fa-upload' => 'upload',
        'fa-inbox' => 'inbox',
        'fa-refresh' => 'refresh',
        'fa-lock' => 'lock',
        'fa-flag' => 'flag',
        'fa-headphones' => 'headphones',
        'fa-volume-off' => 'volume-off',
        'fa-volume-down' => 'volume-down',
        'fa-volume-up' => 'volume-up',
        'fa-qrcode' => 'qrcode',
        'fa-barcode' => 'barcode',
        'fa-tag' => 'tag',
        'fa-tags' => 'tags',
        'fa-book' => 'book',
        'fa-bookmark' => 'bookmark',
        'fa-print' => 'print',
        'fa-camera' => 'camera',
        'fa-facetime-video' => 'facetime-video',
        'fa-picture' => 'picture',
        'fa-pencil' => 'pencil',
        'fa-map-marker' => 'map-marker',
        'fa-adjust' => 'adjust',
        'fa-tint' => 'tint',
        'fa-edit' => 'edit',
        'fa-share' => 'share',
        'fa-check' => 'check',
        'fa-move' => 'move',
        'fa-plus-sign' => 'plus-sign',
        'fa-minus-sign' => 'minus-sign',
        'fa-remove-sign' => 'remove-sign',
        'fa-ok-sign' => 'ok-sign',
        'fa-question-sign' => 'question-sign',
        'fa-info-sign' => 'info-sign',
        'fa-screenshot' => 'screenshot',
        'fa-remove-circle' => 'remove-circle',
        'fa-ok-circle' => 'ok-circle',
        'fa-ban-circle' => 'ban-circle',
        'fa-share-alt' => 'share-alt',
        'fa-plus' => 'plus',
        'fa-minus' => 'minus',
        'fa-asterisk' => 'asterisk',
        'fa-exclamation-sign' => 'exclamation-sign',
        'fa-gift' => 'gift',
        'fa-leaf' => 'leaf',
        'fa-fire' => 'fire',
        'fa-eye-open' => 'eye-open',
        'fa-eye-close' => 'eye-close',
        'fa-warning-sign' => 'warning-sign',
        'fa-plane' => 'plane',
        'fa-calendar' => 'calendar',
        'fa-random' => 'random',
        'fa-comment' => 'comment',
        'fa-magnet' => 'magnet',
        'fa-retweet' => 'retweet',
        'fa-shopping-cart' => 'shopping-cart',
        'fa-folder-close' => 'folder-close',
        'fa-folder-open' => 'folder-open',
        'fa-resize-vertical' => 'resize-vertical',
        'fa-resize-horizontal' => 'resize-horizontal',
        'fa-bar-chart' => 'bar-chart',
        'fa-camera-retro' => 'camera-retro',
        'fa-key' => 'key',
        'fa-cogs' => 'cogs',
        'fa-comments' => 'comments',
        'fa-thumbs-up' => 'thumbs-up',
        'fa-thumbs-down' => 'thumbs-down',
        'fa-star-half' => 'star-half',
        'fa-heart-empty' => 'heart-empty',
        'fa-signout' => 'signout',
        'fa-pushpin' => 'pushpin',
        'fa-external-link' => 'external-link',
        'fa-signin' => 'signin',
        'fa-trophy' => 'trophy',
        'fa-upload-alt' => 'upload-alt',
        'fa-lemon' => 'lemon',
        'fa-check-empty' => 'check-empty',
        'fa-bookmark-empty' => 'bookmark-empty',
        'fa-unlock' => 'unlock',
        'fa-credit-card' => 'credit-card',
        'fa-rss' => 'rss',
        'fa-hdd' => 'hdd',
        'fa-bullhorn' => 'bullhorn',
        'fa-bell' => 'bell',
        'fa-certificate' => 'certificate',
        'fa-globe' => 'globe',
        'fa-wrench' => 'wrench',
        'fa-tasks' => 'tasks',
        'fa-filter' => 'filter',
        'fa-briefcase' => 'briefcase',
        'fa-group' => 'group',
        'fa-cloud' => 'cloud',
        'fa-beaker' => 'beaker',
        'fa-reorder' => 'reorder',
        'fa-magic' => 'magic',
        'fa-truck' => 'truck',
        'fa-money' => 'money',
        'fa-sort' => 'sort',
        'fa-sort-down' => 'sort-down',
        'fa-sort-up' => 'sort-up',
        'fa-envelope-alt' => 'envelope-alt',
        'fa-legal' => 'legal',
        'fa-dashboard' => 'dashboard',
        'fa-comment-alt' => 'comment-alt',
        'fa-comments-alt' => 'comments-alt',
        'fa-bolt' => 'bolt',
        'fa-sitemap' => 'sitemap',
        'fa-umbrella' => 'umbrella',
        'fa-lightbulb' => 'lightbulb',
        'fa-exchange' => 'exchange',
        'fa-cloud-download' => 'cloud-download',
        'fa-cloud-upload' => 'cloud-upload',
        'fa-suitcase' => 'suitcase',
        'fa-bell-alt' => 'bell-alt',
        'fa-coffee' => 'coffee',
        'fa-food' => 'food',
        'fa-building' => 'building',
        'fa-fighter-jet' => 'fighter-jet',
        'fa-beer' => 'beer',
        'fa-desktop' => 'desktop',
        'fa-laptop' => 'laptop',
        'fa-tablet' => 'tablet',
        'fa-mobile-phone' => 'mobile-phone',
        'fa-circle-blank' => 'circle-blank',
        'fa-quote-left' => 'quote-left',
        'fa-quote-right' => 'quote-right',
        'fa-spinner' => 'spinner',
        'fa-circle' => 'circle',
        'fa-reply' => 'reply',
        'fa-folder-close-alt' => 'folder-close-alt',
        'fa-folder-open-alt' => 'folder-open-alt',
        'fa-expand-alt' => 'expand-alt',
        'fa-collapse-alt' => 'collapse-alt',
        'fa-smile' => 'smile',
        'fa-frown' => 'frown',
        'fa-meh' => 'meh',
        'fa-gamepad' => 'gamepad',
        'fa-keyboard' => 'keyboard',
        'fa-flag-alt' => 'flag-alt',
        'fa-flag-checkered' => 'flag-checkered',
        'fa-terminal' => 'terminal',
        'fa-code' => 'code',
        'fa-reply-all' => 'reply-all',
        'fa-mail-reply-all' => 'mail-reply-all',
        'fa-star-half-empty' => 'star-half-empty',
        'fa-location-arrow' => 'location-arrow',
        'fa-crop' => 'crop',
        'fa-code-fork' => 'code-fork',
        'fa-question' => 'question',
        'fa-info' => 'info',
        'fa-exclamation' => 'exclamation',
        'fa-superscript' => 'superscript',
        'fa-subscript' => 'subscript',
        'fa-eraser' => 'eraser',
        'fa-puzzle-piece' => 'puzzle-piece',
        'fa-microphone' => 'microphone',
        'fa-microphone-off' => 'microphone-off',
        'fa-shield' => 'shield',
        'fa-calendar-empty' => 'calendar-empty',
        'fa-fire-extinguisher' => 'fire-extinguisher',
        'fa-rocket' => 'rocket',
        'fa-maxcdn' => 'MaxCDN'
    );

    /*** Currency Icons ***/
    $icons['Currency Icons'] = array(
        'fa-euro' => 'Icon Euro',
        'fa-bitcoin' => 'fa-bitcoin',
        'fa-jpy' => 'fa-jpy',
        'fa-usd' => 'fa-usd',
        'fa-krw' => 'fa-krw',
        'fa-cny' => 'fa-cny',
        'fa-gbp' => 'fa-gbp',
        'fa-inr' => 'fa-inr',
    );

    /*** Text Editor Icons ***/
    $icons['Text Editor Icons'] = array(
        'fa-th-large' => 'th-large',
        'fa-th' => 'th',
        'fa-th-list' => 'th-list',
        'fa-file' => 'file',
        'fa-repeat' => 'repeat',
        'fa-list-alt' => 'list-alt',
        'fa-font' => 'font',
        'fa-bold' => 'bold',
        'fa-italic' => 'italic',
        'fa-text-height' => 'text-height',
        'fa-text-width' => 'text-width',
        'fa-align-left' => 'align-left',
        'fa-align-center' => 'align-center',
        'fa-align-right' => 'align-right',
        'fa-align-justify' => 'align-justify',
        'fa-list' => 'list',
        'fa-indent-left' => 'indent-left',
        'fa-indent-right' => 'indent-right',
        'fa-link' => 'link',
        'fa-cut' => 'cut',
        'fa-copy' => 'copy',
        'fa-paper-clip' => 'paper-clip',
        'fa-save' => 'save',
        'fa-list-ul' => 'list-ul',
        'fa-list-ol' => 'list-ol',
        'fa-strikethrough' => 'strikethrough',
        'fa-underline' => 'underline',
        'fa-table' => 'table',
        'fa-columns' => 'columns',
        'fa-undo' => 'undo',
        'fa-paste' => 'paste',
        'fa-file-alt' => 'file-alt',
        'fa-unlink' => 'unlink'
    );

    /*** Directional Icons ***/
    $icons['Directional Icons'] = array(
        'fa-chevron-left' => 'chevron-left',
        'fa-chevron-right' => 'chevron-right',
        'fa-arrow-left' => 'arrow-left',
        'fa-arrow-right' => 'arrow-right',
        'fa-arrow-up' => 'arrow-up',
        'fa-arrow-down' => 'arrow-down',
        'fa-chevron-up' => 'chevron-up',
        'fa-chevron-down' => 'chevron-down',
        'fa-hand-right' => 'hand-right',
        'fa-hand-left' => 'hand-left',
        'fa-hand-up' => 'hand-up',
        'fa-hand-down' => 'hand-down',
        'fa-circle-arrow-left' => 'circle-arrow-left',
        'fa-circle-arrow-right' => 'circle-arrow-right',
        'fa-circle-arrow-up' => 'circle-arrow-up',
        'fa-circle-arrow-down' => 'circle-arrow-down',
        'fa-caret-down' => 'caret-down',
        'fa-caret-up' => 'caret-up',
        'fa-caret-left' => 'caret-left',
        'fa-caret-right' => 'caret-right',
        'fa-double-angle-left' => 'double-angle-left',
        'fa-double-angle-right' => 'double-angle-right',
        'fa-double-angle-up' => 'double-angle-up',
        'fa-double-angle-down' => 'double-angle-down',
        'fa-angle-left' => 'angle-left',
        'fa-angle-right' => 'angle-right',
        'fa-angle-up' => 'angle-up',
        'fa-angle-down' => 'angle-down',
        'fa-circle-blank' => 'circle-blank',
        'fa-circle' => 'circle'
    );

    /*** Video Player Icons ***/
    $icons['Video Player Icons'] = array(
        'fa-play-circle' => 'play-circle',
        'fa-step-backward' => 'step-backward',
        'fa-fast-backward' => 'fast-backward',
        'fa-backward' => 'backward',
        'fa-play' => 'play',
        'fa-pause' => 'pause',
        'fa-stop' => 'stop',
        'fa-forward' => 'forward',
        'fa-fast-forward' => 'fast-forward',
        'fa-step-forward' => 'step-forward',
        'fa-eject' => 'eject',
        'fa-resize-full' => 'resize-full',
        'fa-resize-small' => 'resize-small',
        'fa-fullscreen' => 'fullscreen'
    );

    /*** Medical Icons ***/
    $icons['Medical Icons'] = array(
        'fa-user-md' => 'user-md',
        'fa-stethoscope' => 'stethoscope',
        'fa-hospital' => 'hospital',
        'fa-ambulance' => 'ambulance',
        'fa-medkit' => 'medkit',
        'fa-h-sign' => 'h-sign',
        'fa-plus-sign-alt' => 'plus-sign-alt'
    );

    return $group_icons ? $icons[$group_icons] : $icons;
}
