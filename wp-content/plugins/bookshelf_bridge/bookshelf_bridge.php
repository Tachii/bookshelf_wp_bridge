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
	$db = new wpdb(get_option('db_user'), get_option('db_password'), get_option('db_name'), get_option('db_host'));
	
	//Get Values
	$store_url 		= get_option('store_url');
	$img_folder 	= get_option('img_folder');
	$num_products 	= get_option('num_products');
	
	//Getting Products
	$products = $db->get_results("SELECT * FROM shop_products LIMIT".$num_products);
	
	//Build Output
	$output = '';
	if($products){
		foreach ($products as $product) {
			$output .= '<div class="bookshelf_product">';
			$output .= '<h3>'.$product->title.'</h3>';
			$output .=  "<img src='$store_url$img_folder$product->image' alt='$product->title' >";
			$output .= "<div class='price'>$product->price $</div>";
			$output .= "<div class='desc'>".wp_trim_words($product->description, 10)."</div>"; 
			$output .= "<a href='{$store_url}products/details/$product->id'>Buy Now</a>";
			$output .= "</div>";
		}
	} else {
		$output .= 'No products to list';
	}
	
	
	return $output;
}

//Add Shortcode
add_shortcode('show_products', 'bookshelf_get_products');
