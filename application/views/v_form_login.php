<?php
include_once 'header.php';
?>
<form action="<?php echo base_url().'LogareController/login'; ?>" method="post">
<p>User name:<input type="text" name="username" value=""></p>
<p>Password:<input type="password" name="password" value=""></p>
<p><input type="submit" name="submit" value="submit"></p>
		

</form>
<?php
 include_once 'footer.php';
 ?>
