<?php
/*
Plugin Name: Xenrath Plugin Final
Plugin URI: https://xenrath.com/
Description: Membuat Menu Admin pada Pembuatan Plugin WordPress.
Version: 1.0.0
Author: Saiful Labib Marzuqi Hidayat
Author URI: https://www.facebook.com/labiiblabiib9726/
*/

add_action('admin_menu', 'xenrath_main_action');

// Membuat Menu di Admin
function xenrath_main_action(){
	add_menu_page('Xenrath Plugin', 'Xenrath', 'administrator', __FILE__, 'xenrath_setting_page');
}

// Isi Menu Admin
function xenrath_setting_page(){
	?>
	<h1>Xenrath Plugin</h1>
	<div class="notice updated is-dismissible" style="margin-left: 0;">
		<p>Selamat Plugin Xenrath telah berhasil terinstal dengan sangat baik :)</p>
	</div>
	<p>Ini adalah halaman menu plugin</p>
	<br><br><br><br>
	<p>Developed by xenrath.co.id</p>
	<?php
}