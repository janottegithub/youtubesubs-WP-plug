<?php
/*
Plugin Name: youtube Subs
Plugin URI: jan.otte-webdesign.com
Description: Display Youtube Sub button and count
Version: 0.1.0
Author: Jan Otte
Author URI: jan.otte-webdesign.com
*/

//Exit if accessed directly
if(!defined('ABSPATH')){
 exit;
}

//load scripts
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');

//load class
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');

//register widget
function register_youtubesubs(){
 register_widget('Youtube_Subs_Widget');
}

// hook in function
add_action('widgets_init', 'register_youtubesubs');