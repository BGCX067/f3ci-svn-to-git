<ul>
	<?php foreach ($link_arr as $v => $k) {?>
    		<li class="<?php echo $k['selected'] ?>"><a href="<?php echo $k['href']; ?>"><span><?php echo $k['name']; ?></span></a></li>
	<?php }?>
</ul>