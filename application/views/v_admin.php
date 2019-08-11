<?php 
defined('BASEPATH') OR exit("No direct script access allowed");

?>

<?php include_once 'header.php';?>

<?php 
/*
echo '<pre>';
print_r($this->session->all_userdata());

echo '</pre>';
$dataUser=$this->session->all_userdata();
echo $dataUser['is_logged_in'];

*/
?>
<?php
//buton pt import data
echo '<h2>Import data: </h2> <br>'.'<form action="c_admin/importSite1" method="get">
            <input type="submit" name="on" value="ImportPro_casa">
  </form> <br>';
 ?>

 <?php
$dataUser=$this->session->all_userdata();
 if($dataUser['is_logged_in']==1): ?>
 <?php echo ' <h1>Bun venit '.$dataUser['UserName'].' </h1>'; ?>
       <?php if($msg=$this->session->flashdata('msg')):?>
      <?php echo $msg;?>
      <?php endif; ?>
   <?php 
   $atts = array(
        'class'       =>'btn btn-primary',
        'width'       => 800,
        'height'      => 700,
        'scrollbars'  => 'yes',
        'status'      => 'yes',
        'resizable'   => 'yes',
        'screenx'     => 0,
        'screeny'     => 0,
        'window_name' => '_blank');
   $atts2 = array(
        'class'       =>'label label-primary',
        'width'       => 600,
        'height'      => 200,
        'scrollbars'  => 'yes',
        'status'      => 'yes',
        'resizable'   => 'yes',
        'screenx'     => 0,
        'screeny'     => 0,
        'window_name' => '_blank');

echo anchor('c_admin/create', 'inserare', $atts);
   
   ?>
 <table class="table">
    <thead class="thead-light">
      <tr>
        <th>Nume</th>
        <th>Telefon</th>
        <th>Pret</th>
        <th>Adresa</th>
        <th>Imagine</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
       <?php if(count($posts)):?> 
       <?php foreach ($posts as $post):?> 
      <tr>
          <td><?php echo $post->nume;?></td>
        <td><?php echo $post->telefon;?></td>
        <td><?php echo $post->pret;?></td>
        <td><?php echo $post->adresa;?></td>
          <?php 
        $imagini=$post->imagine;
        $imaginiSplit= explode(',', $imagini);
         echo '<td>';
        foreach ($imaginiSplit as $imagine) {
            
        echo '<img width="100" src="'.base_url().'/assets/imagini/'.$imagine.'"'.'>'.'  ';

        }  
        echo '</td>';
        ?>
        <td>
            <?php 
            echo anchor("c_admin/view/{$post->id}", 'view', $atts);
            echo anchor("c_admin/update/{$post->id}", 'edit', $atts);
            echo anchor("c_admin/delete/{$post->id}", 'delete', $atts);
            
            ?>
        </td>
      </tr>
      <?php endforeach; ?>
     <?php else: ?>
      <tr>
          <td>Nu sunt inregistrari</td>
      </tr>
      <?php endif; //if-->inregistration  ?>
    <?php 
    //if-->check session
    endif; 
    ?>    
    </tbody>
  </table>
<a href="<?php echo base_url().'index.php/c_login/logout'; ?>"> Log out</a>
<?php include_once 'footer.php';?>

