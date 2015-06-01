<?php
/*
Plugin Name: Bridge for Bookshelf
Description: A bridge between WP and external Website
Author: Gleb Zaveruha
Version: 1.0
*/

//Add Settings Menu Item
function bookshelf_admin_actions(){
	add_options_page('Bookshelf Product Display','Bookshelf Product Display',1, "Bookshelf_Product_Display","bookshelf_admin"); //Adding funciton to menu 
	
}

function bookshelf_admin(){
	echo 'Test';
}

add_action('admin_menu','bookshelf_admin_actions');
