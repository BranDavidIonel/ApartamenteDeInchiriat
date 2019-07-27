<?php
include_once 'header.php';
?>

<div class="container">
  <!--<form class="form-inline" action="/action_page.php">-->
      <?php 
      /*if($msg=$this->session->flashdata('msg')):?>
            echo $msg;
            endif; 
       */
       ?>
       <?php
        echo form_open_multipart('c_admin/save',['class'=>'form-inline']);
        ?>
       
    
      <div class="row">  
  <label for="name" class="col-lg-3">Nume:</label>
 
  <!--<input type="text" class="form-control col-lg-9" id="nume">-->
  <?php echo form_input(['name'=>'nume','placeholder'=>'nume proprietar','class'=>'form-control col-lg-9']); ?>
     
  <label for="telefon" class="col-lg-3">Nr telefon:</label>
  <!--<input type="text" class="form-control col-lg-9 " id="nrTelefon">-->
   <?php echo form_input(['name'=>'nrTelefon','placeholder'=>'numar','class'=>'form-control col-lg-9']); ?>
  
  <label for="name" class="col-lg-3">Pret:</label>
   <?php echo form_input(['name'=>'pret','placeholder'=>'Pret','class'=>'form-control col-lg-9']); ?>
  <label for="name" class="col-lg-3">Adresa:</label>
   <?php echo form_input(['name'=>'adresa','placeholder'=>'Adresa','class'=>'form-control col-lg-9']); ?>
  <label for="name" class="col-lg-3">Detalii:</label>
  <?php echo form_textarea(['name'=>'descriere', 'value'=>'descriere..', 'class' => 'form-control col-lg-9','rows' => '4', 'cols' => '40']); ?>
  <label for="name" class="col-lg-3">Imagine inserare:</label>
  <?php echo form_upload(['name'=>'userfile','value'=>'Save']); ?>
 </div>

  <!--<button type="submit" class="btn btn-primary col-lg-2">Trimite</button>-->
  <?php echo form_submit(['name'=>'sbmit','value'=>'submit','class'=>'btn btn-default col-lg-3']); ?>
  <br>
  <?php echo anchor('c_admin','Inapoi',['class' =>'btn btn-default col-lg-2']); ?>
  <?php
    echo form_close();
 ?>  
</div>

<?php
 include_once 'footer.php';
 ?>

