<?php 
defined('BASEPATH') OR exit("No direct script access allowed");

?>

<h1>  Administrator Bran David-Ionel </h1>
<?php 
echo '<pre>';
print_r($this->session->all_userdata());
echo '</pre>';
        //redirect('c_apartamente/index');




?>
<a href="<?php echo base_url().'index.php/c_login/logout'; ?>"> Log out</a>

