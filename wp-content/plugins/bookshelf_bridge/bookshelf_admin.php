<div class="wrap bookshelf_admin">
	<?php echo "<h2>".__('Bookshelf Product Display Options','bookshelf_trdom')."</h2>";?>
	<form name="bookshelf_from" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
		<?php echo "<h4>".__('Database Settings','bookshelf_trdom')."</h4>"; ?>
		<p>
			<label><?php echo _e("Database Host"); ?></label>
			<input type="text" name="db_host" value="<?php echo $db_host; ?>" size="20">
		</p>
		<p>
			<label><?php echo _e("Database Name"); ?></label>
			<input type="text" name="db_name" value="<?php echo $db_name; ?>" size="20">
		</p>
		<p>
			<label><?php echo _e("Database User"); ?></label>
			<input type="text" name="db_user" value="<?php echo $db_user; ?>" size="20">
		</p>
		<p>
			<label><?php echo _e("Database Password"); ?></label>
			<input type="text" name="db_password" value="<?php echo $db_password; ?>" size="20">
		</p>
	</form>
</div>
