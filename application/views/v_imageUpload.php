
<?php echo form_open_multipart('C_image/uploadPic'); ?>
<?php echo form_upload(['name'=>'userfile','value'=>'Save']); ?>
	<?php echo form_error('userfile','<div class="text-danger">','</div>'); ?>
	<?php echo form_submit(['name'=>'submit','value'=>'publica imaginea']); ?>
	<?php echo anchor("C_image/viewImages",'vezi imaginele'); ?>
</body>