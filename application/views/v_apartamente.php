<?php include_once 'header.php';?>
      <h3>Apartamente de inchiriat</h3>
    
   
   
      
 <table class="table">
    <thead class="thead-light">
      <tr>
        <th>Nume</th>
        <th>Telefon</th>
        <th>Pret</th>
        <th>Adresa</th>
        <th>Imagine</th>
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
