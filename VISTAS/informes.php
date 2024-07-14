<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
    <!--<link rel="stylesheet" href="../css/trabajador.css"/>-->
    <link rel="stylesheet" href="../css/trabajador.css"/>
    <title>Evaluar informes</title>
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
          <h1>Evaluar informes</h1>
          <!--<h2>Foto de maps de chetumal</h2>-->

          <div class="notification-div-filter">
            <h2>Sección</h2>
            <label for="postal">Código postal: </label>
            <input type="text" id="postal" class="input-notification-filter">
            <label for="colonia">Colonia: </label>
            <select name="colonia" id="colonia">
              <option value="">ejemplo 1</option>
              <option value="">ejemplo 2</option>
            </select>
            <button type="button" class="btn btn-primary" >Filtrar</button>
            <br>
            <br>

            <h2>Filtrar por</h2>
            <label for="publicaciones">Publicaciones: </label>
            <select name="publicaciones" id="publicaciones">
              <option value="">ejemplo 1</option>
              <option value="">ejemplo 2</option>
            </select>
            <label for="tipo">Tipo: </label>
            <select name="tipo" id="tipo">
              <option value="">ejemplo 1</option>
              <option value="">ejemplo 2</option>
            </select>
            <label for="estatus">Estatus: </label>
            <select name="estatus" id="estatus">
              <option value="">ejemplo 1</option>
              <option value="">ejemplo 2</option>
            </select>
          </div>

        </div>

        <div class="table-container">
          <table>
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Tipo</th>
                      <th>Usuario</th>
                      <th>Fecha de creación</th>
                      <th>Estatus</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
                  <!-- Example Row -->
                  <tr>
                      <td>1</td>
                      <td>Escombro</td>
                      <td>Ariel</td>
                      <td>2024-07-10</td>
                      <td>Espera</td>
                      <td><button type="button" class="btn btn-success" id="nuevo">Asignar</button></td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
  <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="exampleModalLabel">Asignar reporte</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmTrabajador" onsubmit="return validarForm();" action="validar_datos.php" method="post" >

                    <div class="row">
                      <div class="col-izquierda">
                        <label for="tipo_reporte">Tipo de reporte: </label>
                        <select name="tipo_reporte" id="ftipo_reporte">
                          <option value="">ejemplo 1</option>
                          <option value="">ejemplo 2</option>
                        </select>
                      </div>   

                      <div class="col-derecha">
                            <p>Una foto de no se que</p>
                        </div>  
                    </div>

                    <br>

                    <div class="row">

                        <div class="col-izquierda">
                          <h4>Descripción</h4>
                          <p>Lo saca de la bd</p>

                          <br>

                          <p>Creado por <br>@Ariel Alejandro Rivero Moo</p>
                        </div>   

                        <div class="col-derecha">
                            
                        </div> 
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-30">
                            <label>Trabajador</label>
                            <select id="fTrabajador" name="select">
                            <option value="1" >Trabajador 1</option>
                            <option value="2" >Trabajador 2</option>
                            <option value="3">Trabajador 3</option>
                            </select>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <input type="hidden" id="fid" name="id" value="1" />
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Asignar" />
            </div>
        </div>
    </div>
  </div>
   
</body>
</html>

<script>
  $(document).ready(function() {
      $("#nuevo").click(function() {
          $("#modal").modal('show');
      });
  });   
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>