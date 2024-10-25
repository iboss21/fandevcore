<?php
// Custom Widgets for Fandev Theme Core
class Fandev_Custom_Widget extends WP_Widget {
    function __construct() {
        parent::__construct( 'fandev_custom_widget', __( 'Fandev Custom Widget', 'fandev-core' ), array( 'description' => __( 'A Custom Widget for the Fandev Theme', 'fandev-core' ) ) );
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        echo $args['before_title'] . apply_filters( 'widget_title', 'Fandev Widget' ) . $args['after_title'];
        echo '<p>This is a custom widget content.</p>';
        echo $args['after_widget'];
    }
}

function fandev_register_widgets() {
    register_widget( 'Fandev_Custom_Widget' );
}
add_action( 'widgets_init', 'fandev_register_widgets' );
?>
