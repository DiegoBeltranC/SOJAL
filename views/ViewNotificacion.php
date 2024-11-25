<?php
  session_start();
	if(isset($_SESSION['autenticado']) && $_SESSION['autenticado'] === 1){
    header("Location: ../index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../images/icons-page/correo-electronico.png" />
  <title>Notificaciones</title>

  <link rel="stylesheet" href="../css/Page.css">
  <link rel="stylesheet" href="../css/buttons.css">
  <link rel="stylesheet" href="../css/ViewNotifiacion.css">
 <style>
  #content {
    padding-left: 0px;
    padding-right: 0px;
  }
 </style>
</head>
<body>
<?php include '../layouts/NavBar.php';?>
  <!-- Contenedor-->
  <div class="home-container">
    <!-- SideBar-->
    <?php include '../layouts/sidebar.php';?>
    
    <!-- Contenido-->
    <div class="content" id="content">
    <div class="content-button">
      <h2>NOTIFICACIONES</h2>
      <button class="add">
      <span class="button-text" id="Agregar-Notificacion">Agregar</span>
     <img src="../images/icons/boton-mas.svg" alt="Icono" class="button-icon">
    </button>

      </div>
      <div class="container-cards">
    <div class="card">
        <img src="../images/RecolectorBasura.jpg" alt="Imagen de la noticia" class="news-image">
        <div class="card-content">
            <h2>Título de la Noticia</h2>
            <p class="mini-description">Esta es una breve descripción de la noticia que explica de qué trata.</p>
            <div class="dates">
                <p class="start-date">01/01/2024</p>
                <p class="end-date">07/01/2024</p>
            </div>
            <div class="creator-info">
                <img src="../package/image/photos/UserHunter.jpg" alt="Imagen de perfil" class="profile-image">
                <p>Jonathan Cherriz</p>
            </div>
            <div class="news-footer">
                <span class="likes">120 Likes</span>
                <div class="actions">
                    <button class="edit-btn">Editar</button>
                    <button class="details-btn">Ver Más</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="../images/RecolectorBasura.jpg" alt="Imagen de la noticia" class="news-image">
        <div class="card-content">
            <h2>Título de la Noticia</h2>
            <p class="mini-description">Esta es una breve descripción de la noticia que explica de qué trata.</p>
            <div class="dates">
                <p class="start-date">01/01/2024</p>
                <p class="end-date">07/01/2024</p>
            </div>
            <div class="creator-info">
                <img src="../package/image/photos/UserHunter.jpg" alt="Imagen de perfil" class="profile-image">
                <p>Jonathan Cherriz</p>
            </div>
            <div class="news-footer">
                <span class="likes">120 Likes</span>
                <div class="actions">
                    <button class="edit-btn">Editar</button>
                    <button class="details-btn">Ver Más</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <img src="../images/RecolectorBasura.jpg" alt="Imagen de la noticia" class="news-image">
        <div class="card-content">
            <h2>Título de la Noticia</h2>
            <p class="mini-description">Esta es una breve descripción de la noticia que explica de qué trata.</p>
            <div class="dates">
                <p class="start-date">01/01/2024</p>
                <p class="end-date">07/01/2024</p>
            </div>
            <div class="creator-info">
                <img src="../package/image/photos/UserHunter.jpg" alt="Imagen de perfil" class="profile-image">
                <p>Jonathan Cherriz</p>
            </div>
            <div class="news-footer">
                <span class="likes">120 Likes</span>
                <div class="actions">
                    <button class="edit-btn">Editar</button>
                    <button class="details-btn">Ver Más</button>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

    </div>
  </div>

  <script src="../js/ViewSideBar.js"></script>
</body>
</html>
