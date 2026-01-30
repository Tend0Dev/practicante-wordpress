<?php

class Practicante_CTA_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'practicante_cta_widget',
            'CTA Widget',
            ['description' => 'Widget de llamada a la acción']
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];

        if (!empty($instance['title'])) {
            echo $args['before_title'] . esc_html($instance['title']) . $args['after_title'];
        }

        if (!empty($instance['text'])) {
            echo '<p>' . esc_html($instance['text']) . '</p>';
        }

        if (!empty($instance['url'])) {
            echo '<a href="' . esc_url($instance['url']) . '">Ver más</a>';
        }

        echo $args['after_widget'];
    }

    public function form($instance) {
        $title = $instance['title'] ?? '';
        $text  = $instance['text'] ?? '';
        $url   = $instance['url'] ?? '';
        ?>
        <p>
            <label>Título</label>
            <input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>

        <p>
            <label>Texto</label>
            <textarea class="widefat" name="<?php echo $this->get_field_name('text'); ?>"><?php echo esc_textarea($text); ?></textarea>
        </p>

        <p>
            <label>URL del botón</label>
            <input class="widefat" name="<?php echo $this->get_field_name('url'); ?>" type="text" value="<?php echo esc_attr($url); ?>">
        </p>
        <?php
    }
}
