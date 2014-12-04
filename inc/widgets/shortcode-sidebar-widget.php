<?php
/*
 * Widget that displays short codes
 */

class DisplayShortCodeWidget extends WP_Widget {

    public function  __construct() {
        parent::__construct(
            'display_shortcode_w',
            'Webuza: Display ShortCode',
            array( 'description' => __( 'Display Short Code', WEBUZA_THEME_NAME ) )
        );
    }

    public function form( $instance ) {
        $defaults = array(
            'title' => '',
            'content' => ''
        );

        $instance = wp_parse_args( ( array ) $instance, $defaults );
        ?>

        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title' ); ?></label>
            <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" class="widefat" value="<?php echo esc_attr( $instance['title'] ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_name( 'content' ); ?>"><?php _e( 'Content: Text & ShortCodes' ); ?></label>
            <textarea type="text" id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>" rows="10" class="widefat" value="<?php echo esc_attr( $instance['content'] ); ?>"><?php echo esc_attr( $instance['content'] ); ?></textarea>
        </p>


    <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['content'] = strip_tags( $new_instance['content'] );
        return $instance;
    }

    public  function widget( $_args, $instance ) {
        extract( $_args );
        $_title = apply_filters( 'widget-title', $instance['title'] );
        $_content = $instance['content'];

        echo $before_widget;

        if( $_title ) {
            echo $before_title . $_title . $after_title;
        }

        if( $_content ): ?>

            <div class="textwidget">
                <?php echo do_shortcode( $_content ); ?>
            </div>

        <?php endif;

        echo $after_widget;
    }
}

register_widget('DisplayShortCodeWidget');

?>