<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- MAPBOX CSS -->
 <script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $url; ?>/css/fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/style-login.css">
 
    <title>DOE+</title>
  </head>
  <body>
    <div class='row'>
    <div class='container'>
    
    <div class='col-md-12 d-flex justify-content-center form'>
      <form class="form-horizontal " method="post" action="adm">
        <fieldset>

        <!-- Form Name -->
      
        <legend>  
        <img src="../img/doe-final.png" alt="">
        </legend>

        <!-- Text input-->
        <div class="form-group">
        
        <input id="nome" name="nome" type="text" placeholder="Usuario" class="form-control input-md" required="">
            
        
        </div>

        <!-- Text input-->
        <div class="form-group">  
        
        <input id="senha" name="senha" type="password" placeholder="senha" class="form-control input-md" required="">
            
        
        </div>

        <div class="form-group">
        <label class=" control-label" for="cadastrar" ></label>
        
            <button id="login" style="width:388px" name="login" class="btn btn-primary">Entrar</button>
            <a class="d-flex justify-content-center " href="">
              <p>Não tenho uma conta</p>
            </a>
        </div>
      
    </form>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

