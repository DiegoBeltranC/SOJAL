document.getElementById("btnCancelarModal").addEventListener("click", function (){
    var div = document.querySelector(".contenedor");
    div.style.display = "none";
  });


  document.getElementById('detalles').addEventListener('click', function() {
    let div = document.querySelector('.contenedor');
    document.querySelector('.contenedor').style.display = 'block';
    div.classList.add('animated'); 

});