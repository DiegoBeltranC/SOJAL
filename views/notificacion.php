<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/homeContent.css" />
    <link rel="stylesheet" href="../css/modals.css" />
    <link rel="stylesheet" href="../css/notificacion.css" />
    
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
        <div class="filters-table">
          <h1>Notificaciones</h1>
          <h2>Filtrar por</h2>

          <div class="notification-div-filter">
            <label for="fecha-inicio-filter">Fecha Inicio: </label>
            <input type="date" min="2020-01-01" id="fecha-inicio-filter" class="input-notification-filter">

            <label for="fecha-expiracion-filter">Fecha Expiración: </label>
            <input type="date" id="fecha-inicio-filter">
            <br>
            <br>


            <button type="button" class="btn-filter" id="">Filtrar</button>
            <button type="button" class="btn-primary" id="btnModal">Nuevo</button>
          </div>

        </div>

        <div class="table-container">
          <table>
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Título</th>
                      <th>Administrador</th>
                      <th>Me gusta</th>
                      <th>Fecha de Publicación</th>
                      <th>Fecha de Expiración</th>
                      <th>Acciones</th>
                  </tr>
              </thead>
              <tbody>
                  <!-- Example Row -->
                  <tr>
                      <td>1</td>
                      <td>Título de la Noticia</td>
                      <td>Admin1</td>
                      <td>10</td>
                      <td>2024-07-10</td>
                      <td>2024-08-10</td>
                      <td><button type="button" class="btn-warning" id="detalles">Detalles</button></td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>

  <div id="contenedor" class="contenedor">
    <div id="contenedor-form">
      <form class="form">
          <div class="container">
          <img src="../images/cancelar.png" width="6%" alt="Cancelar" id="btnCancelarModalNuevo" class="btnCancelar"/>
          </div>
          <h1 class="titulo">Nueva notificacion</h1>
          <hr class="hr" />
          
          <div>
            <div class="row">
                <input class="inputs"  type="text" id="ftitulo" name="titulo" placeholder="Titulo" required />
            </div>

            <br>

            <div class="row">
                <input class="inputs"  type="file" id="fileDocumento" name="fileDocumento">
            </div>

            <br>

            <div class="row">
              <div class="col-izquierda">
                <label class="label" for="ffecha-publi"> Inicio: </label>
                  <input class="inputs"  type="date" id="ffecha-publi" name="fehaPubli" required>
              </div>
              <div class="col-derecha">
                <label class="label" for="ffecha-publi"> Fin: </label>
                <input class="inputs"  type="date" id="ffecha-elim" name="fechaEli" required>
              </div>
            </div>

            <br>

            <div class="row">
                <textarea class="inputs"  id="fcuerpo" name="cuerpo" placeholder="Escribe.." style="height: 200px" required ></textarea>
            </div>

            <br>
          </div>
          <input type="submit" value="Guardar" />
      </form>
    </div>
  </div>

  <div id="editar" class="editar">
    <div id="contenedor-form">
      <form class="form">
          <div class="container">
          <img src="../images/cancelar.png" width="6%" alt="Cancelar"  id="btnCancelarModalEditar" class="btnCancelar">
          </div>
          <h1 class="titulo">Editar notificacion</h1>
          <hr class="hr" />
          
          <div>
            <div class="row">
              <input class="inputs" type="text" id="fEdittitulo" name="titulo"  value="Titulo anterior" />
            </div>

            <br>

            <div class="row">
              <input class="inputs" type="file" id="EditfileDocumento" name="fileDocumento">
            </div>

            <br>

            <div class="row">
              <div class="col-izquierda">
                <label class="label" for="Editffecha-publi"> Inicio: </label>
                <input class="inputs" type="date" id="Editffecha-publi" name="fehaPubli" value="2024-07-14">
              </div>
              <div class="col-izquierda">
                <label class="label" for="Editffecha-elim"> Fin: </label>
                <input class="inputs" type="date" id="Editffecha-elim" name="fechaEli" value="2024-07-15">
              </div>
            </div>

            <br>

            <div class="row">
                <textarea class="inputs" id="fEditcuerpo" name="cuerpo" placeholder="Escribe.." style="height: 200px" value="Texto anterior" ></textarea>
            </div>

            <br>

            <p class="label">@Ariel Alejandro Rivero Moo</p>
          </div>
          <input type="submit" value="Guardar" />
      </form>
    </div>
  </div>
  <script src="../JS/modal.js"></script>

</body>
</html>

