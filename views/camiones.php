<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Camiones</title>
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
          <h1>Camiones</h1>
          <h2>Filtrar por</h2>

          <div class="notification-div-filter">
            <label for="fmarca">Marca: </label>
            <input type="text"  id="fmarca" class="input-notification-filter">
            <label for="fmodelo">Modelo: </label>
            <input type="text"  id="fmodelo" class="input-notification-filter">
            <label for="fmatricula">Matricula: </label>
            <input type="text"  id="fmatricula" class="input-notification-filter">
            <button type="button" class="btn btn-primary" id="">Filtrar</button>
            <button type="button" class="btn btn-success" id="nuevo">Nuevo camion</button>
          </div>

        </div>

        <div class="table-container">
          <table>
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Id ruta</th>
                      <th>Matricula</th>
                      <th>Marca</th>
                      <th>Modelo</th>
                      <th>Estado</th>
                      <th>Acciones</th>
                  </tr>
              </thead>
              <tbody>
                  <!-- Example Row -->
                  <tr>
                      <td>1</td>
                      <td>#2</td>
                      <td>ASW-3423</td>
                      <td>DAF</td>
                      <td>2015</td>
                      <td>Activo</td>
                      <td><button type="button" class="btn btn-warning" id="detalles">Detalles</button></td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
    <div class="modal fade" id="crear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="exampleModalLabel">Crear</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Matense</p>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Guardar" />
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="exampleModalLabel">Editar camion</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Matense</p>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Borrar" />
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>

<script>
        $(document).ready(function() {
            $("#nuevo").click(function() {
                $("#crear").modal('show');
            });
            $("#detalles").click(function() {
                $("#editar").modal('show');
            });
        });
        
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>