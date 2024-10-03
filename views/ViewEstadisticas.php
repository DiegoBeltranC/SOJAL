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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../images/icons-page/GraficoCircular.png" />
  <title>Estadísticas</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="../css/ViewEstadisticas.css">
  <link rel="stylesheet" href="../css/Page.css">
</head>
<body>
  <!-- Contenedor-->
  <div class="home-container">
    <!-- SideBar-->
    <?php include '../layouts/sidebar.php';?>
    
    <!-- Contenido-->
    <div class="content">
      <h2>ESTADÍSTICAS</h2>
      <div>
                <label>
                    <input type="radio" name="chartType" value="pie" checked onchange="changeChartType()"> Gráfico de Pastel
                </label>
                <label>
                    <input type="radio" name="chartType" value="bar" onchange="changeChartType()"> Gráfico de Barras
                </label>
            </div>
            <div class="container-graph">
                <canvas id="myChart"></canvas>
            </div>
    </div>
  </div>
  <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        let myChart;

        function createChart(type) {
            const data = {
                labels: ['Rojo', 'Azul', 'Verde'],
                datasets: [{
                    label: 'Distribución',
                    data: [10, 40, 50],
                    backgroundColor: type === 'pie' ? ['red', 'blue', 'green'] : ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(75, 192, 192, 0.2)'],
                    borderColor: type === 'pie' ? [] : ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(75, 192, 192, 1)'],
                    borderWidth: type === 'bar' ? 1 : 0,
                }]
            };

            if (myChart) {
                myChart.destroy(); // Destruir el gráfico existente
            }

            myChart = new Chart(ctx, {
                type: type,
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                    },
                }
            });
        }

        function changeChartType() {
            const chartType = document.querySelector('input[name="chartType"]:checked').value;
            createChart(chartType);
        }

        // Crear el gráfico inicial
        createChart('pie');
    </script>

  <script src="../js/ViewSideBar.js"></script>
</body>
</html>
