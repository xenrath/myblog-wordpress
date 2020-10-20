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

// Get Data Form Database 
function get_data_users(){
	global $wpdb;
	$result = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}users", OBJECT);
	return $result;
}

add_shortcode('xenrath_users', 'table_users');

function table_users(){
	ob_start();
	?>

	<table class="table">
		<thead>
			<tr>
				<th>No. </th>
				<th>Username</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$no = 1;
				foreach (get_data_users() as $row) {
					echo "
						<tr>
							<td>".$no++.".</td>
							<td>".$row->user_login."</td>
							<td>".$row->user_email."</td>
						</tr>";
				}
			 ?>
		</tbody>
	</table>

	<?php 
	return ob_get_clean();
}

// Load CSS and JS 

function assets(){
	wp_enqueue_style('my-css', plugins_url('css/style.css', __FILE__));
	wp_enqueue_script('my-js', plugins_url('js/custom.js', __FILE__));
}

// add_action('admin_init', 'assets');

add_action('wp_enqueue_scripts', 'assets');