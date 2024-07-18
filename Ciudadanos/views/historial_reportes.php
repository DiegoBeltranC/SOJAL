<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="../css/historial_reportes.css">
    <link rel="stylesheet" href="../modals_css/modal_form_report.css">
</head>
<body>
<div id="contenedor" class="contenedor">
    <div id="contenedor-form">
      <form class="form" >
        <div class="container">
          <img src="../../images/cancelar.png" width="6%" alt="Cancelar" id="btnCancelarModal" />
        </div>
        <h1 class="titulo">Reporte</h1>
        <hr class="hr" />
        <div class="form-content">
 
          <div>
            <label class="label" for="colonia">Colonia: </label><br>
            <p>Bosques de lago</p>
          </div>
          <div>
            <label class="label" for="calle">Calle: </label><br>
            <p>Bosques Mediterraneo</p>
          </div>
          <div>
            <label class="label" for="calle">Codigo Postal: </label><br>
            <p>77029</p>
          </div>
          <div>
            <label class="label" for="descripcion">Descripcion: </label><br>
            <p>Hay un acumulamiento de basura en la calle, no han pasado por dias</p>
          </div>
          <div>
            <label class="label" for="tipo">Tipo: </label><br>
            <p>Bolsas acumuladas</p>
          </div>
          <div>
            <label class="label" for="referencias">Referencias: </label><br>
            <p>a un lado de un arbol</p>
          </div>
          <div>
            <label class="label" for="resolucion">Resolucion: </label><br>
            <p>1 semana aprox.</p>
          </div>
          <div>
            <label class="label" for="resolucion">Fecha: </label><br>
            <p>05-27-2024</p>
          </div> 
        </div>
      </form>
    </div>
  </div>

    <div class="nav">
        <div class="user-container">
            <a href="../usuario_index.php">
                <div class="user-icon-container"><img src="../../Icons/back_icon.png" alt=""></div>
            </a>

        </div>
        <div class="log-out-container">
            <button id="log-out">Cerrar Session</button>
        </div>
    </div>

    <div class="main-container">
        <div class="main-reports-container">
            <div class="filter-container">
                <div>
                    <label for="date-filter">Filter</label>
                    <br>
                    <select name="" id="date-filter">
                        <option value="">2024</option>
                    </select>
                </div>
                <div>
                    <label for="buscar-reporte">Busca Reporte</label>
                    <br>
                    <input type="search">
                </div>
            </div>

            <div class="reports-container">
                <div class="report">
                    <div class="report-image">
                        <img src="../../Icons/101671.png" alt="">
                    </div>
                    <div>
                        <h3>Bosque De lago</h3>
                        <p>77029</p>
                    </div>
                    <div>
                        <p>05-27-2024</p>
                    </div>
                    <div>
                        <button class="modal-report-btn">Detalles</button>
                    </div>
                </div>
                <div class="report">
                    <div class="report-image">
                        <img src="../../Icons/101671.png" alt="">
                    </div>
                    <div>
                        <h3>Bosque De lago</h3>
                        <p>77029</p>
                    </div>
                    <div>
                        <p>05-27-2024</p>
                    </div>
                    <div>
                        <button class="modal-report-btn">Detalles</button>
                    </div>
                </div>
                <div class="report">
                    <div class="report-image">
                        <img src="../../Icons/101671.png" alt="">
                    </div>
                    <div>
                        <h3>Bosque De lago</h3>
                        <p>77029</p>
                    </div>
                    <div>
                        <p>05-27-2024</p>
                    </div>
                    <div>
                        <button class="modal-report-btn">Detalles</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="../js/historial_reporte_modal.js"></script>
</body>
</html>