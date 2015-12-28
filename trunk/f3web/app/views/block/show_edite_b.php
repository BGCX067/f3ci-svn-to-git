
<h1><?php echo $title; ?></h1>
<?php	foreach ($query as $row){ ?>
	<form action="show_edit_do">
		<div>				   			
			<h2>[<?php echo $row->id; ?>]<input type="text" size="100" value="<?php echo $row->title; ?>"/> <a href="#">【edite】</a> <a href="#">【cancel】</a></h2>
			<textarea rows="5" cols="100">
				<?php echo $row->contents; ?>
			</textarea>
		</div>
	</form>
<?php } ?>
