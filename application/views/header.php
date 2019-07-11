<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

    <enav class="navbar navbar-expand-lg navbar-light bg-info">
  <!--<a class="navbar-brand" href="#">Navbar</a>-->

  <img src=" <?php echo base_url().'/assets/imagini/navHome.png';?>" width="80px" />
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="apartamente.php">Apartamente</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/C_image') ?>">Imagine</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Logare
        </a>
        <div class="dropdown-menu" aria-labelledby="Logare">
            <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </li>
       <li>
        <form method="POST" action="cauta.php">
            
            <input type="text"  placeholder="Cauta" name="Cauta">    
            <button type="submit" class="btn btn-default" name="submitCauta">Cauta</button>
           
           
             
       </form> 
       </li>
           
      
      
    </ul>
  </div>
</enav>
  <body>

