<?php
include_once 'header.php';
?>

<div class="container">
  <!--<form class="form-inline" action="/action_page.php">-->
  <h1>Update</h1>
      <?php if($msg=$this->session->flashdata('msg')):?>
      <?php echo $msg;?>
      <?php endif; ?>
      <?php
       echo form_open_multipart("c_apartamente/change/{$post->id}",['class'=>'form-inline']);
    ?>
      <div class="row">  
  <label for="name" class="col-lg-3">Nume:</label>
 
  <!--<input type="text" class="form-control col-lg-9" id="nume">-->
  <?php echo form_input(['name'=>'nume','placeholder'=>'nume proprietar','class'=>'form-control col-lg-9',
      'value'=> set_value('nume',$post->nume)]); ?>
     
  <label for="telefon" class="col-lg-3">Nr telefon:</label>
  <!--<input type="text" class="form-control col-lg-9 " id="nrTelefon">-->
   <?php echo form_input(['name'=>'nrTelefon','placeholder'=>'numar','class'=>'form-control col-lg-9',
       'value'=> set_value('nrTelefon',$post->telefon)]); ?>
   
  <label for="name" class="col-lg-3">Pret:</label>
  <!--<input type="text" class="form-control col-lg-9" id="pret">-->
   <?php echo form_input(['name'=>'pret','placeholder'=>'Pret','class'=>'form-control col-lg-9',
       'value'=> set_value('pret',$post->pret)]); ?>
  <label for="name" class="col-lg-3">Adresa:</label>
  <!--<input type="text" class="form-control col-lg-9" id="adresa">-->
   <?php echo form_input(['name'=>'adresa','placeholder'=>'Adresa','class'=>'form-control col-lg-9',
       'value'=> set_value('adresa',$post->adresa)]); ?>
  <label for="name" class="col-lg-3">Imagine:</label>
  <!--<input type="text" class="form-control col-lg-9" id="imagine">-->
  <?php echo form_input(['name'=>'imagine','placeholder'=>'Imagine','class'=>'form-control col-lg-9',
      'value'=> set_value('imagine',$post->imagine)]); ?>
   <label for="name" class="col-lg-3">Upload Imagine:</label> 
    <?php echo form_upload(['name'=>'userfile','value'=>set_value('userfile', base_url('assets/imagini/'.$post->imagine))]); ?>
 
 </div>
  <div class="form-check col-lg-9">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <!--<button type="submit" class="btn btn-primary col-lg-2">Trimite</button>-->
  <?php echo form_submit(['name'=>'submit','value'=>'Update','class'=>'btn btn-default col-lg-3']); ?>
  <?php echo anchor('c_apartamente','Inapoi',['class' =>'btn btn-default col-lg-2']); ?>
  <?php
    echo form_close();
 ?>  
</div>

<?php
 include_once 'footer.php';
 ?>


