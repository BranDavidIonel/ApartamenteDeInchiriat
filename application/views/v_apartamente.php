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
      
   <!-- other option for table with date   -->   
   <br><br><br>
   Incercare diferiata de abordare la aspect
   <br>
   <div class="grid-container">
  <div class="itemHeader">Nume</div>
  <div class="itemHeader">Telefon</div>
  <div class="itemHeader">Pret</div>  
  <div class="itemHeader">Adresa</div>
   <?php if(count($posts)):?> 
   <?php foreach ($posts as $post):?> 
   <?php echo '<div class="itemLineCol1">'.$post->nume.'</div>';?>
   <?php echo '<div class="itemLineCol2">'.$post->telefon.'</div>';?>
   <?php echo '<div class="itemLineCol3">'.$post->pret.'</div>';?>
   <?php echo '<div class="itemLineCol4">'.$post->adresa.'</div>';?>
    <?php 
        $imagini=$post->imagine;
        $imaginiSplit= explode(',', $imagini);
        foreach ($imaginiSplit as $imagine) {
            
        echo '<div class="itemImage">'.'<img width="100" src="'.base_url().'/assets/imagini/'.$imagine.'"'.'>'.'</div>';

        }  
   ?>
   <?php 
    echo '<div class="itemDetails">'.'Mai multe detalii:'."<center>".anchor("c_apartamente/view/{$post->id}", 'detalii', $atts)."</center>".'</div>';
   ?>
   <?php endforeach; ?>
   <?php else: ?>
    <tr>
    <td>Nu sunt inregistrari</td>
   </tr>
   <?php endif;?>

</div>
<?php
 

     $feed_url='http://www.pro-casa.ro/feed/?post_type=listing';
    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);
    echo $x;
     
    echo "<ul>";
     
    foreach($x->channel->item as $entry) {
        echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
        echo 'descriere:'.$entry->description;
    }
    echo "</ul>";
?>   
<?php include_once 'footer.php';?>
