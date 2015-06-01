<?php
/*
Plugin Name: Bridge for Bookshelf
Description: A bridge between WP and external Website
Author: Gleb Zaveruha
Version: 1.0
*/

//Add Settings Menu Item

function bookshelf_admin(){
	include 'bookshelf_admin.php';
}

function bookshelf_admin_actions(){
	add_options_page('Bookshelf Product Display','Bookshelf Product Display',1, "Bookshelf_Product_Display","bookshelf_admin"); //Adding funciton to menu 
	
}

add_action('admin_menu','bookshelf_admin_actions');

//Get and Display Products
function bookshelf_get_products(){
	//Connect to BookShelf database using WP api
	$db = new wpdb(get_option('db_user'), get_option('db_pass'), get_option('db_name'), get_option('db_host'));
	
	$store_url = get_option('store_url');
	$img_folder = get_option('img_folder');
	$num_products = get_option('num_products');
}
