document.getElementById("btnCancelarModalNuevo").addEventListener("click", function () {
    var div = document.querySelector(".contenedor");
    div.style.display = "none";
  });

  document.getElementById("btnCancelarModalEditar").addEventListener("click", function () {
    var div = document.querySelector(".editar");
    div.style.display = "none";
  });

document.getElementById('btnModal').addEventListener('click', function() {
    let div = document.querySelector('.contenedor');
    document.querySelector('.contenedor').style.display = 'block';
    div.classList.add('animated'); 
});

document.getElementById('detalles').addEventListener('click', function() {
  let div = document.querySelector('.editar');
  document.querySelector('.editar').style.display = 'block';
  div.classList.add('animated'); 
});