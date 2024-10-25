<?php
class Fandev_Popular_Posts_Widget extends WP_Widget {
    function __construct() {
        parent::__construct('fandev_popular_posts', __('Popular Posts', 'fandev-core'), array('description' => __('Displays popular posts.', 'fandev-core')));
    }

    public function widget($args, $instance) {
        $query_args = array(
            'posts_per_page' => 5,
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
        );
        $popular_posts = new WP_Query($query_args);
        
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        if ($popular_posts->have_posts()) : ?>
            <ul>
                <?php while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
            </ul>
        <?php endif;
        wp_reset_postdata();
        echo $args['after_widget'];
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('Popular Posts', 'fandev-core');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:', 'fandev-core'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <?php
    }
}

function fandev_register_widgets() {
    register_widget('Fandev_Popular_Posts_Widget');
}
add_action('widgets_init', 'fandev_register_widgets');
?>
