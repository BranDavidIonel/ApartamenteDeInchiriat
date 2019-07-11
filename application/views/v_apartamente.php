<?php include_once 'header.php';?>
      <h3>Apartamente de inchiriat</h3>
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

echo anchor('c_apartamente/create', 'inserare', $atts);
   
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
        <td><img width="120" src="<?php echo base_url().'/assets/imagini/'.$post->imagine;?>"></td>
        <td>
            <?php 
            echo anchor("c_apartamente/view/{$post->id}", 'view', $atts);
            echo anchor("c_apartamente/update/{$post->id}", 'edit', $atts);
            echo anchor("c_apartamente/delete/{$post->id}", 'delete', $atts);
            
            ?>
        </td>
      </tr>
      <?php endforeach; ?>
     <?php else: ?>
      <tr>
          <td>Nu sunt inregistrari</td>
      </tr>
      <?php endif;?>
    </tbody>
  </table>
<?php include_once 'footer.php';?>
