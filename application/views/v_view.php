<?php include_once('header.php') ?>
 <div class="container">
 <h3>Afisare detaliata</h3>
 <h4>Nume</h4>
	<p><?php echo $post->nume; ?></p>
 <h4>Numar Telefon</h4>
	<p><?php echo $post->telefon; ?></p>
 <h4>Pret</h4>
	<p><?php echo $post->pret; ?></p>
 <h4>Adresa</h4>
	<p><?php echo $post->adresa; ?></p>
 <h4>Descriere</h4>
        <p><?php echo $post->descriere; ?></p>
 <h4>Imagine</h4>
 <p>   
   <?php 
        $imagini=$post->imagine;
        $imaginiSplit= explode(',', $imagini);
         echo '<td>';
        foreach ($imaginiSplit as $imagine) {
            
        echo '<img width="80%" src="'.base_url().'/assets/imagini/'.$imagine.'"'.'>';

        }  
        echo '</td>';
        ?>
 </p>


 </div>
<?php include_once('footer.php') ?>

