<h1><?php echo $title; ?></h1>
<?php	foreach ($query as $row){ ?>
	<p><a href="<?php echo base_url().'news_c/show/'.$row->id; ?>"><?php echo $row->title; ?></a></p>
<?php }; ?>