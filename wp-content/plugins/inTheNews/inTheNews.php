<?php
/*
Plugin Name: In Thew News
Plugin URI: http://news.jmls.edu
Description: This plugin lets you specify a category to populate a sidebar widget with headlines
Version: 0.1
Author: Tori Kirk
Author URI: http://www.1980media.com
License: GPL2
*/
?>

<?php
/*  Copyright 2011 John Marshall Law School  (email : website@jmls.edu)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>



<?php


add_action('admin_menu', 'inTheNews_menu');

function inTheNews_menu() {
	add_submenu_page( 'options-general.php', 'inTheNews Options', 'In The News', 'manage_options', 'inTheNews', 'inTheNews_options');
}

function inTheNews_options() {
	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
}

?>