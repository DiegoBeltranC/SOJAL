let modalClose = document.getElementById('btnCancelarModal');
document.addEventListener("DOMContentLoaded", function() {
    let modalBtns = document.getElementsByClassName('modal-report-btn');

    // Agregar listener a cada botón de modal
    for (let i = 0; i < modalBtns.length; i++) {
        modalBtns[i].addEventListener('click', function() {
            let div = document.querySelector('.contenedor');
            document.querySelector('.contenedor').style.display = 'block';
            div.classList.add('animated'); 
        });
    }})





modalClose.onclick = ()=>{
    var div = document.querySelector(".contenedor");
    div.style.display = "none";
}