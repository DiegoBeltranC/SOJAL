<?php
  //Cargar sesion del usuario logueado
  session_start();
	if(!isset($_SESSION['autenticado'])){//Si no hay un usuario logueado, regresar al logueo**
    header("Location: ../index.php");

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./modals_css/modal_form_report.css">
</head>
<body>
<div id="contenedor" class="contenedor">
    <div id="contenedor-form">
      <form class="form" >
        <div class="container">
          <img src="../images/cancelar.png" width="6%" alt="Cancelar" id="btnCancelarModal" />
        </div>
        <h1 class="titulo">Generar Reporte</h1>
        <hr class="hr" />
        <div>
        <label for="imagen-reporte"  class="label">Capturar Imagen</label><br>
        <input type="file" class="inputs-file" id="imagen-reporte"  name="imagen-reporte" accept="image/*" capture="camera"><br>
          <label class="label" for="selTipo-reporte">Tipo de reporte: </label><br>
          <select class="inputs" name="selTipo-reporte" id="selTipo-reporte">
            <option value="">Bolsas</option>
            <option value="">Contenedores</option>
            <option value="">Dispercion</option>
          </select>
          <br>
          <label class="label" for="txtDescripcion">Descripción: </label><br>
          <textarea class="textarea" rows="3" placeholder="Ingresa la descripción aquí" id="txtDescripcion" name="txtDescripcion"></textarea>

          <label class="label" for="txtReferencias">Referencias: </label><br>
          <textarea class="textarea" id="txtReferencias" name="txtReferencias" rows="3" placeholder="Ingresa las referencias aquí"></textarea>

          <label for="txtCalle" class="label">Calle</label><br>
          <input type="text" name="txtCalle" class="inputs" id="txtCalle" placeholder="Calle" disabled>

          <label for="txtColonia" class="label">Colonia</label><br>
          <input type="text" name="txtColonia" class="inputs" id="txtColonia" placeholder="Colonia" disabled>
          
          <label for="txtLongitud" class="label">Longitud</label><br>
          <input type="numbe" name="txtLongitud" class="inputs" id="txtLongitud" placeholder="Longitud" disabled>

          <label for="txtAltitud" class="label">Altitud</label><br>
          <input type="number" name="txtAltitud" class="inputs" id="txtAltitud" placeholder="Altitud" disabled>
        </div>
        <input type="submit" value="Reportar" id="envier-reporte" name="enviar-reporte"/>
      </form>
    </div>
  </div>

    <div class="nav">
        <div class="user-container">
            <div class="user-icon-container"><img src="./icons/profile.jpg" alt=""></div>
            <div class="user-name-container">
                <p><?php echo $_SESSION['nombre'];?></p>
            </div>
        </div>
        <div class="log-out-container">
            <a href="../controladores/cerrarSesion.php">
                <button id="log-out">Cerrar Session</button>
            </a>
        </div>
    </div>

    <div class="main-container">
        <div class="options-container">
            <a href="./views/historial_reportes.php">
                <div class="option-user">
                    <h2>Historial Reportes</h2>
                    <div class="option-img-container">
                        <img src="../Icons/101671.png" alt="">
                    </div>
                </div>
            </a>

            <a href="./views/noticias_.php">
                <div class="option-user">
                    <h2>Noticias</h2>
                    <div class="option-img-container">
                        <img src="../Icons/Newspaper-icon.png" alt="">
                    </div>
                </div>
            </a>    
            <a href="./views/info_usuario.php">
            <div class="option-user">
                <h2>Usuario</h2>
                <div class="option-img-container">
                    <img src="../Icons/profile.jpg" alt="">
                </div>
            </div>
            </a>
        </div>
        <div class="map-container">
            <div class="map-img-container">
                <img src="../images/Screenshot 2024-07-17 230206.png" alt="">
            </div>
        </div>
        <div class="new-report-btn-container">
            <div class="div-new-report">
                <img src="../Icons/plus-icon-1024x1024-jdaf40nu.png" alt="" id="modal-report-btn">
            </div>
        </div>
    </div>
<script src="./js/script.js"></script>
<script src="js/jquery-3.7.1.min.js"></script>
</body>
</html>