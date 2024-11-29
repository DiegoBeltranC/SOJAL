<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOJAL | Home</title>
    <link rel="icon" href="./images/icons/logo.png" />
    <link rel="stylesheet" href="./css/navbar.css" />
    <link rel="stylesheet" href="./css/ViewHome.css" />
</head>
<body>
    <?php include './components/viewLogin.php'; ?>
    <?php include './layouts/startnavbar.php'; ?>

    <!-- Sección principal: ¿Qué es SOJAL? -->
    <div class="contenedor-principal" id="inicio">
        <div class="contenedor-inf">
            <h1>¿Qué es SOJAL?</h1>
            <p>Sojal es un innovador proyecto diseñado para abordar 
            la problemática de la acumulación de basura en la ciudad 
            de Chetumal. En respuesta a la creciente cantidad de residuos 
            sólidos que afectan tanto la imagen urbana como la salud de los
            habitantes, Sojal propone una solución tecnológica a través de 
            una aplicación móvil, donde los ciudadanos podrán notificar el
            gobierno para que acudan a solucionar el problema con ayuda con 
            los trabajadores de la basura.</p>
        </div>
        <div class="img">
            <img src="./images/RecolectorBasura.jpg" alt="Imagen descriptiva">
        </div>
    </div>

    <section id="quienesSomos" class="section-info">
    <h2>¿Quiénes somos?</h2>
    <p>
        SOJAL es un equipo comprometido con el desarrollo de soluciones tecnológicas que mejoren la calidad de vida de los ciudadanos. 
        Nos enfocamos en aprovechar la tecnología para resolver problemas sociales, promoviendo la sostenibilidad y el bienestar de la comunidad.
    </p>
    <!-- Tarjetas de integrantes del equipo -->
    <div class="team-container">
        <div class="team-card">
            <img src="./images/team1.jpg" alt="Integrante 1">
            <h3>Integrante 1</h3>
            <p>Desarrollador Backend</p>
        </div>
        <div class="team-card">
            <img src="./images/team2.jpg" alt="Integrante 2">
            <h3>Integrante 2</h3>
            <p>Desarrollador Frontend</p>
        </div>
        <div class="team-card">
            <img src="./images/team3.jpg" alt="Integrante 3">
            <h3>Integrante 3</h3>
            <p>Diseñador UX/UI</p>
        </div>
        <div class="team-card">
            <img src="./images/team4.jpg" alt="Integrante 4">
            <h3>Integrante 4</h3>
            <p>Gestor de Proyectos</p>
        </div>
        <div class="team-card">
            <img src="./images/team5.jpg" alt="Integrante 5">
            <h3>Integrante 5</h3>
            <p>Analista de Datos</p>
        </div>
    </div>
</section>


    <!-- Nueva sección: Descargar App -->
    <section id="descargarApp" class="section-info descargar-app">
        <h2>Descargar App</h2>
        <p>Nuestra aplicación está disponible para dispositivos Android y próximamente para iOS. Descarga la app y reporta incidencias de acumulación de basura de manera rápida y sencilla.</p>
        <div class="descargar-links">
            <a href="#" class="btn-download">Descargar en Android</a>
            <a href="#" class="btn-download btn-disabled">Próximamente en iOS</a>
        </div>
    </section>

    <!-- Sección de beneficios -->
    <section class="features">
        <h2>Nuestros Beneficios</h2>
        <div class="container-cards">
            <div class="card">
                <h3>Reporte fácil</h3>
                <p>Notifica problemas de acumulación de basura de manera sencilla desde tu dispositivo móvil.</p>
            </div>
            <div class="card">
                <h3>Gestión eficiente</h3>
                <p>Los reportes son asignados rápidamente a los trabajadores correspondientes.</p>
            </div>
            <div class="card">
                <h3>Salud y ambiente</h3>
                <p>Contribuye a mejorar la salud pública y la calidad ambiental de tu ciudad.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 SOJAL. Todos los derechos reservados.</p>
        <p>
            <a href="#inicio">Inicio</a> | 
            <a href="#quienesSomos">Quiénes Somos</a> | 
            <a href="#descargarApp">Descargar App</a>
        </p>
    </footer>
</body>
</html>



