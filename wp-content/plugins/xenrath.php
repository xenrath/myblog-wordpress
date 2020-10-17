<?php
/*
Plugin Name: Xenrath Plugin
Plugin URI: https://xenrath.com/
Description: Membuat Plugin Wordpress Pertama dan Implementasinya.
Version: 1.0.0
Author: Saiful Labib Marzuqi Hidayat
Author URI: https://www.facebook.com/labiiblabiib9726/
*/

function plugin (){
	$data = 'Test Plugin';
	return $data;
}

add_shortcode('xenrath_plugin', 'plugin');