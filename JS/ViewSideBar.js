let isActive = false;

const sidebar = document.querySelector('.sidebar'); 
const content = document.querySelector('.home-container'); // Selecciona el contenido

function checkWindowSize() {
    if (window.innerWidth <= 768) {
        sidebar.classList.add('active'); // Agrega la clase 'active' si está en modo teléfono
        content.classList.add('active'); // Agrega la clase 'active' al contenido
        isActive = true; // Cambia el estado a activo
    } else {
        sidebar.classList.remove('active'); // Quita la clase 'active' si no está en modo teléfono
        content.classList.remove('active'); // Quita la clase 'active' del contenido
        isActive = false; // Cambia el estado a inactivo
    }
}

// Verifica el tamaño de la ventana al cargar
checkWindowSize();

// Verifica el tamaño de la ventana en el redimensionamiento
window.addEventListener('resize', checkWindowSize);

document.getElementById("menu-toggle").addEventListener("click", function () {
    isActive = !isActive; // Cambia el estado
    
    if (isActive) {
        sidebar.classList.add('active'); // Añade la clase 'active' a la sidebar
        content.classList.add('active'); // Añade la clase 'active' al contenido
    } else {
        sidebar.classList.remove('active'); // Quita la clase 'active' de la sidebar
        content.classList.remove('active'); // Quita la clase 'active' del contenido
    }
});

let isActiveProfile = false;
const profile = document.querySelector('.profile-content');

document.getElementById("photo").addEventListener("click", function () {
    isActiveProfile = !isActiveProfile; // Cambia el estado
    
    if (isActiveProfile) {
        profile.classList.add('active'); 
    } else {
        profile.classList.remove('active'); 
    }
});