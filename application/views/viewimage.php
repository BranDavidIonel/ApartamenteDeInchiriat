<body>
<?php if(count($images)):?>
<?php foreach($images as $img): ?>
	<img src=<?php echo base_url("assets/imagini/".$img->imagine);?>>
<?php endforeach;?>
<?php else: ?>
	<p>Nu sa gasit imagini</p>
<?php endif;?>
</body>