<?php
add_action( 'widgets_init', 'recent_comments_widget_load_widgets' );

function recent_comments_widget_load_widgets()
{
    register_widget( 'WebuzaRecentCommentsWidget' );
}
class WebuzaRecentCommentsWidget extends WP_Widget {

    public function  __construct() {
        $widget_ops = array( 'classname' => 'wbz_widget_recent_comments', 'description' => __( 'The most recent comments' ) );
        parent::__construct( 'wbz-recent-comments', __( 'Webuza: Recent Comments' ), $widget_ops);
        $this->alt_option_name = 'wbz_widget_recent_comments';

        if ( is_active_widget(false, false, $this->id_base) )
            add_action( 'wp_head', array($this, 'recent_comments_style') );

        add_action( 'comment_post', array( $this, 'flush_widget_cache' ) );
        add_action( 'transition_comment_status', array( $this, 'flush_widget_cache' ) );
    }

    function recent_comments_style() {
        if ( ! current_theme_supports( 'widgets' )
            || ! apply_filters( 'show_recent_comments_widget_style', true, $this->id_base ) )
            return;
        ?>
    <?php
    }

    function flush_widget_cache() {
        wp_cache_delete( 'wbz_widget_recent_comments', 'widget' );
    }

    function form( $instance ) {
        $title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $number = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
        $number_lett  = isset( $instance['number-lett'] ) ? absint( $instance['number-lett'] ) : 140;
        ?>
        <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

        <p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of comments to show:' ); ?></label>
            <input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>

        <p><label for="<?php echo $this->get_field_id( 'number-lett' ); ?>"><?php _e( 'Number of characters for the preview comments:' ); ?></label><br />
            <input id="<?php echo $this->get_field_id( 'number-lett' ); ?>" name="<?php echo $this->get_field_name( 'number-lett' ); ?>" type="text" value="<?php echo $number_lett; ?>" size="3" /></p>
    <?php
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['number'] = absint( $new_instance['number'] );
        $instance['number-lett'] = absint( $new_instance['number-lett'] );
        $this->flush_widget_cache();

        $alloptions = wp_cache_get( 'alloptions', 'options' );
        if ( isset( $alloptions['wbz_widget_recent_comments'] ) )
            delete_option( 'wbz_widget_recent_comments' );

        return $instance;
    }

    function widget( $args, $instance ) {
        global $comments, $comment;

        $cache = wp_cache_get( 'wbz_widget_recent_comments', 'widget' );

        if ( ! is_array( $cache ) )
            $cache = array();

        if ( ! isset( $args['widget_id'] ) )
            $args['widget_id'] = $this->id;

        if ( isset( $cache[ $args['widget_id'] ] ) ) {
            echo $cache[ $args['widget_id'] ];
            return;
        }

        extract( $args, EXTR_SKIP );
        $output = '';
        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'Recent Comments' ) : $instance['title'], $instance, $this->id_base );

        if ( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
            $number = 5;

        $comments = get_comments( apply_filters( 'widget_comments_args', array( 'number' => $number, 'status' => 'approve', 'post_status' => 'publish' ) ) );
        $output .= $before_widget;
        if ( $title )
            $output .= $before_title . $title . $after_title;


        if ( empty( $instance['number-lett'] ) || ! $number_lett  = absint( $instance['number-lett'] ) ) $number_lett = 140;
        $output .= '<div id="wbz-recent-comments">';
        if ( $comments ) {
            $post_ids = array_unique( wp_list_pluck( $comments, 'comment_post_ID' ) );
            _prime_post_caches( $post_ids, strpos( get_option( 'permalink_structure' ), '%category%' ), false );

            foreach ( (array) $comments as $comment ) {
                $comment_text = kama_excerpt( "text=$comment->comment_content&maxchar=$number_lett&echo=false" );
                $output .= '<div class="recent-comment"><span class="comm-author">'. $comment->comment_author .'</span><span> say:</span><div class="comment-text"><a href="' . esc_url( get_comment_link( $comment->comment_ID ) ) . '">'. $comment_text .'</a></div></div>';
            }
        }
        $output .= '</div>';
        $output .= $after_widget;

        echo $output;
        $cache[ $args['widget_id'] ] = $output;
        wp_cache_set( 'wbz_widget_recent_comments', $cache, 'widget' );
    }
}

?>