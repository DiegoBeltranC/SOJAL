<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
    <title>Estadisticas</title>
</head>
<body>
<?php include 'sidebar.php';?>
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

            <label for="creation-filter">Creacion</label>
            <select name="creation-filter" id="creation-filter">
              <option value="reciente">reciente</option>
              <option value="hace-un-mes">Hace un mes</option>
              <option value="hace-un-ano">Hace un año</option>
            </select>

            <label for="">Estado: </label>
            <select name="state-filter" id="state-filter">
              <option value="activo">activo</option>
              <option value="inactivo">inactivo</option>
            </select>
            <button type="button" class="btn btn-success" id="">Filtrar</button>
            <button type="button" class="btn btn-success" id="nuevo">Nuevo</button>
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
                      <th>Estado</th>
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
                      <td>Activo</td>
                      <td>2024-07-10</td>
                      <td>2024-08-10</td>
                      <td><button type="button" class="btn btn-success" id="detalles">Detalles</button></td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>

  <div class="modal fade" id="insertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="exampleModalLabel" style="text-align: center;">Nueva notificacion</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="validar_datos.php" method="post">
                    <div class="row">
                        <input type="text" id="ftitulo" name="titulo" placeholder="Titulo" required />
                    </div>

                    <br>

                    <div class="row">
                        <input type="file" id="fileDocumento" name="fileDocumento">
                    </div>

                    <br>

                    <div class="row">

                        <div class="col-50">
                            Inicio: <input type="date" id="ffecha-publi" name="fehaPubli" required>
                        </div>
                        <div class="col-50">
                            Fin: <input type="date" id="ffecha-elim" name="fechaEli" required>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <textarea id="fcuerpo" name="cuerpo" placeholder="Escribe.." style="height: 200px" required ></textarea>
                    </div>

                    <br>

                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Crear" />
            </div>
        </div>
    </div>
  </div>

  <div class="modal fade" id="examinar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="exampleModalLabel" style="text-align: center;">Nueva notificacion</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="validar_datos.php" method="post">
                    <div class="row">
                        <input type="text" id="fEdittitulo" name="titulo"  value="Titulo anterior" />
                    </div>

                    <br>

                    <div class="row">
                        <input type="file" id="EditfileDocumento" name="fileDocumento">
                    </div>

                    <br>

                    <div class="row">

                        <div class="col-50">
                            Inicio: <input type="date" id="Editffecha-publi" name="fehaPubli" value="2024-07-14">
                        </div>
                        <div class="col-50">
                            Fin: <input type="date" id="Editffecha-elim" name="fechaEli" value="2024-07-15">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <textarea id="fEditcuerpo" name="cuerpo" placeholder="Escribe.." style="height: 200px" value="Texto anterior" ></textarea>
                    </div>

                    <br>

                    <p>@Ariel Alejandro Rivero Moo</p>

                </form>
            </div>
            <div class="modal-footer">
                
                <input type="submit" class="btn btn-danger" value="Eliminar" />
                <input type="submit" class="btn btn-success" value="Crear" />
            </div>
        </div>
    </div>
  </div>
</body>
</html>

<script>
  $(document).ready(function() {
      $("#nuevo").click(function() {
          $("#insertar").modal('show');
      });
      $("#detalles").click(function() {
          $("#examinar").modal('show');
      });
  });   
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>