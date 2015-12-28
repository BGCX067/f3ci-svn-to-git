<!DOCTYPE html>
<!-- Template by freewebsitetemplates.com -->
<html>
<head>
<meta charset="utf-8" />
<base href="<?php echo $layout_dir;?>/businessworldtemplate/" />
<title>Business Solutions</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	<div id="header">
			<div id="logo">
				<a href="index.html"><img src="images/logo.jpg" alt="" /></a>		
			</div>		
			<ul>
				<li><a href="index.html"><span>home</span></a></li>
				<li class="selected"><a href="about.html"><span>about us</span></a></li>
				<li><a href="services.html"><span>services</span></a></li>
				<li><a href="products.html"><span>products</span></a></li>
				<li><a href="contact.html"><span>contact us</span></a></li>			
			</ul>
	</div>
	<div id="body">
		<div class="about">
			<h1>news</h1>
			<?php	foreach ($query as $row){ ?>
			<div>				   			
				<h2><?php echo $row->title; ?></h2>
				<p><?php echo $row->contents; ?></p>
			</div>
			<?php } ?>
		</div>
	</div>
		<div id="footer">
			<div>
				<div>
					<h3>america</h3>
					<ul>
						<li>457-380-1654 main</li>				
						<li>257-301-9417 toll free</li>
					</ul>			
				</div>		
				<div>
					<h3>europe</h3>
					<ul>
						<li>457-380-1654 main</li>				
						<li>257-301-9417 toll free</li>
					</ul>			
				</div>	
				<div>
					<h3>canada</h3>
					<ul>
						<li>457-380-1654 main</li>				
						<li>257-301-9417 toll free</li>
					</ul>			
				</div>	
				<div>
					<h3>middle east</h3>
					<ul>
						<li>457-380-1654 main</li>				
						<li>257-301-9417 toll free</li>
					</ul>			
				</div>	
				<div>
					<h3>follow us:</h3>
					<a class="facebook" href="http://facebook.com/freewebsitetemplates" target="_blank">facebook</a>		
					<a class="twitter" href="http://twitter.com/fwtemplates" target="_blank">twitter</a>
				</div>	
			</div>
			<div>
				<p>&copy Copyright 2012. All rights reserved</p>
			</div>
		</div>
	</body>
</html>