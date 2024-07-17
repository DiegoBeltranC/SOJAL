<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/homeContent.css" />
    <link rel="stylesheet" href="../css/modals.css" />
    <title>Trabajadores</title>
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
          <h1>Trabajadores</h1>
          <h2>Filtrar por</h2>

          <div class="notification-div-filter">
            <label for="fnombre">Nombre Trabajador: </label>
            <input type="text"  id="fnombre" class="input-notification-filter">
            <br><br>
            <label for="fnombre">Reporte: </label>
            <select name="colonia" id="colonia">
              <option value="">ejemplo 1</option>
              <option value="">ejemplo 2</option>
            </select>
            <br>
            <br>

            <button type="button" class="btn btn-primary">Filtrar</button>
            <button type="button" class="btn-primary" id="btnModal">Nuevo</button>
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
                      <td><button type="button" class="btn-warning" id="detalles">Detalles</button></td>
                  </tr>
              </tbody>
          </table>
        </div>
    </div>

    <div id="contenedor" class="contenedor">
        <div id="contenedor-form">
            <form class="form" >
                <div class="container">
                <img src="../images/cancelar.png" width="6%" alt="Cancelar" id="btnCancelarModalNuevo" class="btnCancelar"/>
                </div>
                <h1 class="titulo">Nuevo trabajador</h1>
                <hr class="hr" />
                <div>
                
                    <div class="row">
                        <label class="label" for="fnombre">Nombres:</label>
                        <input class="inputs" type="text" id="fnombre" name="nombre" />
                    </div>

                    <br>

                    <div class="row">  
                        <div class="col-izquierda">
                            <label class="label" for="fapepat">Apellido Paterno:</label>
                            <input class="inputs" type="text" id="fapepat" name="apepat">
                        </div>      
                        <div class="col-derecha">
                            <label class="label" for="fapemat">Apellido Materno:</label>
                            <input class="inputs" type="text" id="fapemat" name="apemat">
                        </div>  
                    </div>

                    <br>

                    <div class="row">

                        <div class="col-izquierda">
                            <label class="label" for="ffechanaci">Fecha de nacimiento:</label>
                        </div>   

                        <div class="col-derecha">
                            <input class="inputs" type="date" id="ffechanaci" name="fechanaci">
                        </div> 
                    </div>

                    <br>

                    <div class="row">  
                        <div class="col-izquierda">
                            <label class="label" for="fcurp">Curp:</label>
                            <input class="inputs" type="text" id="fcurp" name="curp">
                        </div>      
                        <div class="col-derecha">
                            <label class="label" for="frfc">RFC:</label>
                            <input class="inputs" type="text" id="frfc" name="rfc">
                        </div>  
                    </div>

                    <br>

                    <div class="row">  
                        <label class="label" for="fileDocumento">Foto:</label>
                        <input class="inputs" type="file" id="fileDocumento" name="fileDocumento">
                    </div>

                    <br>

                    <div class="row">  
                            <label class="label">Sexo</label><br>
                            <input type="radio" id="fmasculino" name="rsexo" value="masculino">
                            <label class="label" for="fmasculino"> Masculino</label><br>
                            <input type="radio" id="ffemenino" name="rsexo" value="femenino">
                            <label class="label" for="ffemenino"> Femenino</label><br>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-30">
                            <label class="label">Camion</label>
                            <select id="fcamion" name="select">
                            <option value="1" >Camion 1</option>
                            <option value="2" >camion 2</option>
                            <option value="3">camion 3</option>
                            </select>
                        </div>
                    </div>

                    <br>

                </div>
                <input type="submit" value="Guardar" />
            </form>
        </div>
    </div>

    <div id="editar" class="editar">
        <div id="contenedor-form">
        <form class="form" >
            <div class="container">
            <img src="../images/cancelar.png" width="6%" alt="Cancelar" id="btnCancelarModalEditar" class="btnCancelar"/>
            </div>
            <h1 class="titulo">Trabajador</h1>
            <hr class="hr" />
            <!--
          class="label" 
                      class="inputs" 
                      -->
            <div>
                <br>
                <label class="label" for="name">Nombre:</label>
                <input class="inputs" type="text" id="txtNombre" name="txtNombre" class="right-aligned" required>

                <br>
                <label  class="label" for="apellidop">Apellido Paterno:</label>
                <input  class="inputs" type="text" id="txtApellido" name="txtApellido" class="right-aligned" required>
            
                <br>
                <label class="label" for="maternalLastName">Apellido Materno:</label>
                <input class="inputs" type="text" id="txtApellidoM" name="txtApellidoM" class="right-aligned" required>
                
                <br>
                <label  class="label" for="curp" id="crp">CURP:</label>
                <input class="inputs" type="file" id="txtCurp" name="txtCurp" required>

                <br>
                <label class="label" for="birthCertificate">Acta de Nacimiento:</label>
                <input class="inputs" type="file" id="txtActa" name="txtActa"required>

                <br>
                <label  class="label"for="rfc">RFC:</label>
                <input class="inputs" type="file" id="txtRFC" name="txtRFC" required><br >

                <!--<i class='bx bxs-user-circle'></i>
                <i class='bx bxs-calendar' id="calendar"></i>-->
                
                <br>
                <label class="label" id="lb3">Edad 32 </label>
            </div>
            <input type="submit" value="Guardar" />
        </form>
        </div>
</div>
  
    <script src="../js/modal.js"></script>
</body>
</html>

