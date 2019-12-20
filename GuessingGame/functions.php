<?php 

function guessinggame_script_enqueue(){

	wp_enqueue_style('customstyle', get_template_directory_uri() . 'css/game.css', array(), '1.0.0', 'all');

	wp_enqueue_script('game.js', get_template_directory_uri() . '/js/game.js', array(), true);
}

add_action('wp_enqueue_scripts','guessinggame_script_enqueue');