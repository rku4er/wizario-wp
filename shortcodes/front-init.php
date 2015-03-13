<?php

/*** Table ***/
function webuza_table( $attr, $content = null){
    extract(
        shortcode_atts( array(
            'columns' => __( 'Number of Columns', WEBUZA_THEME_NAME ),
            'rows' => __( 'Number of Rows', WEBUZA_THEME_NAME ),
        ), $attr )
    );
    $content = do_shortcode( str_replace( array('<table>', '</table>' ), array( '<div class="table-wrap"><table cols="' . $columns . '" width="100%">', '</table></div>' ), $content ) );
    return $content;
}
add_shortcode( 'table', 'webuza_table' );

/*** Alert Messages ***/
function webuza_alert_message( $attr, $content = null ){
    extract( shortcode_atts( array( 'style' => __( 'Alert Message Style', WEBUZA_THEME_NAME ), ), $attr) );
    return '<div class="alert_message style_' . $style .'"><div class="content"><div class="content-inner">' . do_shortcode( $content ) . '</div><span class="alert-close"></span></div></div>';
}
add_shortcode( 'alert_message', 'webuza_alert_message' );

/*** Small Button ***/
function webuza_button_small( $attr ){
    extract(
        shortcode_atts( array(
            'style' => __( 'Style Button', WEBUZA_THEME_NAME ),
            'title' => __( 'Title', WEBUZA_THEME_NAME ),
            'link' => __( 'URL', WEBUZA_THEME_NAME )
        ), $attr )
    );

    $content = $link ? '<a href="'. $link .'" title="' . $title . '">' : '';
    $content .= '<span>' . $title . '</span>';
    $content .= $link ? '</a>' : '';
    return '<div class="button small small_' . $style . '">' . $content . '</div>';
}
add_shortcode( 'button_custom', 'webuza_button_custom' );

/*** Medium & Big Buttons ***/
function webuza_button_custom( $attr ){
    extract(
        shortcode_atts(array(
            'size' => __( 'Size', WEBUZA_THEME_NAME ),
            'title' => __( 'Title', WEBUZA_THEME_NAME ),
            'link' => __( 'URL', WEBUZA_THEME_NAME )
        ), $attr )
    );

    $content = $link ? '<a href="'. $link .'" title="' . $title . '">' : '';
    $content .= '<span>' . $title . '</span>';
    $content .= $link ? '</a>' : '';
    return '<div class="button ' . $size . '">' . $content .'</div>';
}
add_shortcode( 'button_small', 'webuza_button_small' );

