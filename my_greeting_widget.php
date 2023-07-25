<?php
/*
Plugin Name: My Greeting Widget
Description: Displays the current user's greeting.
Version: 1.0
Author: Your name
*/


class My_Greeting_Widget extends WP_Widget {
    // Widget constructor
    public function __construct() {
        parent::__construct(
            'my_greeting_widget',
            'My Greeting Widget',
            array('description' => 'Displays the current user\'s greeting.')
        );
    }

    // Method to display in the widget
    public function widget($args, $instance) {
        // Take away the name of the in-line coristuvach
        $current_user = wp_get_current_user();
        $user_name = $current_user->display_name;

        // Greetings
        echo $args['before_widget'];
        echo $args['before_title'] . 'Hello' . $args['after_title'];
        echo '<p>Welcome, ' . $user_name . '!</p>';
        echo $args['after_widget'];
    }
}
