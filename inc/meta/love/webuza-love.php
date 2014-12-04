<?php

class WebuzaLove {

    function __construct()   {
        add_action( 'wp_enqueue_scripts', array( &$this, 'enqueue_scripts' ) );
        add_action( 'wp_ajax_webuza-love', array( &$this, 'ajax' ) );
        add_action( 'wp_ajax_nopriv_webuza-love', array( &$this, 'ajax' ) );
    }

    function enqueue_scripts() {

        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'webuza-love', get_template_directory_uri() . '/inc/meta/love/js/webuza-love.js', 'jquery', '1.0', TRUE );

        wp_localize_script( 'webuza-love', 'webuzaLove', array(
            'ajaxurl' => admin_url( 'admin-ajax.php' )
        ));
    }

    function ajax( $post_id ) {
        if( isset($_POST['loves_id']) ) {
            $post_id = str_replace( 'webuza-love-', '', $_POST['loves_id'] );
            echo $this->love_post( $post_id, 'update' );
        }
        else {
            $post_id = str_replace( 'webuza-love-', '', $_POST['loves_id'] );
            echo $this->love_post( $post_id, 'get' );
        }
        exit;
    }

    function love_post( $post_id, $action = 'get' ) {

        if( !is_numeric( $post_id ) ) return;
        switch( $action ) {
            case 'get':
                $love_count = get_post_meta( $post_id, '_webuza_love', true );
                if( !$love_count ){
                    $love_count = 0;
                    add_post_meta( $post_id, '_webuza_love', $love_count, true );
                }
                return '<i id="icon-heart" class="icon-heart"></i><span class="webuza-love-count">'. $love_count .'</span>';
                break;

            case 'update':
                $love_count = get_post_meta( $post_id, '_webuza_love', true );
                if( isset( $_COOKIE['webuza_love_'. $post_id] ) ) return $love_count;
                $love_count++;
                update_post_meta( $post_id, '_webuza_love', $love_count );
                setcookie( 'webuza_love_'. $post_id, $post_id, time()*20, '/' );

                return '<i id="icon-heart" class="icon-heart"></i><span class="webuza-love-count">'. $love_count .'</span>';
                break;
        }
    }


    function add_love() {
        global $post;
        $output = $this->love_post( $post->ID );
        $class = 'webuza-love';
        $title = __( 'Love this', WEBUZA_THEME_NAME );
        if( isset( $_COOKIE['webuza_love_'. $post->ID] ) ){
            $class = 'webuza-love loved';
            $title = __( 'You already love this!', WEBUZA_THEME_NAME );
        }
        return '<a href="#" class="'. $class .'" id="webuza-love-'. $post->ID .'" title="'. $title .'">'. $output .'</a>';
    }

}

global $webuza_love;
$webuza_love = new WebuzaLove();

function webuza_love() {
    global $webuza_love;
    echo $webuza_love->add_love();
}

?>