/*** Promo Box ***/
function webuza_promo_box( $attr, $content = null ){
    return '<div class="promo_box">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'promo_box', 'webuza_promo_box' );


#-----------------------------------------------------------------#
# Icons ShortCodes
#-----------------------------------------------------------------#

/*** Standard Icons ***/
function webuza_icon( $attr ){
    extract( shortcode_atts( array(
            'image' => __( 'Icon id', WEBUZA_THEME_NAME ),
            'size'  => __( 'Icon size', WEBUZA_THEME_NAME )
        ), $attr )
    );
    return '<span class="icon"><i class="fa ' . $image . ' ' . $size . '"></i></span>';
}
add_shortcode( 'icon', 'webuza_icon' );

/*** Social Icons ***/
function webuza_social_icon( $attr ){
    extract( shortcode_atts( array(
            'image' => __( 'Icon id', WEBUZA_THEME_NAME ),
            'size'  => __( 'Icon size', WEBUZA_THEME_NAME )
        ), $attr )
    );
    return '<span class="icon"><i class="fa ' . $image . ' ' . $size . '"></i></span>';
}
add_shortcode( 'social_icon', 'webuza_social_icon' );

/*** Set Your Style for Icon ***/
function webuza_custom_icon( $attr ){
    extract( shortcode_atts( array(
            'image' => __( 'Icon id', WEBUZA_THEME_NAME ),
            'custom_image' => __( 'Custom Image', WEBUZA_THEME_NAME ),
            'size'  => __( 'Font size', WEBUZA_THEME_NAME ),
            'color'  => __( 'Icon color', WEBUZA_THEME_NAME ),
            'bkg_color'  => __( 'Background Color', WEBUZA_THEME_NAME ),
            'border_width'  => __( 'Border Width', WEBUZA_THEME_NAME ),
            'border_radius'  => __( 'Border radius', WEBUZA_THEME_NAME ),
            'padding'  => __( 'Padding', WEBUZA_THEME_NAME ),
            'margin_bottom' => __( 'Margin Bottom', WEBUZA_THEME_NAME )
        ), $attr )
    );

    $style_wrap = 'style="background-color: #' . $bkg_color . '; border: ' . $border_width. ' solid #' . $color . '; padding: ' . $padding . '; ';
    if( $margin_bottom != 'auto' ) {
        $style_wrap .= 'margin-bottom: ' . $margin_bottom . ';';
    }
    $style_wrap .= ' border-radius: ' . $border_radius . ';';
    $style_wrap .= '"';
    $style_icon = 'style="font-size: ' . $size . '; color: #' . $color . ';"';

    if( $custom_image != 'Custom Image' ){
        $_image_wh = getimagesize( $custom_image );
        $_image_width = $_image_wh[0];
        $_image_height = $_image_wh[1];
        if( $_image_width == $_image_height ){
            $_span_size = $_image_width;
            $_span_padding = 'padding: 0px;';
        }elseif( $_image_width > $_image_height ){
            $_span_size = $_image_width;
            $_tmp = ( $_image_width - $_image_height ) / 2;
            $_span_padding = 'padding-top: '.$_tmp.'px ;';
        }elseif( $_image_width < $_image_height ){
            $_span_size = $_image_height;
            $_tmp = ( $_image_height - $_image_width ) / 2;
            $_span_padding = 'padding-left: '.$_tmp.'px; padding-right: '.$_tmp.'px;';
        }
        $_item = '<span style="'. $_span_size .'px; height: '. $_span_size .'px; display: block; '. $_span_padding .' "><img src="' . $custom_image . '" style="display: table-cell;" /></span>';
    } else {
        $_item = '<i class="fa ' . $image . '" ' . $style_icon . ' ></i>';
    }

    $output = '<span class="icon custom';
    if( $margin_bottom == 'auto' ) { $output .= ' mauto'; }
    $output .= '" ' . $style_wrap . ' >'. $_item .'</span>';

    return $output;
}
add_shortcode('custom_icon', 'webuza_custom_icon');

/*** Our Main Service ***/
function webuza_main_services( $attr, $content = null ){
    return '<div class="main-services">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'main_services', 'webuza_main_services' );

#-----------------------------------------------------------------#
# Other ShortCodes
#-----------------------------------------------------------------#

/*** Bar Graphs ***/
function webuza_bar_graphs( $attr, $content = null ){
    $content = do_shortcode( str_replace( 'bar_graph]<br />', 'bar_graph]', $content ) );
    return '<div class="bar_graphs">' . $content . '</div>';
}
add_shortcode( 'bar_graphs', 'webuza_bar_graphs' );

/*** Bar Graph (for Bar Graphs) ***/
function webuza_bar_graph( $attr ){
    extract(
        shortcode_atts( array(
            'title' => __( 'Title', WEBUZA_THEME_NAME ),
            'bar_percent'  => __( 'Bar Percent', WEBUZA_THEME_NAME )
        ), $attr)
    );
    return <<<EODHTML
       <div class="bar_graph">
           <div class="title">$title</div>
           <div class="graph-outer" >
               <div class="graph" graph-percent="$bar_percent"></div>

           </div>
       </div>
EODHTML;
}
add_shortcode('bar_graph', 'webuza_bar_graph');

/*** Team Members ***/
function webuza_team_members( $attr, $content = null ){
    $content = do_shortcode( str_replace( 'team_member]<br />', 'team_member]', $content ) );
    extract( shortcode_atts( array( 'columns' => __( 'Columns', WEBUZA_THEME_NAME ), ), $attr ) );

    $col_class = 'columns-hover';
    switch( $columns ) {
        case '2':
            $col_class .= ' columns_set2';
            break;
        case '3':
            $col_class .= ' columns_set3';
            break;
        case '4':
            $col_class .= ' columns_set4';
            break;
        case '5':
            $col_class .= ' columns_set5';
            break;
        case '6':
            $col_class .= ' columns_set6';
            break;
        default:
            $col_class .= ' columns_set4';
    }
    return '<br /><div class="team_members ' . $col_class . '">' . $content . '<br clear="all" /></div>';
}
add_shortcode( 'team_members', 'webuza_team_members' );

/*** Team Member (for Team Members) ***/
function webuza_team_member( $attr, $content = null ){
    extract(shortcode_atts(array(
            'image' => __( 'Image Member', WEBUZA_THEME_NAME ),
            'member_url' => __( 'Member Url', WEBUZA_THEME_NAME ),
            'name' => __( 'Name', WEBUZA_THEME_NAME ),
            'job' => __( 'Memebr job', WEBUZA_THEME_NAME ),
            'team_member_id' => __( 'Team Member Id', WEBUZA_THEME_NAME )
        ), $attr )
    );
    $content = do_shortcode( $content );
    return <<<EODHTML
       <div class="team_member col-hover">
           <div class="member_image"><a href="#member_url" title="$name"><img src="$image" alt="$name" /></a></div>
           <div class="member_title">
               <h4><a href="#member_url" title="$name"><span>$name</span></a></h4>
               <span class="job">$job</span>
           </div>
           <div class="content">$content</div>
       </div>
EODHTML;
}
add_shortcode( 'team_member', 'webuza_team_member' );

/*** Prising Plan ***/
function webuza_prising_plan( $attr, $content = null ){
    $content = str_replace( 'prising_plan_column]<br />', 'prising_plan_column]', $content );
    $content = do_shortcode( str_replace( '<p></p>', '', $content ) );
    extract( shortcode_atts( array( 'columns' => __( 'Columns', WEBUZA_THEME_NAME ), ), $attr ) );

    switch( $columns ) {
        case '1':
            $col_class = 'one_column';
            break;
        case '2':
            $col_class = 'two_columns';
            break;
        case '3':
            $col_class = 'three_columns';
            break;
        case '4':
            $col_class = 'four_columns';
            break;
        default:
            $col_class = 'three_columns';
    }
    return '<div class="prising_plan ' . $col_class . '">' . $content . '<div class="clear"></div><div class="decor-vert-separator" style="float: none; height: 35px;"></div><div class="prising-shadow"></div></div>';
}
add_shortcode( 'prising_plan', 'webuza_prising_plan' );

/*** Prising Plan Unit***/
function webuza_prising_plan_column( $attr, $content = null ){
    extract(
        shortcode_atts( array(
            'title' => __( 'Column Title', WEBUZA_THEME_NAME ),
            'price' => __( '$100.95', WEBUZA_THEME_NAME ),
            'highlight'  => __( 'false', WEBUZA_THEME_NAME )
        ), $attr )
    );
    $content = do_shortcode( $content );
    $highlight_class = '';
    if ($highlight == 'true'){
        $highlight_class = ' highlighted';
    }
    $price = preg_replace( '/(.*)(\.)(\d{1,})/', '$1<span class="cents">$2$3</span>', $price );
    return <<<EODHTML
       <div class="prising_plan_column$highlight_class">
           <div class="prising_title">
               <h3><span>$title</span></h3>
           </div>
           <div class="prising_price">
               <span>$price</span>
           </div>
           <div class="content">$content</div>
       </div>
EODHTML;
}
add_shortcode( 'prising_plan_column', 'webuza_prising_plan_column' );

/*** Carousel ***/
function webuza_carousel( $attr, $content = null ){
    $content = preg_replace( '/(\s)?(<br \/>)?(\s)?(\[carousel_item\])/', '$4', $content );
    $content = preg_replace( '/(\[\/carousel_item\])(\s)?(<br \/>)?/', '$1', $content );
    $content = do_shortcode( str_replace( '<p></p>', '', $content ) );
    extract(
        shortcode_atts( array(
            'items' => '5',
            'visible_items' => '4'
        ), $attr )
    );
    return '<div class="carousel"><ul class="carousel-items items_number_' . $visible_items . '">' . $content . '</ul></div>';
}
add_shortcode( 'carousel', 'webuza_carousel' );

/*** Carousel Unit ***/
function webuza_carousel_item( $attr, $content = null ){
    $content = do_shortcode( str_replace( '<p></p>', '', $content ) );
    return '<li class="slide">' . $content . '</li>';
}
add_shortcode( 'carousel_item', 'webuza_carousel_item' );

/*** Promo Teasers ***/
function webuza_promo_teasers( $attr, $content = null ){

    global $promo_teasers_col_class;
    global $promo_teasers_columns;

    $content = preg_replace( '/(\s)?(<br \/>)?(\s)?(\[promo_teaser)/', '$4', $content );
    $content = preg_replace( '/(\[\/promo_teaser\])(\s)?(<br \/>)?/', '$1', $content );

    extract( shortcode_atts( array( 'columns' => '3' ), $attr ) );
    $promo_teasers_columns = $columns;
    switch ($columns) {
        case '2':
            $promo_teasers_col_class = ' col_6';
            break;
        case '3':
            $promo_teasers_col_class = ' col_4';
            break;
    }
    return '<div class="promo-teasers columns-hover columns_set' . $columns . '">' . do_shortcode( $content ) . '<div class="clear"></div></div>';
}
add_shortcode('promo_teasers', 'webuza_promo_teasers');

/*** Promo Teaser Unit (for Promo Teasers) ***/
function webuza_promo_teaser( $attr, $content = null ){

    global $promo_teasers_col_class;
    global $promo_teasers_columns;

    extract(
        shortcode_atts( array(
            'title' => '',
            'image' => '',
            'heading' => '',
            'paragraph_text' => '',
            'button_text' => '',
            'button_link' => ''
        ), $attr )
    );

    $imageHtml = '<div class="promo-teas-img" style="background-image: url(';
    if ( $image != '' && $image != 'Your image src!' ){
        $imageHtml .= $image;
    } else {
        $imageHtml .= get_template_directory_uri(). '/images/promo-teaser-'. $promo_teasers_columns .'-noimage.jpg';
    }
    $imageHtml .= ');"></div>';

    if ($promo_teasers_columns == 2){
        $_content = '<h3>'. $heading .'</h3><hr class="promo-teas"><p>'. $paragraph_text .'</p>';
    } else {
        $_content = '<h3>'. $heading .'</h3><hr class="promo-teas">';
    }
//    $imageHtml .= ' />';

    return <<<ECHOHTML
       <div class="promo-teaser col-hover $promo_teasers_col_class ">
           <div class="teaser-content">
               $imageHtml
               <div class="teaser-title">
                   <span>
                       <h3>$title</h3>
                   </span>
               </div>
               <div class="content">
                   <div>
                       $_content
                       <div class="button small small_red" >
                            <a title="$button_text" href="$button_link">
                                <span>$button_text</span>
                            </a>
                       </div>
                   </div>
               </div>
               <div class="triangle"></div>
           </div>
       </div>
ECHOHTML;

}
add_shortcode( 'promo_teaser', 'webuza_promo_teaser' );

/*** Recent Posts ***/
function webuza_recent_posts( $attr, $content = null ){
    extract(
        shortcode_atts( array(
            'ids' => '',
            'columns' => '4',
            'format' => 'full',
            'view_all' => ''
        ), $attr )
    );
    $ids = explode( ',', trim( $ids ) );
    if ( empty( $ids[0] ) ){
        $ids_tmp = wp_get_recent_posts( array( 'numberposts' => $columns ) );
        $ids = array();
        if( !empty( $ids_tmp ) ) foreach( $ids_tmp as $id_tmp ) $ids[] = $id_tmp['ID'] .',';
        if( empty( $ids ) ) return '';
    }
    $_idsCount = count( $ids );
    $_regIds = 1;
    $html = '';
    $html .= '<div class="recent-posts';
    if( $format != 'full' ) $html .= ' short';
    $html .= '">';
    $html .= '<div class="block-title" style="float: left; width: 100%;">';
    $html .= '<h3>';
    $html .= __( 'Recent Posts /', WEBUZA_THEME_NAME );
    $html .= '<a href="'. $view_all.'">';
    $html .= __( 'view all', WEBUZA_THEME_NAME ) .'</a></h3>';
    $html .= '</div>';
    $html .= '';
    foreach( $ids as $id ){
        if( !$id ) continue;
        $_post = get_post( $id );
        $_post_format = get_post_format( $_post->ID );
        if( $format == 'full' ){
            $html .= '<div class="recent-post"';
            if( $_regIds == $_idsCount ) $html .= 'style="margin-right: 0px;"';
            $html .= '>';
            $html .= '<div class="recent-image">';
            $html .= '<a class="recent-post-img" href="'. $_post->guid .'">';

            $thumbnail = get_the_post_thumbnail( $_post->ID, array( 252, 162 ), array( 'title' => $_post->post_title ) );
            if( empty( $thumbnail ) ) $thumbnail = '<img src="' . get_template_directory_uri() . '/images/recent-post-no-image.png" alt="no image" />';
            if( $_post_format == 'video' ) $thumbnail = '<img src="'. get_template_directory_uri() .'/images/recent-post-video.png" alt="video post" />';
            if( $_post_format == 'audio' ) $thumbnail = '<img src="'. get_template_directory_uri() .'/images/recent-post-audio.png" alt="audio post" />';
            if( $_post_format == 'quote' ) $thumbnail = '<img src="'. get_template_directory_uri() .'/images/recent-post-quote.png" alt="quote post" />';
            if( $_post_format == 'link' ) $thumbnail = '<img src="'. get_template_directory_uri() .'/images/recent-post-link.png" alt="link post" />';

            $html .= $thumbnail;
            $html .= '</a>';
            $html .= '</div>';
            $html .= '<div class="recent-title">';
            $html .= '<h4>';
            if( $_post->post_title == '') { $_ehoTitle = 'No Title'; } else { $_ehoTitle = $_post->post_title; }
            $html .= '<a href="'. $_post->guid .'">'. $_ehoTitle .'</a>';
            $html .= '</h4>';
            $html .= '</div>';
            $date = date_create( $_post->post_date );
            if( $_post->comment_count == 0 ) {
                $_tmpComment = ' No Comments';
            }elseif( $_post->comment_count == 1 ) {
                $_tmpComment = ' One Comment';
            }else{
                $_tmpComment =  $_post->comment_count .' Comments';
            }
            $html .= '<div class="recent-meta">';
            $html .= '<div class="date">'. date_format( $date, 'd F Y,') .'</div>';
            $html .= '<div class="comment">&nbsp;'. $_tmpComment .'</div>';
            $html .= '</div>';
            $html .= '</div>';
        } else {
            $html .= '<div class="recent-post" style="width: 252px;';
            if( $_regIds == $_idsCount ) $html .= ' margin-right: 0px;';
            $html .= '">';
            $html .= '<div class="recent-short">';
            $html .= '<div class="recent-meta">';
            $date = date_create( $_post->post_date );
            $html .= date_format( $date, 'd.m') .'</div>';
            $html .= '<div class="recent-title">';
            if( $_post->post_title == '') { $_ehoTitle = 'No Title'; } else { $_ehoTitle = $_post->post_title; }
            $html .= '<h4><a href="'. $_post->guid .'">'. $_ehoTitle .'</a></h4>';
            $html .= '<p>&nbsp;';
            if( $_post->comment_count == 0 ) { $html .= __('No Comments', WEBUZA_THEME_NAME ); } elseif( $_post->comment_count == 1 ) { $html .= __( 'One Comment ', WEBUZA_THEME_NAME ); } else { $html .= $_post->comment_count . __( ' Comments', WEBUZA_THEME_NAME ); }
            $html .= '</p>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
        }
        $_regIds++;
    }
    $html .= '<div class="clear"></div>';
    $html .= '</div>';
    return $html;
}
add_shortcode('recent_posts', 'webuza_recent_posts');

/*** Custom Archive ***/
function webuza_custom_archive( $attr, $content = null ){
    extract(
        shortcode_atts( array(
            'title' => '',
            'items' => '',
            'type' => '',
            'column' => '',
        ), $attr )
    );
    $args = array(
        'type' => $type,
        'limit' => $items,
        'format' => 'html',
        'before' => '',
        'after' => '',
        'show_post_count' => false,
        'echo' => false
    );

    $columns = $column;
    $result = wp_get_archives( $args );
    $reg = 0;
    $ttmm = str_replace( array( "\r\n", "\r", "\n", "\t" ), '', $result );
    $ttmm2 = str_replace( "</li><li>" , '_*_', $ttmm );
    $ttmm3 = str_replace( array( "<li>", "</li>" ), '_*_', $ttmm2 );

    $tmp = explode( "_*_", $ttmm3 );
    if( $columns != '1' && $columns != '2' ) $columns = 2;
    $newArr = array();
    foreach( $tmp as $tmP ){
        if( $tmP != '' ){
            $newArr[] = $tmP;
        }
    }

    if( $columns == '2' ) {
        $ulLeft = '<ul class="archive_left">';
        $ulRight = '<ul class="archive_right">';
        $newArrCount = count( $newArr ) / 2;
        foreach( $newArr as $key => $tm ){
            if( $tm != '' ){
                if( $reg < $newArrCount ) {
                    $ulLeft .= '<li>'. $tm .'</li>';
                }else{
                    $ulRight .= '<li>'. $tm .'</li>';
                }
                $reg++;
            }
        }
        $ulLeft .= '</ul>';
        $ulRight .= '</ul>';
        $html = '<div class="custom_archives"><h3>'. $title .'</h3>'. $ulLeft . $ulRight .'</div>';
    }else{
        $ulLeft = '<ul class="archive_left">';
        foreach( $newArr as $key => $tm ){
            if( $tm != '' ) $ulLeft .= '<li>'. $tm .'</li>';
            $reg++;
        }
        $ulLeft .= '</ul>';
        $html = '<div class="custom_archives"><h3>'. $title .'</h3>'. $ulLeft .'</div>';
    }
    return $html;
}
add_shortcode( 'custom_archives', 'webuza_custom_archive' );

/*** Recent Projects ***/
function webuza_recent_projects( $attr ){
    global $post, $wpdb;
    extract(
        shortcode_atts( array(
            'number' => '',
            'columns' => '',
            'view_all' => '#'
        ), $attr )
    );
    ?>

    <section class="carousel-slider-block">
        <div class="container">
            <div class="row">

                <div class="flexslider carousel-slider">

                    <h3 class="caption-gallery"><?php echo __('Recent Projects /', WEBUZA_THEME_NAME );  ?> <a href="<?php echo $view_all ?>"><?php echo __( 'view all', WEBUZA_THEME_NAME ) ?></a></h3>

                    <ul class="slides">

                        <?php $r = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => $number )); ?>
                        <?php if ($r->have_posts()) : ?>
                            <?php  while ($r->have_posts()) : $r->the_post(); ?>
                                <li>
                                    <?php
                                        $thumbnail = get_the_post_thumbnail( $post->ID, array( 346, 221 ) );
                                        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
                                        $post_title = ($post->post_title == '') ? 'No Title' : $post->post_title;
                                        $date = date_create( $post->post_date );
                                        $_content = strip_shortcodes( $post->post_content );
                                        $_maxchar = 150;
                                    ?>
                                    <figure class="widget-item">
                                        <a href="<?php echo $large_image_url[0]; ?>" data-lightbox="<?php echo $post->ID .'-large'; ?>">
                                            <div class="gallery-thumb">
                                                <?php if( $thumbnail ) { echo $thumbnail; } else { echo '<img src="'. get_template_directory_uri(). '/images/no-portfolio-item-3.jpg" alt="no image" />'; } ?>
                                                <b class="ico-zoom"></b>
                                            </div>
                                        </a>
                                        <figcaption class="gallery-caption">
                                            <h4 class="xmd-h"><?php echo $post_title; ?></h4>
                                            <time datetime="2014-12-12" class="pub-date"><?php echo date_format( $date, 'd F Y'); ?></time>
                                            <div class="lorem-caption">
                                                <p><?php kama_excerpt( "maxchar=$_maxchar&text=$_content"); ?></p>
                                            </div>
                                        </figcaption>
                                    </figure>

                                </li>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>

                </div>
            </div>
        </div>
    </section>
<?php
}
add_shortcode( 'recent_projects', 'webuza_recent_projects' );