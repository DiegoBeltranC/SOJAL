<?php
session_start();

if (!isset($_SESSION['autenticado']) && $_SESSION['autenticado'] !== true) {
    header("Location: ../index.php");
    exit(); 
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

  <link rel="stylesheet" href="../css/Page.css">
  <link rel="stylesheet" href="../css/ViewEstadisticas.css">

</head>
<body>
<?php include '../layouts/NavBar.php'; ?>
<!-- Contenedor-->
<div class="home-container">
    <!-- SideBar-->
    <?php include '../layouts/sidebar.php'; ?>
    
    <!-- Contenido-->
    <div class="content" id="content">
        <h2>ESTADÍSTICAS</h2>
        

        <div class="content-data">
              <div class="data espera">
                <h3>En Espera</h3>
                <p>15</p>
             </div>
             <div class="data progreso">
                <h3>En Proceso</h3>
                <p>6</p>
            </div>
             <div class="data finalizado">
                 <h3>Finalizados</h3>
                 <p>10</p>
             </div>
        </div>
        <div class="grid-container">
            <!-- Gráfico 1 -->
            <div class="container-graph">
                <h3>Gráfico 1</h3>
                <canvas id="myChart1"></canvas>
            </div>
            
            <!-- Gráfico 2 -->
            <div class="container-graph">
                <h3>Gráfico 2</h3>
                <canvas id="myChart2"></canvas>
            </div>
            
            <!-- Gráfico 3 -->
            <div class="container-graph">
                <h3>Gráfico 3</h3>
                <canvas id="myChart3"></canvas>
            </div>
            
            <!-- Gráfico 4 -->
            <div class="container-graph">
                <h3>Gráfico 4</h3>
                <canvas id="myChart4"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
    const chartsData = [
        {
            labels: ['Rojo', 'Azul', 'Verde'],
            data: [10, 40, 50],
            backgroundColor: ['#ec7063', '#a9cce3', '#7dcea0']
        },
        {
            labels: ['Amarillo', 'Naranja', 'Púrpura'],
            data: [30, 20, 15],
            backgroundColor: ['#1abc9c', '#5499c7', '#a569bd']
        },
        {
            labels: ['Cyan', 'Magenta', 'Negro'],
            data: [25, 10, 5],
            backgroundColor: ['#45b39d', '#ec7063', '#f5b041']
        },
        {
            labels: ['Gris', 'Brown', 'Beige'],
            data: [15, 35, 20],
            backgroundColor: ['#ec7063', '#f39c12', '#48c9b0']
        }
    ];

    function createChart(canvasId, chartData) {
        const ctx = document.getElementById(canvasId).getContext('2d');
        return new Chart(ctx, {
            type: 'pie', // Puedes cambiar a 'bar' si lo deseas
            data: {
                labels: chartData.labels,
                datasets: [{
                    label: 'Distribución',
                    data: chartData.data,
                    backgroundColor: chartData.backgroundColor,
                    borderColor: chartData.backgroundColor.map(color => color.replace('0.2', '1')), // Ajustar borde
                    borderWidth: 1,
                }]
            },
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

    // Crear los gráficos
    chartsData.forEach((chartData, index) => {
        createChart(`myChart${index + 1}`, chartData);
    });
</script>

<script src="../js/ViewSideBar.js"></script>
</body>
</html>