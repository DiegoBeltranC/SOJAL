<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/trabajador.css"/>
    <title>Trabajadores</title>
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
          <h1>Trabajadores</h1>
          <h2>Filtrar por</h2>

          <div class="notification-div-filter">
            <label for="fecha-inicio-filter">Fecha Inicio: </label>
            <input type="date" min="2020-01-01" id="fecha-inicio-filter" class="input-notification-filter">

            <label for="fecha-expiracion-filter">Fecha Expiración: </label>
            <input type="date" id="fecha-inicio-filter">
            <br>
            <br>

            <button type="button" class="btn btn-primary" >Filtrar</button>
            <button type="button" class="btn btn-success" id="nuevo">Nuevo</button>
          </div>

        </div>

        <div class="table-container">
          <table>
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Trabajador</th>
                      <th>Reporte</th>
                      <th>Fecha inicio</th>
                      <th>Acciones</th>
                  </tr>
              </thead>
              <tbody>
                  <!-- Example Row -->
                  <tr>
                      <td>1</td>
                      <td>Ariel Alejandro Rivero Moo</td>
                      <td>#1</td>
                      <td>2024-07-10</td>
                      <td><button type="button" class="btn btn-warning" id="detalles">Detalles</button></td>
                  </tr>
              </tbody>
          </table>
        </div>
    </div>

    <div class="modal fade" id="insertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="exampleModalLabel">Nuevo trabajador</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="frmTrabajador" onsubmit="return validarForm();" action="validar_datos.php" method="post" >

                        <div class="row">
                            <label for="fnombre">Nombres:</label>
                            <input type="text" id="fnombre" name="nombre" />
                        </div>

                        <br>

                        <div class="row">  
                            <div class="col-izquierda">
                                <label for="fapepat">Apellido Paterno:</label>
                                <input type="text" id="fapepat" name="apepat">
                            </div>      
                            <div class="col-derecha">
                                <label for="fapemat">Apellido Materno:</label>
                                <input type="text" id="fapemat" name="apemat">
                            </div>  
                        </div>

                        <br>

                        <div class="row">

                            <div class="col-izquierda">
                                <label for="ffechanaci">Fecha de nacimiento:</label>
                            </div>   

                            <div class="col-derecha">
                                <input type="date" id="ffechanaci" name="fechanaci">
                            </div> 
                        </div>

                        <br>

                        <div class="row">  
                            <div class="col-izquierda">
                                <label for="fcurp">Curp:</label>
                                <input type="text" id="fcurp" name="curp">
                            </div>      
                            <div class="col-derecha">
                                <label for="frfc">RFC:</label>
                                <input type="text" id="frfc" name="rfc">
                            </div>  
                        </div>

                        <br>

                        <div class="row">  
                            <div class="col-70">
                                <label for="fileDocumento">Foto:</label>
                                <input type="file" id="fileDocumento" name="fileDocumento">
                            </div>      
                            <div class="col-30">
                                <label>Sexo</label><br>
                                <input type="radio" id="fmasculino" name="rsexo" value="masculino">
                                <label for="fmasculino"> Masculino</label><br>
                                <input type="radio" id="ffemenino" name="rsexo" value="femenino">
                                <label for="ffemenino"> Femenino</label><br>
                            </div>  
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-30">
                                <label>Camion</label>
                                <select id="fcamion" name="select">
                                <option value="1" >Camion 1</option>
                                <option value="2" >camion 2</option>
                                <option value="3">camion 3</option>
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
                    <input type="submit" class="btn btn-primary" value="Registrar" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="examinar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="exampleModalLabel">Trabajador</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="AU5.php" method="post">
                        <label for="name">Nombre:</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="right-aligned" required>

                        <label for="apellidop">Apellido Paterno:</label>
                        <input type="text" id="txtApellido" name="txtApellido" class="right-aligned" required>
                    
                        <label for="maternalLastName">Apellido Materno:</label>
                        <input type="text" id="txtApellidoM" name="txtApellidoM" class="right-aligned" required>
                        
                        <label for="curp" id="crp">CURP:</label>
                        <input type="file" id="txtCurp" name="txtCurp" required>

                        <label for="birthCertificate">Acta de Nacimiento:</label>
                        <input type="file" id="txtActa" name="txtActa"required>

                        <label for="rfc">RFC:</label>
                        <input type="file" id="txtRFC" name="txtRFC" required><br >

                        <i class='bx bxs-user-circle'></i>
                        <i class='bx bxs-calendar' id="calendar"></i>
                        <label id="lb2">Admin. Jose Luis Chavez </label>
                        <label id="lb3">Edad 32 </label>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="detalles">Eliminar</button>
                    <button type="button" class="btn btn-success" id="detalles">Guardar</button>
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