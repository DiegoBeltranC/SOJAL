// Obtener los elementos del DOM
const modal = document.getElementById('modal');
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');

// Abrir el modal cuando se hace clic en el botón
openModalBtn.addEventListener('click', () => {
  modal.style.display = 'flex';
});

// Cerrar el modal cuando se hace clic en el botón de cerrar
closeModalBtn.addEventListener('click', () => {
  modal.style.display = 'none';
});

// Cerrar el modal si se hace clic fuera del contenido del modal
window.addEventListener('click', (e) => {
  if (e.target === modal) {
    modal.style.display = 'none';
  }
});

// Prevenir el envío del formulario para mostrarlo en la consola (puedes agregar más lógica aquí)
document.getElementById('contactForm').addEventListener('submit', (e) => {
  e.preventDefault();
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const message = document.getElementById('message').value;
  console.log(`Nombre: ${name}, Correo: ${email}, Mensaje: ${message}`);
  alert('Formulario enviado');
  modal.style.display = 'none'; // Cerrar el modal después de enviar
});
