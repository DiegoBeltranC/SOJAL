<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="../css/homeContent.css" />
  <link rel="stylesheet" href="../css/modals.css" />
  <link rel="stylesheet" href="../css/estadisticas.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Estadisticas</title>
</head>
<body>
  
<?php include '../layouts/sidebar.php';?>
<div class="home_content">
  
        <!--
        <div class="text">Home content</div>
        <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
        <p>Esta es la página principal.</p>
        <a href="../logout.php">Cerrar Sesión</a>
        -->
        <div id="dashboard-notifications">
          <div class="filters-table">
            <h1>Estadisticas</h1>
            <h2>Filtrar por</h2>

            <div class="notification-div-filter">
              <br>
              <br>

              <label for="creation-filter">Tipo grafica</label>
              <select name="creation-filter" id="creation-filter">
                <option value="reciente">grafica 1</option>
                <option value="hace-un-mes">grafica 2</option>
                <option value="hace-un-ano">grafica 3/option>
              </select>
              <br>
              <br>
              <h3>Periodo: </h3>
              <br>
              <label for="periodo-estadistica1" >Semanas</label>
              <input type="radio" name="periodo-estadistica" id="periodo-estadistica1" >
              <br>
              <label for="periodo-estadistica2" >Meses</label>
              <input type="radio" name="periodo-estadistica" id="periodo-estadistica2" >
              <br>
              <label for="periodo-estadistica3" >Años</label>
              <input type="radio" name="periodo-estadistica" id="periodo-estadistica3" >
            </div>

          </div>

  <div class="graphic-container">
    <div class="graphic-div">
      <div class="graphic-img">
        <img src="../images/3349622.png" alt="">
      </div>
      <div class="graphic-text">
        <h3>Tipo estado</h3>
        <br>
        <span>Informes espera</span>
        <br>
        <span>Informes dados</span>
        <br>
        <br>
        <h3>Porcentajes</h3>
        <br>
        <span>80%</span>
        <br>
        <span>20%</span>
      </div>
    </div>
    <div class="graphic-div">
      <div class="graphic-img">
        <img src="../images/3349622.png" alt="">
      </div>
      <div class="graphic-text">
        <h3>Tipo estado</h3>
        <br>
        <span>Informes espera</span>
        <br>
        <span>Informes dados</span>
        <br>
        <br>
        <h3>Porcentajes</h3>
        <br>
        <span>80%</span>
        <br>
        <span>20%</span>
      </div>
    </div>
    <div class="graphic-div">
      <div class="graphic-img">
        <img src="../images/3349622.png" alt="">
      </div>
      <div class="graphic-text">
        <h3>Tipo estado</h3>
        <br>
        <span>Informes espera</span>
        <br>
        <span>Informes dados</span>
        <br>
        <br>
        <h3>Porcentajes</h3>
        <br>
        <span>80%</span>
        <br>
        <span>20%</span>
      </div>
    </div>
    <div class="graphic-div">
      <div class="graphic-img">
        <img src="../images/3349622.png" alt="">
      </div>
      <div class="graphic-text">
        <h3>Tipo estado</h3>
        <br>
        <span>Informes espera</span>
        <br>
        <span>Informes dados</span>
        <br>
        <br>
        <h3>Porcentajes</h3>
        <br>
        <span>80%</span>
        <br>
        <span>20%</span>
      </div>
    </div>
    <div class="graphic-div">
      <div class="graphic-img">
        <img src="../images/3349622.png" alt="">
      </div>
      <div class="graphic-text">
        <h3>Tipo estado</h3>
        <br>
        <span>Informes espera</span>
        <br>
        <span>Informes dados</span>
        <br>
        <br>
        <h3>Porcentajes</h3>
        <br>
        <span>80%</span>
        <br>
        <span>20%</span>
      </div>
    </div>
  </div>

</div>
<!--
      <div class="form-container-notification" id="form-container-notification">
        <img src="../Icons/icons8-close-50.png" alt="" id="close-icon-form">
        <form action="">
          <input type="text" class="title-form-notification" placeholder="TITULO">
          <div class="image-form-notification">
            <img src="" alt="">
          </div>
          <input type="file" >

          <textarea name="textarea-form-notification" id="textarea-form-notification" placeholder="MENSAJE"></textarea>
          <div class="footer-form-notification">
            <a href="">@diego</a>
            <div class="buttons-form-notification">
              <input type="button" value="Eliminar">
              <input type="button" value="Guardar">
            </div>
          </div>
        </form>
      </div>-->



  </div>
  <div id="contenedor" class="contenedor">
      <div id="contenedor-form">
        <form class="form" >
          <div class="container">
            <img src="../images/cancelar.png" width="6%" alt="Cancelar" id="btnCancelarModal"/>
          </div>
          <h1 class="titulo">Hola, Bienvenido!</h1>
          <hr class="hr" />
          <div>
            <label class="label" for="gmail">Correo:</label><br />
            <input
              class="inputs"
              type="email"
              id="gmail"
              name="gmail"
              placeholder="ejemplo@gmail.com"
              required
            /><br /><br />
            
            <label class="label" for="password">Contraseña:</label><br />
            <input
              class="inputs"
              type="password"
              id="password"
              name="password"
              placeholder="Contraseña"
              required
            /><br /><br />
            <label class="checkbox-container">
              <input type="checkbox" class="checkbox" />
              <span class="checkbox-custom"></span>
              Mostrar Contraseña </label
            ><br /><br />
          </div>
          <input type="submit" value="Iniciar Sesión" />
        </form>
      </div>
    </div>
  <script src="../js/modal.js"></script>
</body>
</html>