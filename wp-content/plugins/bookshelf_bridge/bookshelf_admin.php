<style>
	.bookshelf_admin{
		width: 200px;
		display: inline-block;
	}
</style>

<!-- Form Processing --> 
<?php 
	if($_POST['tgp_hidden'] == 1){
		//Form was submited
		$db_host = $_POST['db_host'];
		update_option('db_host',$db_host);
		
		$db_host = $_POST['db_host'];
		update_option('db_name',$db_name);
		
		$db_host = $_POST['db_host'];
		update_option('db_user',$db_user);
		
		$db_host = $_POST['db_host'];
		update_option('db_password',$db_password);
		
		$db_host = $_POST['db_host'];
		update_option('store_url',$store_url);
		
		$db_host = $_POST['db_host'];
		update_option('img_folder',$img_folder);
		
		$db_host = $_POST['db_host'];
		update_option('num_products',$num_products);
		
	} else {
		//Form Was Not Submited - Get Option Values
		$db_host = get_option('db_host');
		$db_name = get_option('db_name');
		$db_user = get_option('db_user');
		$db_password = get_option('db_password');
		$store_url = get_option('store_url');
		$img_folder = get_option('img_folder');
		$num_products = get_option('num_products');
	}

?>

<?php echo "<h2>".__('Bookshelf Product Display Options','bookshelf_trdom')."</h2>";?>
<div class="wrap bookshelf_admin">
	<form name="bookshelf_from" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
		<?php echo "<h4>".__('Database Settings','bookshelf_trdom')."</h4>"; ?>
		<p>
			<label><?php echo _e("Database Host:"); ?></label>
			<input type="text" name="db_host" value="<?php echo $db_host; ?>" size="20">
		</p>
		<p>
			<label><?php echo _e("Database Name:"); ?></label>
			<input type="text" name="db_name" value="<?php echo $db_name; ?>" size="20">
		</p>
		<p>
			<label><?php echo _e("Database User:"); ?></label>
			<input type="text" name="db_user" value="<?php echo $db_user; ?>" size="20">
		</p>
		<p>
			<label><?php echo _e("Database Password:"); ?></label>
			<input type="text" name="db_password" value="<?php echo $db_password; ?>" size="20">
		</p>
		
		<br /><br />
		
		<?php echo "<h4>".__('Store Settings','bookshelf_trdom')."</h4>"; ?>
		<p>
			<label><?php echo _e("Store URL:"); ?></label>
			<input type="text" name="store_url" value="<?php echo $store_url; ?>" size="20">
		</p>
		<p>
			<label><?php echo _e("Product Image Folder Path:"); ?></label>
			<input type="text" name="img_folder" value="<?php echo $img_folder; ?>" size="20">
		</p>
		<p>
			<label><?php echo _e("Number of Products:"); ?></label>
			<input type="text" name="num_products" value="<?php echo $num_products; ?>" size="20">
		</p>
		<p>
			<input type="hidden" name="bookshelf_hidden" value="1">
			<input type="button" name="submit" value="<?php echo _e('Save','bookshelf_trdom'); ?>" />
		</p>
	</form>
</div>
