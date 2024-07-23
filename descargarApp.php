<!DOCTYPE html>
<html lang="es-MX">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Descargar App</title>
    <link rel="icon" href="./images/logo.ico" />
    <link rel="stylesheet" href="./css/navbar.css" />

  </head>
  <body>

  <?php
  ?>
<?php
      include './components/viewLogin.php';
  ?>
<?php
      include './layouts/startnavbar.php';
  ?>


<div class="contenedor-principal">
        <div class="contenedor-inf">
          <h1 style="text-align: center;">Descargar nuestra app</h1>
            <p>
                Aparecera el qr de la aplicación
            </p>
        </div>
        
    </div>
 
 <!--   <div id="overlay"></div> -->



 <style>
  body {
    margin:0;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  }
/* Estilos básicos para los contenedores */
.contenedor-principal {
    display: flex; 
    justify-content: space-between; 
    align-items: flex-start;
    
    
}
.contenedor-inf h1 {
  font-size: 2.5rem;
}

p {
  font-size: 1.5rem;
 
}
.contenedor-inf {
  align: justify;
    padding: 0rem 6rem; /* Espaciado interno */
  
   
}


</style>
  </body>
</html>
