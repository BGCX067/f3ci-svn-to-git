<h1><?php echo $title; ?></h1>
<?php	foreach ($query as $row){ ?>
	<div>				   			
		<h2><?php echo $row->title; ?></h2>
		<p><?php echo $row->contents; ?></p>
	</div>
<?php } ?>
<a href="<?php echo base_url().'news_c/index'; ?>">back</a>