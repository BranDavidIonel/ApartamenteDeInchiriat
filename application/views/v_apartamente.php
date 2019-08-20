<?php include_once 'header.php';?>
      <h3>Apartamente de inchiriat</h3>
    
   
   
      
 <table class="table">
    <thead class="thead-light">
      <tr>
        <th>Nume</th>
        <th>Telefon</th>
        <th>Pret</th>
        <th>Adresa</th>
        <!--<th>Imagine</th>-->
      </tr>
    </thead>
    <tbody>
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
        ?>
       <?php if(count($posts)):?> 
       <?php foreach ($posts as $post):?> 
      <tr>
          <td><?php echo $post->nume;?></td>
        <td><?php echo $post->telefon;?></td>
        <td><?php echo $post->pret;?></td>
        <td><?php echo $post->adresa;?></td>
      </tr>
      <tr>
        <?php 
        $imagini=$post->imagine;
        $imaginiSplit= explode(',', $imagini);
         echo '<td>';
        foreach ($imaginiSplit as $imagine) {
            
        echo '<img width="100" src="'.base_url().'/assets/imagini/'.$imagine.'"'.'>'.'  ';

        }  
        echo '</td>';
        ?>
        

      </tr>
      <tr>
          <td>Mai multe detalii..</td>
          <td>
            <?php 
            echo "<center>".anchor("c_apartamente/view/{$post->id}", 'detalii', $atts)."</center>";
            ?>
          </td>
          <td></td>
          <td></td>
          <td></td>
        
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
